<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

/**
	 * summary
	 */
	class Api extends  \Restserver\Libraries\REST_Controller
	{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index_get(){
    	$name = [
    	    'data ' => '1'
    	];

    	$this->response($name, 200);
    }

	}	
?>
