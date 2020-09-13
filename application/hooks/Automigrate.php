<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Automigrate extends MY_Controller {  
	public function __construct() {
    parent::__construct();
    $this->load->library('migration');
  }

  public function migrate_db_on_first_load() {
    if (!$this->migration->current()) {
        show_error($this->migration->error_string());
    } else {
        echo 'Migration worked!';
    }
  }
}  
?>  