<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //var $table_name = $this->config->item('tbl_timesheet');

class Users_model extends CI_Model {
     
    public function fillgrid(){
        $this->db->order_by("id", "desc"); 
        $data = $this->db->get('pb_menus');
        foreach ($data->result() as $row){
			/*
            $edit = base_url().'admin/menu/edit/';
            $delete = base_url().'admin/menu/delete/';
			*/
			$edit = site_url('admin/menu/edit');
			$delete = site_url('admin/menu/delete');
            echo "<tr>
                        <td>$row->description</td>
                        <td>$row->pagelink</td>
                        <td>$row->menuorder</td>
                        <td>$row->menu_parent_id</td>
                        <td><a href='$edit' data-id='$row->id' class='btnedit' title='edit'><i class='glyphicon glyphicon-pencil' title='edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$delete' data-id='$row->id' class='btndelete' title='delete'><i class='glyphicon glyphicon-remove'></i></a></td>    
                    </tr>";
             
        }
        exit;
    }
	//https://app.box.com/s/45hj2vle5lj6epzz38ct code download
    //--------------------------------------------------------------------------------------------------------------------------- 
    public function edituser(){
            //$this->db->where('id', $id);
            //$data = $this->db->get('pb_users');
			
            $id =  $this->uri->segment(4);
			//echo $id;
            //$this->db->where('id',$id);
            $data['query'] = $this->db->get('pb_users');
            $data['id'] = $id;
            $this->load->view('admin/editusers', $data);			
        exit;
    }
    //--------------------------------------------------------------------------------------------------------------------------- 
    public function create(){
        $data = array('firstname'=>  $this->input->post('firstname'),
                'lastname'=>$this->input->post('lastname'),
                'email'=>$this->input->post('email'));
            $this->db->insert('pb_users', $data);
            echo'<div class="alert alert-success">Inserted Successfully</div>';
            exit;
    }
     
}
/* End of file users_model.php */
/* Location: ./application/models/admin/users_model.php */