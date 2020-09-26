<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Homepage extends MY_Controller
{

	public function index()
	{
		$this->load->view('homepage_view');
	}
}
