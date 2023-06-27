<?php
class Meetings extends Controller{

    private $rendezVous ;
    private $rendezVousListe;

    function __construct()
    {
        $this->rendezVous = new Meeting(); 
        $this->rendezVousListe = $this->rendezVous->findAll() ;

    }

    function index(){
      
        if(!Auth::logged_in()){
            $this->redirect("login");
        }
       $this->view("Meetings",['rows'=>$this->rendezVous->findAll()]);
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
              $_POST['id_client']=5;
              $_POST['id_employe']=2;
             
           
            $this->rendezVous->insert($_POST);
 			$this->redirect('meetings');
 			//}else
 			//{
 				//errors
 				$errors = $this->groupe->errors;
 			//}
 		}
        
		$this->view('meetings.add',['errors'=>$errors]);
        
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


?>