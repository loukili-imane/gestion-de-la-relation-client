<?php


class Utilisateur extends Controller{

    function index()
	{
		// code...
        echo "hello from Urilisateur controller";
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
echo "hello from Urilisateur controller";
		$user = new Utilisateur();
		$limit = 10;
		$pager = new Pager($limit);
		$offset = $pager->offset;


		$query = "select * from utilisateur order by id desc limit $limit offset $offset";
 		
 		if(isset($_GET['find']))
 		{
 			$find = '%' . $_GET['find'] . '%';
 			$query = "select * from users where  (firstname like :find || lastname like :find) order by id desc limit $limit offset $offset";
 			$arr['find'] = $find;
 		}

		$data = $user->query($query,$arr);


		if(Auth::access('admin')){

			$this->view('users',[
				'rows'=>$data,
				'pager'=>$pager,
			]);
		}else{
			$this->view('access-denied');
		}
	}

}


?>