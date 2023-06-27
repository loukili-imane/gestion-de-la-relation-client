<?php
class Clients extends Controller{
    private $client ;
    private $clients ;

    function __construct()
    {
        $this->client = new Client(); 
       //$this->clients= $this->getClients();
       }

    function index(){
      
        if(!Auth::logged_in()){
            $this->redirect("login");
        }
       $this->view("clients",['rows'=>$this->getClients()]);
    }

    public function add()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$errors = array();
     
		if(count($_POST) > 0)
 		{
			//if($this->client->validate($_POST))
 			//{
 				//$_POST['date'] = date("Y-m-d H:i:s");
                $_POST['id_utilisateur']=$_SESSION['USER']->id_utilisateur;
                $_POST['id_groupe']=17;
 				$this->client->insert($_POST);
 				$this->redirect('clients');
 			//}else
 			//{
 				//errors
 				$errors = $this->client->errors;
 			//}
 		}
		$this->view('clients.add',['errors'=>$errors]);
	}
    public function  delete($id_client){
        $this->client->delete($id_client);
        $this->view("clients",['rows'=>$this->getClients()]);
    }

    public function getClients(){
        //get list of clients from database
        $this->clients= $this->client->findAll();
        //for each clients we will find his group and the user that added thus client to the db
        foreach($this->clients as $client){
            $groupe_tmp = new Groupe();
            $utilisateur_tmp = new Utilisateur();
            $val=$client->id_groupe;
            $groupe_tmp=$groupe_tmp->first('id_groupe',$val);
            $val=$client->id_utilisateur;
            $utilisateur_tmp=$utilisateur_tmp->first('id_utilisateur',$val);
            $client->nomGroupe=$groupe_tmp->nomGroupe;
            $client->creePar=$utilisateur_tmp->nom." ".$utilisateur_tmp->prenom;
        }
       
        return $this->clients;
    }

}
    

?>