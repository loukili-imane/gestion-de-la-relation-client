<?php
class Login extends Controller{

    function index()
	{
		$errors = array();

		if(count($_POST) > 0)
 		{

 			$user = new Utilisateur ();
 			if($row = $user->where('email',$_POST['email']))
 			{
 				$row = $row[0];
				echo $row->password;
				echo $_POST['password'];
 				if(password_verify($_POST['password'],password_hash( $row->password, PASSWORD_DEFAULT)))
 				{
					echo "hello from password verification";
 					Auth::authenticate($row);
 					$this->redirect('/home');	
 				}
  			
 			}
  			
  			$errors['email'] = "Wrong email or password";

 		}

		$this->view('login',[
			'errors'=>$errors,
		]);
	}

}


?>