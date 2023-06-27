<?php

/**
 * Database connection
 */
 
class Database
{
	private function connect()
	{
		
		$string = DBDRIVER . ":host=".DBHOST.";dbname=".DBNAME;
		if(!$con = new PDO($string,DBUSER,DBPASS)){
			die("could not connect to database");
		}

		return $con;
	}

	//sql injection we seperate the query from the data
	public function query($query,$data = array(),$data_type = "object")
	{
		$con = $this->connect();
		$stm = $con->prepare($query);
		$result = false;

		if($stm){
			$check = $stm->execute($data);
			if($check){
				if($data_type == "object"){
					//fetch the rows result as object
					$result = $stm->fetchAll(PDO::FETCH_OBJ);
				}else{
					//fetch the results as an indexed array
					$result = $stm->fetchAll(PDO::FETCH_ASSOC);
				}
 
 			}
		}

		//run functions after select
		if(is_array($result)){
			if(property_exists($this, 'afterSelect'))
			{
				foreach($this->afterSelect as $func)
				{
					$result = $this->$func($result);
				}
			}
		}

		if(is_array($result) && count($result) >0){
			return $result;
		}

		return false;
	}

	
}
?>
