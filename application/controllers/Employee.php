<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('employee_model','employee');

    }

	public function ajax_list()
    {
        $list = $this->employee->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $employee) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $employee->first_name;
            $row[] = $employee->last_name;
            $row[] = $employee->age;
            $row[] = ucfirst($employee->description);
            			
            
            // $btnState = $user->id == 1 && strtolower($user->first_name) == 'administrator' ? 'disabled' : '';
            // $action = btnEdit($user->id, 'editUser').' '.confirmDelete($user->id, 'deleteUser', $btnState);
            // $row[] = $action;

            $row[] = '';

 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->employee->count_all(),
                        "recordsFiltered" => $this->employee->count_filtered(),
                        "data" => $data,
                );

        //output to json format
        echo json_encode($output);
    }
	
}
