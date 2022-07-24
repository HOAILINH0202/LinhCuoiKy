<?php  
class database{

	//DB Params
	private $dns = "mysql:host=btnzzdvbvjiqdgrmmpqw-mysql.services.clever-cloud.com;dbname=btnzzdvbvjiqdgrmmpqw";
	private $username = "ujhk7y67wmvmwjap";
	private $password = "9OJY8rWQFENmK8QAve8I";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

