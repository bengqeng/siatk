<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Initdb {  
	public function test_db()  {
		include_once APPPATH.'config/'.ENVIRONMENT.'/database.php';
  	$con 		= new mysqli($db['default']['hostname'], $db['default']['username'], $db['default']['password']);

  	if (empty($db['default']['database']) || empty($db['default']['hostname']) || empty($db['default']['username'])) {
  		echo "Anda berada di server <i>".$_SERVER['SERVER_NAME']."</i> dengan environmet : <i>".ENVIRONMENT."</i></br>";
  		echo "1. mohon isi konfigurasi database anda</br>";
  		echo "2. Isikan di folder <i>".FCPATH."application\config".ENVIRONMENT."\database.php</i></br>";
  		echo "</br><table border='1'>
  						<tr>
  							<td colspan='2' style='align: center'>Konfigurasi Database saat ini </td>
  							<td>status</td>
  						</tr>
  						<tr>
  							<td>Hostname</td>
  							<td>: ".$db['default']['hostname']."</td>
  							<td>required</td>
  						</tr>
  						<tr>
  							<td>Username</td>
  							<td>: ".$db['default']['username']."</td>
  							<td>required</td>
  						</tr>
  						<tr>
  							<td>Password</td>
  							<td>: ".$db['default']['password']."</td>
  							<td>optional for localhost</td>
  						</tr>
  						<tr>
  							<td>Database name</td>
  							<td>: ".$db['default']['database']."</td>
  							<td>required</td>
  						</tr>
  					</table>";
  		echo "<br/><b style='font-size: 20;'>Just Make Sure your connection to server <i style='color:red'>no need create the database on mysql</i></b> :)";

  		if (!empty($db['default']['database'])) {
  			echo "</br>note*: Anda akan menggunakan database : <i style='font-size:25px; color:red'>".$db['default']['database']."</i>".
  						"</br>jika anda yakin menggunakan database tersebut anda tidak perlu merubah nama database";
  		}
  		exit;
  	} 
  	else {
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
?>  