<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Position_model extends CI_Model {
    
    private $table = 'positions';

    public function all_positions() 
    {	
    	$this->db->order_by('description', 'ASC');
        $query = $this->db->get($this->table);

        return $query->result();
    }

}