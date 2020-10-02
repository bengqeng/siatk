<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once APPPATH."plugin/slug/slug.php";
	
	class Myslug extends Slug{
		function __construct()
		{
			$this->slug = new Slug();
		}

		public function g_slug($value = "", $t_name= "", $field_slug = "slug", $id = "id"){

			$this->slug->set_config($this->generate_array_con($field_slug, $t_name, $id));

			$data = array(
				'title' => $value,
			);

			return $this->slug->create_uri($data);
		}

		private function generate_array_con($f_s, $t_n, $id){
			$config = array(
				'field' => $f_s,
				'table' => $t_n,
				'id' => $id
			);

			return $config;
		}
		
	}
