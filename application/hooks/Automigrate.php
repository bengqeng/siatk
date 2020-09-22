<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Automigrate extends MY_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->library('migration');
  }

  public function migrate_db_on_first_load() {
    if (count($this->migration->find_migrations()) == 0){
      // it will auto run to index
    }
    else{
      if (!$this->migration->latest()) {
        show_error($this->migration->error_string());
        exit;
      }
    }
  }
}
?>