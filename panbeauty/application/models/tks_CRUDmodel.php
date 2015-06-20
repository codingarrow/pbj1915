<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //var $table_name = $this->config->item('tbl_timesheet');

class Tks_CRUDmodel extends CI_Model {

    var $empid   = '';
    var $checkin = '';
    var $checkout = '';
    var $ipcheckin = '';
    var $ipcheckin = '';
    //var $table_name = $this->config->item('tbl_timesheet');

        //default 'A' in call_center.form comment out in the mean time
    //var $estatus = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    //-------------------------------------------------------------------------------------------
    function get_timesheet(  ) {
        //$this->db->from('qmp_csvviewandrateuser');
        $this->db->from($this->config->item('tbl_timesheet'));
        $this->db->order_by('checkout','desc');

        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }
    //-------------------------------------------------------------------------------------------
    function get_all_entries()
    {
       
        $query = $this->db->get($this->config->item('tbl_timesheet'));
        return $query->result();
    }
    //-------------------------------------------------------------------------------------------
    function get_multipledropdown_form()
    {
		$result=$this->db->get($this->config->item('tbl_timesheet'));
		$dropdown=array();
		if( $result->num_rows() > 0 )
		{
			foreach($result->result_array() as $row)
			{
				$dropdown[$row['id']]=$row['nombre'];
			}
		}
		return $dropdown;        
    }

    //-------------------------------------------------------------------------------------------
    function insert_entry($data)
    {
        $this->isvisible   = $data['isvisible']; // please read the below note
        $this->setting_name = $data['setting_name'];
        $this->setting_value = $data['setting_value'];
        $this->user_id = $data['user_id'];
        //default 'A' in call_center.form comment out in the mean time
        //$this->estatus = $data['estatus'];
        //$this->date    = time();

        $this->db->insert($this->config->item('tbl_timesheet'), $this);
    }
    //-------------------------------------------------------------------------------------------
    function update_entry($data)
    {
        $this->isvisible   = $data['isvisible']; // please read the below note
        $this->setting_name = $data['setting_name'];
        $this->setting_value = $data['setting_value'];
        $this->user_id = $data['user_id'];
        //default 'A' in call_center.form comment out in the mean time
        //$this->estatus = $data['estatus'];
        //$this->date    = time();
        $this->db->update($this->config->item('tbl_timesheet'), $this, array('setting_id' => $data['id']));
    }
    //-------------------------------------------------------------------------------------------
    function delete_entry($id)
    {
        $this->db->delete($this->config->item('tbl_timesheet'), array('setting_id' => $id));
    }
    //-------------------------------------------------------------------------------------------
    function get_entry($id){
        $this->db->where('setting_id', $id);
        $query = $this->db->get($this->config->item('tbl_timesheet'), 1);
        return $query->result();
    }
    //-------------------------------------------------------------------------------------------
}