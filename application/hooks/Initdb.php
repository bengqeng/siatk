<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Initdb {
	public function test_db()  {
    if (!file_exists(APPPATH.'config/'.ENVIRONMENT.'/database.php')) {
      include_once (APPPATH.'views/errors/setup/copy_database.php');
      exit;
     }

		include_once APPPATH.'config/'.ENVIRONMENT.'/database.php';
  	if (empty($db['default']['database']) || empty($db['default']['hostname']) || empty($db['default']['username'])) {
      include_once (APPPATH.'views/errors/setup/set_connection.php');
  		exit;
  	}
  	else {
      $con    = new mysqli($db['default']['hostname'], $db['default']['username'], $db['default']['password']);

  		$hasil 	= $this->find_db($con, $db['default']['database']);
	  	if ($hasil[0] == 0) {
	  		$create_db = $this->generate_query_create_db($db['default']['database']);
	  		if ($con->query($create_db) === TRUE) {
	  			echo "Anda berada di server <i>".$_SERVER['SERVER_NAME']."</i> dengan environmet : <i>".ENVIRONMENT."</i></br>";
				  echo "Database : <b style='color: red'>".$db['default']['database']."</b> created successfully"
				  			."</br>please reload your page :)";
				  exit;
				} else {
				  echo "Error creating database: " . $conn->error;
				  exit;
				}
	  	}
  	}
  }

  private function find_db($con, $db_name){
  	$query = 'SELECT COUNT(*) AS `exists` FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMATA.SCHEMA_NAME="'.$db_name.'"';
  	$find_db 			= $con->query($query);
  	$row_find_db 	= mysqli_fetch_array($find_db, MYSQLI_NUM);
  	return $row_find_db;
  }

  private function generate_query_create_db($db_name){
  	$query = "CREATE DATABASE ".$db_name;
  	return $query;
  }
}