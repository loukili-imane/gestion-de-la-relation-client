<?php

/**
 * home controller
 */
class Profile extends Controller
{
	
	function index($id = '')
	{
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$user = new Utilisateur();
		$id = trim($id == '') ? Auth::getId_utilisateur() : $id;
		$row = $user->first('id_utilisateur',$id);
		$data['row'] = $row;
		

		
			$this->view('profile',$data);
	}

	function edit($id = '')
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		$errors = array();

		$user = new Utilisateur();
		$id = trim($id == '') ? Auth::getId_utilisateur() : $id;
  
		if(count($_POST) > 0 && Auth::access('reception'))
		{

			//something was posted

			//check if passwords exist
			if(trim($_POST['password']) == "")
			{
				unset($_POST['password']);
				unset($_POST['password2']);
			}

			if($user->validate($_POST,$id))
 			{
 				//check for files
 				if($myimage = upload_image($_FILES))
 				{
 					$_POST['image'] = $myimage;
 				}

 				if($_POST['rank'] == 'super_admin' && $_SESSION['USER']->rank != 'super_admin')
				{
					$_POST['rank'] = 'admin';
				}

				$myrow = $user->first('user_id',$id);
				if(is_object($myrow)){
					$user->update($myrow->id,$_POST);
				}
 
 				$redirect = 'profile/edit/'.$id;
 				$this->redirect($redirect);
 			}else
 			{
 				//errors
 				$errors = $user->errors;
 			}
		}

		$row = $user->first('user_id',$id);

		$data['row'] = $row;
		$data['errors'] = $errors;

		if(Auth::access('reception') || Auth::i_own_content($row)){
			$this->view('profile-edit',$data);
		}else{
			$this->view('access-denied');
		}

	}
}
