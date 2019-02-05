<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('employee_model','employee');

    }

    public function index()
    {
        $this->load->model('position_model', 'position');
        $positions = $this->position->all_positions();

        $this->load->view('employee/view', compact('positions'));
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
            $row[] = ucwords($employee->last_name.' '.$employee->first_name);
            $row[] = $employee->age;
            $row[] = ucfirst($employee->description);
            			
            
            // $action = btnEdit($user->id, 'editUser').' '.confirmDelete($user->id, 'deleteUser', $btnState);
            $action = confirm_delete($employee->id, 'employee/delete');
            $row[] = $action;

 
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

    public function destroy()
    {   

        echo json_encode(
            $this->employee->delete_employee()
        );        
    }

    public function store()
    {
        $array = [
            'test' => $this->input->post('fname')
        ];
        echo json_encode($array);
    }
	
}
