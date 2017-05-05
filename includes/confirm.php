<?php
require_once("database.php");
require_once("intialize.php");
class Confirm{
	
private	static $table_name="confirm";

private	static $db_fields=array('id','userid','key','email');
	
	public $id;
	public $userid;
	public $key;
	public $email;
	
	
	

	
	public function save(){
return isset($this->id)? $this->update():$this->create();
	}

	public static function find_all(){
		
		return self::find_by_sql("select * from ".self::$table_name);
		
		
		
	}
	
	

 public function confirmingUser($email,$key){
  //cleanup the variables
global $database;
    $email = $database->escape_value($email);
    $key = $database->escape_value($key);
     
    //check if the key is in the database

    $sql1="SELECT * FROM `confirm` WHERE `email` = '$email' AND `key` = '$key' LIMIT 1";
    $check_key =$database->query($sql1);
     
    if($database->num_rows($check_key) != 0){
                 
        //get the confirm info
        $confirm_info = $database->fetch_array($check_key);
         
        //confirm the email and update the users database


    $sql2="UPDATE `users` SET `active` = 1 WHERE `id` = '$confirm_info[userid]' LIMIT 1";
    $update_users =$database->query($sql2);

  
    $sql3="DELETE FROM `confirm` WHERE `id` = '$confirm_info[id]' LIMIT 1";
    $delete =$database->query($sql3);
        //delete the confirm row
      
         
        if($update_users){
                         
         return true;
         
        }
        else{
 
       return false;
         
        }
     
    }

 }
 
  
public function createConfirm($info){
	global $database;
	$sql="INSERT INTO `confirm` VALUES(NULL,'$info[userid]','$info[key]','$info[email]')"; 
	if($database->query($sql)){
		$this->id=$database->insert_id();
		return true;
	}
	else{
		return false;
	}
}
  
 
  
	public static function authenticate($username="", $password="") {
    global $database;
    $username = $database->escape_value($username);
    $password = $database->escape_value($password);

    $sql  = "SELECT * FROM ".self::$table_name;
    $sql .= " WHERE first_name = '{$username}' ";
    $sql .= "AND password = '{$password}' ";
    $sql .= "LIMIT 1";
    $result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
  



	  public static	function attempt_login($username, $password) {
		$admin =self::find_username($username);
		if ($admin) {
			// found admin, now check password
			if (password_check($password, $admin["password"])) {
				// password matches
				return $admin;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found
			return false;
		}
	}
  
 public static function find_username($username) {
		global $database;	
	   $username = $database->escape_value($username);
	  	
		$query  = "SELECT * from ".self::$table_name;
		
		$query .= " WHERE first_name = '{$username}' ";
		$query .= " LIMIT 1";
		
		$result_set=$database->query($query);
		
		if($admin = mysqli_fetch_assoc($result_set)) {
			return $admin;
		} else {
			return null;
		}
	} 
  

  
  


	public static function find_by_sql($sql=""){
		global $database;
		$result_set=$database->query($sql);
		$object_array=array();
		while($row=$database->fetch_array($result_set)){
		$object_array[]=self::instantiate($row);	
		}
		return $object_array;
	}
	

	

	

	private static function instantiate($record){
		
		$object=new self();

foreach($record as $attribute=>$value ){
	if($object->has_attribute($attribute)){
		$object->$attribute=$value;
	}
}
return $object;
	}
	
	
	
	
	
	
	
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}
	
	
	
	
	public function attributes(){
		$attributes=array();
		foreach (self::$db_fields as $field){
			if(property_exists($this,$field)){
				$attributes[$field] =$this->$field;
			}
		}
		return $attributes;
	}
	
	public function sanitized_attributes(){
		global $database;
		$clean_attributes=array();
		
		foreach($this->attributes() as $key => $value){
			$clean_attributes[$key]=$database->escape_value($value);
		}
		return $clean_attributes;
	}
	
	
	
	
		
	
		public function create(){
		
		global $database;
		$attributes=$this->sanitized_attributes();
		$sql="insert into ".self::$table_name."(";
		$sql.=join(",",array_keys($attributes));
		$sql.=") values ('";
		$sql.=join ("','",array_values($attributes));
		$sql.="')";

	if($database->query($sql)){
		$this->id=$database->insert_id();
		return true;
	}
	else{
		return false;
	}

	}
	
	
	
	
	
}
?>