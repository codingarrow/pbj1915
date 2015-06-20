<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //var $table_name = $this->config->item('tbl_timesheet');

class Menu_model extends CI_Model {
     
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
 
    public function create(){
        $data = array('description'=>  $this->input->post('description'),
                'pagelink'=>$this->input->post('pagelink'),
                'menuorder'=>$this->input->post('menuorder'),
                'menu_parent_id'=>$this->input->post('menu_parent_id'));
            $this->db->insert('pb_menus', $data);
            echo'<div class="alert alert-success">One record inserted Successfully</div>';
            exit;
    }
     
}
/* End of file menu_model.php */
/* Location: ./application/models/admin/menu_model.php */