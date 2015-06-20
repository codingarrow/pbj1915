<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    //var $table_name = $this->config->item('tbl_timesheet');

class Timesheet_model extends CI_Model {

    /*
      var $name   = '';
      var $description = '';
      var $status = '';
      //var $tipo = '';
    */
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    //-------------------------------------------------------------------------------------------
    function show_employeemasterlist(  ) {
        $this->db->from('employee');  //tbl_timesheet   //v_employeetimesheet
        //$this->db->where('checkin',CURDATE());
        $this->db->order_by('lastname','asc');


        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }

    //-------------------------------------------------------------------------------------------
    function show_employeeBYattendanceDATE($datecheckedin )
    {       
        /*$this->db->from('tbl_memberinfo');
        $this->db->where('member_firstname', $fname);
        $this->db->where('member_lastname', $lname);
        $this->db->where('member_email', $email);
        $this->db->where('member_phonenumber', $phone);
        $this->db->where("cardnumber like substr(-4,4,$ccdnum)");

        return $this->db->get()->result_array();    */
        /*
        $sql = "select fullname,date_format(checkin,'%h:%i %p') as usertimein,
                date_format(checkout,'%h:%i %p') as usertimeout,HMSTotal
                from v_employeetimesheet
                where date(checkin)='".$datecheckedin."'
                group by fullname,checkin
                order by DATE(checkin) DESC";
        //echo $sql;
        $query = $this->db->get($sql);
    
        return $query->result();
        */

     $this->db->from('v_getattendancedateofemployee');
     $this->db->where('checkindate',$datecheckedin);
        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;        
        
    }

    //-------------------------------------------------------------------------------------------
    function show_employeeattendanceBYDATE(  ) {
    /*
     $this->db->select('tks_date,checkin,date(checkin) as checkindate');
     $this->db->from('v_employeetimesheet'); 
     $this->db->group_by('tks_date'); 
     $this->db->order_by('DATE(checkin)','desc');
     */
     $this->db->from('v_employeetimesheetBYDATE');
        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }

    //-------------------------------------------------------------------------------------------
    function show_employeeBYattendanceDATE_view($datecheckedin  ) {
    

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }
    //-------------------------------------------------------------------------------------------

    function show_employeeattendance(  ) {
      /*
        $this->db->from('employee');  
        $rows = $this->db->get()->result_array();
        $this->db->from('v_timesheet');  //tbl_timesheet
        //$this->db->where('checkin',CURDATE());
        $this->db->order_by('checkout','desc');

        $concatstr = "CONCAT(lastname,', ', firstname)";
        $this->db->select('A.empid, '.$concatstr.' as FullName, timein, timeout, HMSTotal');
        $this->db->from('employee A');
        $this->db->join('v_timesheet T', 'A.empID = T.empID', 'left outer');
        //$this->db->join('tbl_products t3', 't2.productOrdered = t3.productID');
        $this->db->order_by('checkout', 'desc');
      */
        //$this->db->select('v_employeetimesheet');  //tbl_timesheet   //v_employeetimesheet
        $this->db->from('v_employeetimesheet');  //tbl_timesheet   //v_employeetimesheet
        //$this->db->where('checkin',CURDATE());
        $this->db->order_by('checkin','desc');


        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }

    function get_timesheet($empid  ) {
        //echo $empid;
        //$this->db->from('qmp_csvviewandrateuser');
        $this->db->from('v_timesheet');  //tbl_timesheet
        //$this->db->where('checkin',CURDATE());
        $this->db->where('empid',$empid);
        $this->db->order_by('checkin','desc');

        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }
    //-------------------------------------------------------------------------------------------
    /* simulate
     * timesheet        checkin        checkout
     * 69               10:00PM Nov 13
     *
     *
     * holdtime empid   holdcheckin    expectedtocheckout
     * 69               Nov 13 10PM    Nov 14 7AM
     *
     * 9:30 - 6:30
     *      - 7:30
     *      - 9:30
     *
     * trigger on tbl_presence, date will ensure
     */
    //-------------------------------------------------------------------------------------------
    function togglecheckin_checkoutREV($empid) {
        //echo 'called';
            $this->db->select('timeid,checkin,checkout');
            $this->db->from('timesheet');
            $this->db->where('empid',$empid);
            $this->db->order_by('timeid','DESC');
            $this->db->limit(1, 0);
        $rows = $this->db->get()->result_array();

        if( is_array($rows) && count($rows) > 0 ) {
            return $rows;
        }

        return false;
    }

    //-------------------------------------------------------------------------------------------UNUSED
    function togglecheckin_checkout($empid) {
       //check when the employee has last timed out
        $lastlogin = '';

            $sql = "select ifnull(checkin,'newtimein') as hascheckedin,checkin, max(checkout) as recenttimeout,
                        CONCAT(
                            ifnull(checkin,'newtimein'),
                        CASE WHEN (max(checkout) IS NOT NULL
                           AND max(checkout) != '0000-00-00 00:00:00')
                        THEN 'clockin'

                                ELSE 'clockout'

                           END
                            )
                            AS toggle_flag

                        from timesheet where empid in ($empid)
                         ";
/*
                        and timeid = 
                        (select max(timeid) from timesheet

                        )

*/                         
            //!!echo $sql . '<br />';
            $que = $this->db->query($sql)->row()->toggle_flag;
            if ($this->db->query($sql)->num_rows() > 0)
            {
                $lastlogin = $que;
            }
        return $lastlogin;
    }

    //-------------------------------------------------------------------------------------------

    //unused
    function getrecentcheckin_empid($empid) {
        $this->db->from('tbl_presence');
        $this->db->where('uid', $empid);
        $this->db->where('date', '1');
    }

    //-------------------------------------------------------------------------------------------
    //checkout
    /*
     * SELECT uid,checkin FROM `timesheet`
INNER JOIN tbl_presence
ON timesheet.empid=tbl_presence.uid
     */
    function getlastloginofempid($empid){
        $sql = "select max(date) as lastlogin from
                    (
                    SELECT date,timein,checkin FROM `timesheet`
                    INNER JOIN tbl_presence
                    ON timesheet.empid=tbl_presence.uid
                    AND empid in ($empid)
                    ) AS tbl_a";
        //!!echo $sql;exit;
        $que = $this->db->query($sql)->row()->lastlogin;
        if ($this->db->query($sql)->num_rows() > 0)
        {
            return $que;
        }
    }

    function updatetimesheet_empid($empid) {
        //echo 'upd processed';
        $data = array(
            'empid' => $empid,
            'checkout' => $this->config->item('date_HMSfull'),   //date("Y-m-d H:i:s")
            'ipcheckout' => $_SERVER['REMOTE_ADDR']
        );

        //var_dump($data);exit;
        //"d622-5299867c-vcall-10691"
        /*
         */
        $this->db->where('empid', $empid);
        //last time you checked in
        //!!$this->db->where('DATE(checkin)', $this->timesheet_model->getlastloginofempid($empid));    //$this->config->item('date_YMDonly')
        
        $this->db->where('timeid', $this->input->post('timeid',TRUE));    //$this->config->item('date_YMDonly')

        $this->db->update($this->config->item('tbl_timesheet'), $data);
        return $this->db->affected_rows() > 0;
        //echo $this->db->affected_rows();
    }
    //-------------------------------------------------------------------------------------------
    function inserttimesheet_empid($empid) {
        //echo 'ins processed';
        $data = array(
            'empid' => $empid,
            'checkin' => $this->config->item('date_HMSfull'),
            'ipcheckin' => $_SERVER['REMOTE_ADDR']
        );
        //"d622-5299867c-vcall-10691"
        //$this->db->where('empid', $empid);
        $this->db->insert($this->config->item('tbl_timesheet'), $data);

        $this->insertpresence_empid($empid);

        return $this->db->affected_rows() > 0;
        //echo $this->db->affected_rows();
    }
    //-------------------------------------------------------------------------------------------
    /*
     * ALTER TABLE  `timesheet` ADD  `idusedforlastlogin` INT NOT NULL DEFAULT  '0' AFTER  `ipcheckout` ;
     */
    function insertpresence_empid($empid) {
        $data = array(
            'uid' => $empid,
            'timein' => $this->config->item('date_HMSonly'),
            'date' => $this->config->item('date_YMDonly'),
            'pday' => $this->config->item('date_Wonly')
        );
        $this->db->insert('tbl_presence', $data);
        $_SESSION['lastINSid'] = $this->db->insert_id();
        $lastid = $this->db->insert_id();

        //update the timesheet to determine the idusedforlastlogin
        $data = array(
            'idusedforlastlogin' => $lastid
        );
        //"d622-5299867c-vcall-10691"
        /*
         */
        $this->db->where('empid', $empid);
        //last time you checked in
        $this->db->where('DATE(checkin)', $this->config->item('date_YMDonly'));
        $this->db->update($this->config->item('tbl_timesheet'), $data);

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