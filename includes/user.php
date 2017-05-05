<?php
require_once("database.php");
require_once("intialize.php");
class User{
	
private	static $table_name="users";
private	static $db_fields=array('id','oauth_provider','oauth_uid','first_name','last_name'
	,'password','email','active','gender','locale','picture','link','created','modified');
	
	public $id;
	public $oauth_provider;
	public $oauth_uid;
	public $first_name;
             public $last_name;
	public $password;
	public $email;
	public $active;
	public $gender;
	public $locale;
	public $picture;
	public $link;
	public $created;
	public $modified;


	
	public function save(){
return isset($this->id)? $this->update():$this->create();
	}

	public static function find_all(){
		
		return self::find_by_sql("select * from ".self::$table_name);
		
		
		
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