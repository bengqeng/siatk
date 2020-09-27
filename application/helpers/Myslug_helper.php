<?php
if ( ! function_exists('g_slug'))
{
    function gslug($t_name = '', $tittle = '', $s_coloumn = 'slug')
    {
			$gconfig = array(
				'field' => $s_coloumn,
				'table' => $t_name,
				'id' => 'id'
			);
			$this->slug->set_config($gconfig);

			$data = array (
				'tittle' => $tittle
			);

			return $this->slug->create_uri($data);
    }   
}