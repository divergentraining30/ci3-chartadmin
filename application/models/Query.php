<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Model {
	
	public function getProfit()
	{
        $query = $this->db->get('table');
        return $query->result();
	}
}