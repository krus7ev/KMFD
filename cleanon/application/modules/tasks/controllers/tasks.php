<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends MX_Controller {
	
    public function index(){
        
        $this->load->model('mod_tasks');
        $data['query'] = $this->mod_tasks->get('priority');
        
        $data['module'] = "tasks";
        $data['view_file'] = "display";
        
        echo Modules::run('templates/one_col', $data);
        
        //$this->load->view('display', $data);

    }
    
    function create(){
        
        $update_id = $this->uri->segment(3);
        
        if (!isset($update_id)) {
            $update_id = $this->input->post('update_id', $id);
        }
        
        if(is_numeric($update_id)) {
            $data = $this->get_data_from_db($update_id);
            $data['update_id'] = $update_id;
        } else {
            $data = $this->get_data_from_post();
        }
        
        $data['module'] = "tasks";
        $data['view_file'] = "form";
        echo Modules::run('templates/one_col', $data);
    }
    
    function get_data_from_post(){
        
        $data['title'] = $this->input->post('title', TRUE);
        $data['priority'] = $this->input->post('priority', TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id) {
        $query = $this->get_where($update_id);
        foreach($query->result() as $row) {
            $data['title'] = $row->title;
            $data['priority'] = $row->priority;
        }
        return $data;
    }

    function submit()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title', 'title', 'required|min_length[3]|xss_clean');
        $this->form_validation->set_rules('priority', 'Priority', 'required|numeric|xss_clean');
  
        $update_id = $this->input->post('update_id', TRUE);
        
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        else {
            $data = $this->get_data_from_post();
            
            if(is_numeric($update_id)) {
                $this->_update($update_id, $data);
            } else {
                $this->_insert($data);
            }
            
            redirect('tasks');
        }
    }
    
    function __construct() {

        parent::__construct();
    }

    
    function get($order_by) {

        $this->load->model('mod_tasks');
        $query = $this->mod_tasks->get($order_by);
        
        return $query;
    }

    
    function get_with_limit($limit, $offset, $order_by) {
    
        $this->load->model('mod_tasks');
        $query = $this->mod_tasks->get_with_limit($limit, $offset, $order_by);
    
        return $query;
    }

    
    function get_where($id) {
        
        $this->load->model('mod_tasks');
        $query = $this->mod_tasks->get_where($id);
    
        return $query;
    }

    
    function get_where_custom($col, $value) {
        
        $this->load->model('mod_tasks');
        $query = $this->mod_tasks->get_where_custom($col, $value);
        
        return $query;
    }

    
    function _insert($data) {
    
        $this->load->model('mod_tasks');
        $this->mod_tasks->_insert($data);
    }

    
    function _update($id, $data) {

        $this->load->model('mod_tasks');
        $this->mod_tasks->_update($id, $data);
    }

    
    function _delete($id) {
       
        $this->load->model('mod_tasks');
        $this->mod_tasks->_delete($id);
    }

    
    function count_where($column, $value) {
        
        $this->load->model('mod_tasks');
        $count = $this->mod_tasks->count_where($column, $value);
        
        return $count;
    }

    
    function get_max() {
    
        $this->load->model('mod_tasks');
        $max_id = $this->mod_tasks->get_max();
        
        return $max_id;
    }

    
    function _custom_query($mysql_query) {
        
        $this->load->model('mod_tasks');
        $query = $this->mod_tasks->_custom_query($mysql_query);
    
        return $query;
    }

}