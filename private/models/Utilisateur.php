<?php
class Utilisateur extends Model{

	protected $allowedColumns = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'role',
        'date',
        'image',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'hash_password'
        
    ];

    protected $beforeUpdate = [
        'hash_password'
    ];

// check and validate the inserted user data
    public function validate($DATA,$id = '')
    {
        $this->errors = array();

        //check for 'nom'
        if(empty($DATA['nom']) || !preg_match('/^[a-zA-Z]+$/', $DATA['nom']))
        {
            $this->errors['nom'] = "le nom ne doit contenir que des lettres";
        }

        //check for 'prenom'
        if(empty($DATA['prenom']) || !preg_match('/^[a-zA-Z]+$/', $DATA['prenom']))
        {
            $this->errors['prenom'] = "le prenom ne doit contenir que des lettres";
        }

        //check for 'email'
        if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "email non valide";
        }
        
        //check if email exists
        if(trim($id) == ""){
            if($this->where('email',$DATA['email']))
            {
                $this->errors['email'] = "email déja existant";
            }
        }else{
            if($this->query("select email from $this->table where email = :email && user_id != :id",['email'=>$DATA['email'],'id'=>$id]))
            {
                $this->errors['email'] = "That email is already in use";
            }
        }

        //check for 'password'
        if(isset($DATA['password'])){

            // this if section must be deleted later
            if(empty($DATA['password']) || $DATA['password'] !== $DATA['password2'])
            {
                $this->errors['password'] = "Passwords do not match";
            }

            //check for password length
            if(strlen($DATA['password']) < 8)
            {
                $this->errors['password'] = "le mot de passe doit avoir 8 caractères au minimum";
            }
        }

       

        //check for 'role'
        $ranks = ['admin','utilisateur_normal'];
        if(empty($DATA['rank']) || !in_array($DATA['rank'], $ranks))
        {
            $this->errors['rank'] = "role non valide";
        }


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }

    
    public function make_user_id($data)
    {
        $data['user_id'] = strtolower($data['firstname'] . "." . $data['lastname']);

        while($this->where('user_id',$data['user_id']))
        {
            $data['user_id'] .= rand(10,9999);
        }

        return $data;
    }


    public function make_school_id($data)
    {
        if(isset($_SESSION['USER']->school_id)){
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        if(isset($data['password'])){
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        
        return $data;
    }

    
}

?>