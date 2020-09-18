<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{
  /**
   * summary
   */
  public function __construct()
  {

  }

  public function login()
  {
  	$this->load->library('form_validation');
  	$this->load->helper('security');

  	$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

  	if ($this->form_validation->run() == FALSE)
		{
			echo "anda salah";
   }
		else
		{
			echo "benar dong";
		}
  }
}
/** End of file Auth.php */

