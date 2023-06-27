<?php

/**
 * Authentication class
 */

class Auth
{
	
	public static function authenticate($row)
	{
		$_SESSION['USER'] = $row;
	}

	public static function logout()
	{
		if(isset($_SESSION['USER']))
		{
			unset($_SESSION['USER']);
		}
	}

	public static function logged_in()
	{
		if(isset($_SESSION['USER']))
		{
			return true;
		}

		return false;
	}

	// returns the use's first name
	public static function user()
	{
		if(isset($_SESSION['USER']))
		{
			$fullName = $_SESSION['USER']->nom." ".$_SESSION['USER']->prenom;
			return  $fullName;
		}

		return false;
	}

	//a good way to get a property without writting so many function for each property
	public static function __callStatic($method,$params)
	{
		$prop = strtolower(str_replace("get","",$method));

		if(isset($_SESSION['USER']->$prop))
		{
			return $_SESSION['USER']->$prop;
		}

		return 'Unknown';
	}

	public static function access($rank = 'student')
	{
		if(!isset($_SESSION['USER']))
		{
			return false;
		}

		$logged_in_rank = $_SESSION['USER']->rank;

		$RANK['admin'] 	= ['admin','utilisateur'];
		$RANK['utilisateur'] = ['utilisateur'];


		if(!isset($RANK[$logged_in_rank]))
		{
			return false;
		}

		if(in_array($rank,$RANK[$logged_in_rank]))
		{
			return true;
		}

		return false;
	}

	public static function i_own_content($row)
	{

		if(is_array($row))
		{
			$row = $row[0];
		}
		
		if(!isset($_SESSION['USER']))
		{
			return false;
		}

		if(isset($row->user_id)){

			if($_SESSION['USER']->user_id == $row->user_id){
				return true;
			}
		}

		$allowed[] = 'super_admin';
		$allowed[] = 'admin';

		if(in_array($_SESSION['USER']->rank,$allowed)){
			return true;
		}

		return false;
	}

}