<?php 


class DB{
	static public function connect(){


try {
	$conn = new PDO("mysql:host=localhost;dbname=coffe", "root","");
	$conn->exec("set names utf8");
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conn;

  } catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
  }
	}

  


}

?>