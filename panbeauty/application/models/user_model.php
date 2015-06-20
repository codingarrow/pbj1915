<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model { //CI_Model
    public function __construct()
    {
        parent::__construct();
    }

    function show_userlist(  ) {
        $this->db->from('tblusers');  //tbl_timesheet   //v_employeetimesheet
        //$this->db->where('checkin',CURDATE());
        $this->db->order_by('username','asc');
        //$this->db->where_not_in('empid','21');


        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }
    //-------------------------------------------------------------------------------------------
    function get_entry($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tblusers', 1);
        return $query->result();
    }
    //-------------------------------------------------------------------------------------------
    function purge_entry($id)
    {
        $this->db->where_not_in('id',$this->session->userdata('user_id'));
        $this->db->delete('tblusers', array('id' => $id));
        //don't delete the user logged in
    }
    //-------------------------------------------------------------------------------------------


    public function save_user($id)
    {
        //'password'=>md5($this->input->post('password')),

        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'gender'=>$this->input->post('gender'),
            'registered'=>time()
        );
        $this->db->where('id', $id);
        $this->db->update('tblusers',$data);
        return true;
    }


    public function register_user()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'gender'=>$this->input->post('gender'),
            'registered'=>time()
        );
        $this->db->insert('tblusers',$data);
        return true;
    }
    function login($email,$password)
    {
        $this->db->where("email",$email);
        $this->db->where("password",md5($password));
        $query=$this->db->get("tblusers");
        if($query->num_rows()>0)
        {
            $row=$query->row();
            $userdata = array(
                'user_id'  => $row->id,
                'username'  => $row->username,
                'email'    => $row->email,
            );
            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }
}