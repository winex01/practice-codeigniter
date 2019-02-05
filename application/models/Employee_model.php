<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Employee_model extends CI_Model {
 
    private $table = 'employees';
    
    var $column_order = array(
            null, 
            'employees.first_name',
            'employees.last_name',
            'employees.age', 
            'employees.position_id', 
            'positions.description'
    ); //set column field database for datatable orderable
    
    private $column_search = array(
            'employees.first_name',
            'employees.last_name',
            'employees.age', 
            'employees.position_id', 
            'positions.description'
    ); //set column field database for datatable searchable 
    
    var $order = array('employees.last_name' => 'asc'); // default order 
 
    private function _get_datatables_query()
    {
        $this->db->select('employees.id, employees.first_name, employees.last_name, employees.age, employees.position_id, positions.description');
        $this->db->from($this->table);
        $this->db->join('positions', 'employees.position_id = positions.id');

        $i = 0;
     
        foreach ($this->column_search as $item)  
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    //
    public function delete_employee()
    {   
        $id = $this->input->post('id');

        if (empty($id) || $id == '') {
            return false;
        }
        
        $this->db->where('id', $id);
        return $this->db->delete('employees');
    }

}