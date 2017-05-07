<?php
require_once(LIB_PATH.DS."confic.php");

class MYSQLDatabase{
	
	private $connection;
	
	function __construct(){
		
		$this->open_connection();
	}
public function open_connection(){
	$this->connection=mysqli_connect(DB_SERVER,DB_NAME);
	if(mysqli_connect_errno()){
		die("database connection failed:".mysqli_connect_error()."(" .mysqli_connect_errno().")"
		
		);
		
	}
	
}

public function close_connection(){
	if(isset($this->connection)){
		mysqli_close($this->connection);
		unset($this->connection);
	}
	
}

public function escape_value($string){
	$escaped_sring=mysqli_real_escape_string($this->connection,$string);
	return $escaped_sring;
} 

private function confirm_query($result){
	if(!$result){
		die("database query failed");
	}
}
public function query ($sql){
	
	$result=mysqli_query($this->connection,$sql );
	$this->confirm_query($result);
	return $result;
}
//database nutral function
public function fetch_array($result_set){
	return mysqli_fetch_array($result_set);
}
public function num_rows($result_set){
	return mysqli_num_rows($result_set);
}
public function insert_id(){
	//to get lthe last id inserted over database
	return mysqli_insert_id($this->connection);
}
public function affected_rows(){
	return mysqli_affected_rows($this->connection);
}

	
}

$database=new MYSQLDatabase();
?>
