<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_system'] = array(  
                    'class' => 'Initdb',  
                    'function' => 'test_db',  
                    'filename' => 'Initdb.php',  
                    'filepath' => 'hooks/local'
                    );

$hook['pre_controller'] = array(  
        'class' => 'Automigrate',  
        'function' => 'migrate_db_on_first_load',  
        'filename' => 'Automigrate.php',  
        'filepath' => 'hooks/local',  
        );    
  