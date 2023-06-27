<?php
class Groupes extends Controller{
    private $groupe ;
    private $groupes;

    function __construct()
    {
        $this->groupe = new Groupe(); 
        $this->groupes = $this->getGroupes() ;

    }

    function index(){
      
        if(!Auth::logged_in()){
            $this->redirect("login");
        }
       $this->view("groupes",['rows'=>$this->getGroupes()]);
    }
    public function add(){
        if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$errors = array();
        
		if(count($_POST) > 0)
 		{
			//if($this->groupe->validate($_POST))
 			//{
 				//$_POST['date'] = date("Y-m-d H:i:s");
            
             
                    $_POST['dateCreation'] =  date('y-m-d h:i:s');
                    $this->groupe->insert($_POST);
                    $this->redirect('groupes');
 			//}else
 			//{
               
 				//errors
 			//$errors = $this->groupe->errors;

 			//}
 		}
         $this->view('groupes.add',['errors'=>$errors]);
        
    }
        
    
    public function  delete($id_groupe){
        $this->groupe->delete($id_groupe);
        
        $this->view("groupes",['rows'=>$this->getGroupes()]);
    }

    public function getGroupes(){
        return $this->groupe->findAll();
    }
    
    public function getGroupesName(){
        $data = $this->groupe->findAll();
        $this->view("clients.add",['rows'=>$data]);
 
    }
  
}
