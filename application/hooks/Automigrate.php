<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Automigrate extends MY_Controller {  
	public function __construct() {
    parent::__construct();
    $this->load->library('migration');
  }

  public function migrate_db_on_first_load() {
    
    if (count($this->migration->find_migrations()) == 0){
      echo  "Table belum terbentuk di database anda" 
            .
            "</br>System belum melakukan migrasi karena tidak ditemukan file migrasi di folder ".APPPATH."migrations"
            .
            "</br>Pastikan file migrasi tersedia silahkan hubungi administator anda";
      exit;
    }
    
    if (!$this->migration->latest()) {
      show_error($this->migration->error_string());
      exit;
    }
    
  }
}  
?>  