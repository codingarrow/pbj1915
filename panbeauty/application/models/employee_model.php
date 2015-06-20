<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //var $table_name = $this->config->item('tbl_timesheet');

class Employee_model extends CI_Model {
  /*
    var $empid   = '';
    var $checkin = '';
    var $checkout = '';
    var $ipcheckin = '';
  */
    var $deptid = '';
    var $employment_status = '';
    var $login = '';
    var $lastname = '';
    var $firstname = '';
    var $minit = '';
    var $skype_id = '';
    var $date_hired = '';
    var $dob = '';
    var $position = '';
    var $gender = '';
    var $email = '';
    var $address1 = '';
    var $cellphone = '';
    var $sss_no = '';
    var $tin_no = '';
    var $philhealth_no = '';
    var $pagibig_no = '';
    var $password = '';
    var $em_contact_person = '';
    var $em_contact_address = '';
    var $gumi_email = '';
    var $dateupdated = '';

    //var $table_name = $this->config->item('tbl_timesheet');

        //default 'A' in call_center.form comment out in the mean time
    //var $estatus = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    //-------------------------------------------------------------------------------------------
    function get_employee(  ) {
        //$this->db->from('qmp_csvviewandrateuser');
        $this->db->from('employee');
        $this->db->order_by('empid','desc');

        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }
    //-------------------------------------------------------------------------------------------
    function get_all_entries()
    {
       
        $query = $this->db->get('employee');
        return $query->result();
    }
    //-------------------------------------------------------------------------------------------
    function get_dropdepartment()
    {
        $result=$this->db->get('department');
        $dropdown=array();
        if( $result->num_rows() > 0 )
        {
            foreach($result->result_array() as $row)
            {
                $dropdown[$row['deptid']]=$row['deptname'];
            }
        }
        return $dropdown;
    }
    //-------------------------------------------------------------------------------------------
    function get_dropcountry()
    {
        $result=$this->db->get('country');
        $dropdown=array();
        if( $result->num_rows() > 0 )
        {
            foreach($result->result_array() as $row)
            {
                $dropdown[$row['countryname']]=$row['countryname'];
            }
        }
        return $dropdown;
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
        /*
        $this->isvisible   = $data['isvisible']; // please read the below note
        $this->setting_name = $data['setting_name'];
        $this->setting_value = $data['setting_value'];
        $this->user_id = $data['user_id'];
        //default 'A' in call_center.form comment out in the mean time
        //$this->estatus = $data['estatus'];
        //$this->date    = time();
        */

        $this->deptid = $data['department'];
        $this->employment_status = $data['employment_status'];
        $this->login = $data['login'];
        $this->lastname = $data['lastname'];
        $this->firstname = $data['firstname'];
        $this->minit = $data['minit'];
        $this->skype_id = $data['skype_id'];
        $this->date_hired = $data['date_hired'];
        $this->dob = $data['birth_date'];
        $this->position = $data['position'];
        $this->gender = $data['gender'];
        $this->email = $data['email'];
        $this->address1 = $data['address1'];
        $this->cellphone = $data['cellphone'];
        $this->sss_no = $data['sss_no'];
        $this->tin_no = $data['tin_no'];
        $this->philhealth_no = $data['philhealthno'];
        $this->pagibig_no = $data['pagibig_no'];
        $this->password = hash('sha256', $data['password']); //$data['password'];
        $this->em_contact_person = $data['em_contact_person'];
        $this->em_contact_address = $data['em_contact_address'];
        $this->gumi_email = $data['gumi_email'];
        $this->dateupdated = $this->config->item('date_HMSfull');


        $this->db->insert('employee', $this);

    }
    //-------------------------------------------------------------------------------------------
    function update_entry($data)
    {
        $this->deptid = $data['department'];
        $this->employment_status = $data['employment_status'];
        $this->login = $data['login'];
        $this->lastname = $data['lastname'];
        $this->firstname = $data['firstname'];
        $this->minit = $data['minit'];
        $this->skype_id = $data['skype_id'];
        $this->date_hired = $data['date_hired'];
        $this->dob = $data['birth_date'];
        $this->position = $data['position'];
        $this->gender = $data['gender'];
        $this->email = $data['email'];
        $this->address1 = $data['address1'];
        $this->cellphone = $data['cellphone'];
        $this->sss_no = $data['sss_no'];
        $this->tin_no = $data['tin_no'];
        $this->philhealth_no = $data['philhealthno'];
        $this->pagibig_no = $data['pagibig_no'];
        //$this->password = hash('sha256', 'G0m1Pa$$'); //$data['password'];
        $this->em_contact_person = $data['em_contact_person'];
        $this->em_contact_address = $data['em_contact_address'];
        $this->gumi_email = $data['gumi_email'];
        $this->dateupdated = $this->config->item('date_HMSfull');
        //default 'A' in call_center.form comment out in the mean time
        //$this->estatus = $data['estatus'];
        //$this->date    = time();
        //var_dump($data);exit;
        //$data['id'] on where clause doesn't seem to work

        $data = array(
                       'deptid' => $this->deptid,
                       'employment_status' => $this->employment_status,
                       'login' => $this->login,
                       'lastname' => $this->lastname,
                       'firstname' => $this->firstname,
                       'minit' => $this->minit,
                       'skype_id' => $this->skype_id,
                       'date_hired' => $this->date_hired,
                       'dob' => $this->birth_date,
                       'position' => $this->position,
                       'gender' => $this->gender,
                       'email' => $this->email,
                       'address1' => $this->address1,
                       'cellphone' => $this->cellphone,
                       'sss_no' => $this->sss_no,
                       'tin_no' => $this->tin_no,
                       'philhealth_no' => $this->philhealth_no,
                       'pagibig_no' => $this->pagibig_no,
                       'em_contact_person' => $this->em_contact_person,
                       'em_contact_address' => $this->em_contact_address,
                       'gumi_email' => $this->gumi_email,
                       'dateupdated' => $this->config->item('date_HMSfull')
                    );
        $this->db->where('empid', $this->input->post('id'));
        $this->db->update('employee', $data);
        //$this->db->update('employee', $this, array('empid' => $this->input->post('id')));
    }
    //-------------------------------------------------------------------------------------------
    function delete_entry($id)
    {
        $this->db->delete('employee', array('empid' => $id));
    }
    //-------------------------------------------------------------------------------------------
    function get_entry($id){
        $this->db->where('empid', $id);
        $query = $this->db->get('employee', 1);
        return $query->result();
    }
    //-------------------------------------------------------------------------------------------
}