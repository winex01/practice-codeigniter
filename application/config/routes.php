<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// employee routes
$route['employeesList'] = 'employee/ajax_list';


$route['default_controller'] = 'employee';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
