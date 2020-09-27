<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Cocur\Slugify\Slugify;

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		// $config = array(
		// 	'field' => 'slug',
		// 	'table' => 'user',
		// 	'id' => 'id',
		// );
		// $this->slug->set_config($config);
	}
	public function index()
	{
		// $this->load->view('home_main');
		// $data = array(
		// 	'title' => 'aku lo',
		// );
		
		echo	gslug('user', 'aku lo', 'slug');
		// $data['uri'] = $this->slug->create_uri($data);
		
	}
}
