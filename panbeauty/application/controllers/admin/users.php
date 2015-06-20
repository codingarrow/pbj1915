<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Controller {
     
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/users_model');
        $this->load->library('form_validation');
    }
 
    public function index()
    {   
        $this->load->view('admin/default');    //home
    }
         /*
        public function fillgrid(){
            $this->menu_model->fillgrid();
        }
		*/
 
        //PATTERNED from http://www.infotuts.com/crud-example-php-jquery-ajax/
        public function create(){
            $this->form_validation->set_rules('firstname', 'Firstname', 'required');
            $this->form_validation->set_rules('lastname', 'Lastname', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
			/*
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('contact', 'Contact Number', 'required|numeric|max_length[10]|min_length[10]');
			*/
            if ($this->form_validation->run() == FALSE){
               echo'<div class="alert alert-danger">'.validation_errors().'</div>';
               exit;
            }
            else{
                $this->users_model->create();
            }
        }
         
        public function edit(){
            $id =  $this->uri->segment(4);
			//echo $id;
            $this->db->where('id',$id);
            $data['query'] = $this->db->get('pb_users');
            $data['id'] = $id;
            $this->load->view('admin/editusers', $data);
            }
             
        public function update(){
                $res['error']="";
                $res['success']="";
				
				$this->form_validation->set_rules('firstname', 'Firstname', 'required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
			/*
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('contact', 'Contact Number', 'required|numeric|max_length[10]|min_length[10]');
			*/
                if ($this->form_validation->run() == FALSE){
                $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';    
                }           
            else{
                $data = array('firstname'=>  $this->input->post('firstname'),
				/*
                'contact'=>$this->input->post('contact'),
				*/
                'lastname'=>$this->input->post('lastname'),
                'email'=>$this->input->post('email'));
                $this->db->where('id', $this->input->post('hidden'));
                $this->db->update('pb_users', $data);
                $data['success'] = '<div class="alert alert-success">Updated Successfully</div>';
            }
            header('Content-Type: application/json');
            echo json_encode($res);
            exit;
        }
 
 
        public function delete(){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('pb_users');
            echo'<div class="alert alert-success">Deleted Successfully</div>';
            exit;
        }
         
}
/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */