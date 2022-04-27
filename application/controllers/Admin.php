<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
        $data['title'] = "Test Chart";
		$this->load->view('admin/admin', $data, FALSE);
	}

    public function getData()
    {
        $this->load->model('Query'); 
        $data = $this->Query->getProfit(); 
        echo json_encode($data); 
        // print_r($cek); 
        // exit();
    }
}