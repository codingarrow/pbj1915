<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tks extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		$this->load->helper ( 'url' );
        //make sure user is logged in via session before anything else

       //uncomment once login is processed

        if( !$this->session->userdata('isLoggedIn') ) {
            redirect('/login/show_login');
        }
      /*
        $this->load->library('Datatables');
        $this->load->library('table');
      */

        //not working try to include on databases_helper.php
        //$this->load->library('Pest');
        $this->load->database();
        $this->load->model('timesheet_model');
        $this->load->model('employee_model');

  }
    /*
     * for simulation & testing purposes
     */
    //-------------------------------------------------------------------------------------------
   function tinawag(){
       $test = '';
   }

    function _show_agent() 
    {
	$data = '';
		$this->load->view('templates/header', $data);
		//$this->load->view('pages/'.$page, $data);
		$this->load->view('welcome_message');
		$this->load->view('templates/footer', $data);	        
    }  
    //-------------------------------------------------------------------------------------------TEST CODE
	function updateinsideDIV(){
	$this->load->model('surveyform_model');
	//$this->surveyform_model->updateinsideDIVexample();
	$this->surveyform_model->updatesurveyquestions();
	}
    //-------------------------------------------------------------------------------------------
    function tks_timeinout(){
        //$checkin = $this->input->get_post('timein', TRUE);
      //echo 'processed';

        $empid = $this->session->userdata('empid'); //51;

        $new_timein = $this->input->post('checkin');
        $new_timeout = $this->input->post('checkout');

        if( isset($new_timein) && $new_timein != "" ) {
                echo 'inserted';
                //save to database
            $this->timesheet_model->inserttimesheet_empid($empid);
            }

        if( isset($new_timeout) && $new_timeout != "" ) {
            echo 'updated';
            //save to database
            $this->timesheet_model->updatetimesheet_empid($empid);
        }

        redirect('/tks/show_timesheet');
        //echo 'shit';
        //exit;
    }
    //-------------------------------------------------------------------------------------------
    public function edit_employee(){
            //$this->newcampaign();
            //echo 'ok';
           /*
            $data['name'] = $this->input->post('name');
            $data['datetime_init'] = $this->input->post('datetime_init');
            $data['datetime_end'] = $this->input->post('datetime_end');
            $data['daytime_init'] = $this->input->post('hora_ini_HH') . $this->input->post('hora_ini_MM');
            $data['daytime_end'] = $this->input->post('hora_fin_HH') . $this->input->post('hora_fin_MM');
           */
        //prevent direct access when info aren't field
        $id = $this->input->post('id',1);
        $login = $this->input->post('login',1);
        if (strlen($login)<1)
            redirect("/tks/edit_employeemasterlist/{id}");
        //exit;

            $data['department'] = $this->input->post('department');
            $data['employment_status'] = $this->input->post('employment_status');
            $data['login'] = $this->input->post('login');
            $data['lastname'] = $this->input->post('lastname');
            $data['firstname'] = $this->input->post('firstname');
            $data['minit'] = $this->input->post('minit');
            $data['skype_id'] = $this->input->post('skype_id');
            $data['date_hired'] = $this->input->post('date_hired');
            $data['birth_date'] = $this->input->post('birth_date');
            $data['position'] = $this->input->post('position');
            $data['gender'] = $this->input->post('gender');
            $data['email'] = $this->input->post('email');
            $data['address1'] = $this->input->post('address1');
            $data['cellphone'] = $this->input->post('cellphone');
            $data['sss_no'] = $this->input->post('sss_no');
            $data['tin_no'] = $this->input->post('tin_no');
            $data['philhealthno'] = $this->input->post('philhealthno');
            $data['pagibig_no'] = $this->input->post('pagibig_no');
            $data['password'] = $this->input->post('password');
            $data['em_contact_person'] = $this->input->post('em_contact_person');
            $data['em_contact_address'] = $this->input->post('em_contact_address');
            $data['gumi_email'] = $this->input->post('gumi_email');

            $this->employee_model->update_entry($data);
            redirect("/tks/load_employeemasterlist");
    }    
    //-------------------------------------------------------------------------------------------
    function edit_employeemasterlist(){
        $id = $this->uri->segment(3);
       /*
        $leadid = $this->uri->segment(4);
        $data['lead'] = $this->Leads_Model->get_leads_info($leadid);
        $data['content'] = $this->load->view('admin/leads/profile', $data, TRUE);        
        echo 'test '.$id;
       /*/
                    $data['entry'] =  $this->employee_model->get_entry($id);
                    //$_SESSION['agententry'] = $this->agent_model->$entry->id;;
                    //echo $this->uri->segment(3, 0);
                    //if(!isset($data['entry'][0]) || $data['entry'][0] == ""){
                    if(!isset($data['entry'][0]) || $data['entry'][0] == ""){
                            echo "No id found...redirecting";
                            //echo $_SESSION['agententry'];
                redirect("/tks/load_employeemasterlist");
                    }
                    else
                    {
                      $data['print_department'] = $this->employee_model->get_dropdepartment();

                            //!!$data['entry'] =  $this->employee_model->get_entry($this->input->post('id'));
                            //$_SESSION['agententry'] = $gurl;
                            //echo $_SESSION['agententry'];
                            $data['entry'] = $data['entry'][0];

                            //$_SESSION['agententry'] = $gurl;
                            //echo $_SESSION['agententry'];
                            $this->load->view('templates/header');
                            $this->load->view('edit_employee', $data);
                            $this->load->view('templates/footer');
                    }

    }
    //-------------------------------------------------------------------------------------------
    function purge_employeemasterlist(){

    }

    //-------------------------------------------------------------------------------------------
    function tst_ems(){
      $data = "";
              //$this->load->view('EmailPasswordSent',$data);
              $this->load->view('send4gottenpassword',$data);

            }

    //-------------------------------------------------------------------------------------------
    function new_employee(){
      $data = "";
      $data['print_department'] = $this->employee_model->get_dropdepartment();

             $this->load->view('templates/header');
              $this->load->view('new_employee',$data);
             $this->load->view('templates/footer');
             //$this->render('admin', $data);
    }
    //-------------------------------------------------------------------------------------------
    public function insert_employee(){
            //$this->newcampaign();
            //echo 'ok';
           /*
            $data['name'] = $this->input->post('name');
            $data['datetime_init'] = $this->input->post('datetime_init');
            $data['datetime_end'] = $this->input->post('datetime_end');
            $data['daytime_init'] = $this->input->post('hora_ini_HH') . $this->input->post('hora_ini_MM');
            $data['daytime_end'] = $this->input->post('hora_fin_HH') . $this->input->post('hora_fin_MM');
           */
        //prevent direct access when info aren't field
        $login = $this->input->post('login',1);
        if (strlen($login)<1)
            redirect("/tks/new_employee");
        //exit;

            $data['department'] = $this->input->post('department');
            $data['employment_status'] = $this->input->post('employment_status');
            $data['login'] = $this->input->post('login');
            $data['lastname'] = $this->input->post('lastname');
            $data['firstname'] = $this->input->post('firstname');
            $data['minit'] = $this->input->post('minit');
            $data['skype_id'] = $this->input->post('skype_id');
            $data['date_hired'] = $this->input->post('date_hired');
            $data['birth_date'] = $this->input->post('birth_date');
            $data['position'] = $this->input->post('position');
            $data['gender'] = $this->input->post('gender');
            $data['email'] = $this->input->post('email');
            $data['address1'] = $this->input->post('address1');
            $data['cellphone'] = $this->input->post('cellphone');
            $data['sss_no'] = $this->input->post('sss_no');
            $data['tin_no'] = $this->input->post('tin_no');
            $data['philhealthno'] = $this->input->post('philhealthno');
            $data['pagibig_no'] = $this->input->post('pagibig_no');
            $data['password'] = $this->input->post('password');
            $data['em_contact_person'] = $this->input->post('em_contact_person');
            $data['em_contact_address'] = $this->input->post('em_contact_address');
            $data['gumi_email'] = $this->input->post('gumi_email');

            $this->employee_model->insert_entry($data);
            redirect("/tks/load_employeemasterlist");
    }
    //-------------------------------------------------------------------------------------------
    function mailGUIDEindex()
    {
        if ($this->Registration_Model->count_all())
        {            
            $this->load->helper(array('excel', 'inflector', 'file'));
            
            $filename = date('Y-m-d');
            
            to_excel($this->Registration_Model->get_all_export(), $filename, TRUE);
            
            $this->load->library('email');

            $this->email->from('info@mongolia12g.com', 'mongolia12g.com');

            $this->email->to('jbpaginado@gmail.com');
            $this->email->to('Charlotte_Rogacion@dell.com');
            //$this->email->to('michaellouieloria@gmail.com', 'ivy@webdc.com.ph');
            
            $this->email->subject('Registrations for the Day');
            $this->email->message('Sent Registations for the Day - ' . date('l, F j, Y'));
            $this->email->attach("./xls/$filename.xls");
            $this->email->send();
        }
    }
    //-------------------------------------------------------------------------------------------

    function load_employeeattendance(){
      //echo 'employee and Admin files here';

        //echo $this->session->userdata('empid');
        //$rows = $this->timesheet_model->show_employeeattendance( );
        $rows = $this->timesheet_model->show_employeeattendanceBYDATE();

          if ($rows) {
            $data['rows'] = $rows;
          }
        
          $data['max_posts'] = $rows ? count($rows) : 0;
        /*
        */
        
             $this->load->view('templates/header');
              $this->load->view('show_employee',$data);
             $this->load->view('templates/footer');


    }
    
    //-------------------------------------------------------------------------------------------
    function load_employeemasterlist(){
        $rows = $this->timesheet_model->show_employeemasterlist( );
        
          if ($rows) {
            $data['rows'] = $rows;
          }
        
          $data['max_posts'] = $rows ? count($rows) : 0;

             $this->load->view('templates/header');
              $this->load->view('show_employeemasterlist',$data);
             $this->load->view('templates/footer');
           }
    //-------------------------------------------------------------------------------------------

    function show_timesheet() {
        $empid = $this->session->userdata('empid'); //51;
  $data = "";

        //echo date("Y-m-d H:i:s");
        //echo date_default_timezone_get('date.timezone');
        //$togglein_out = $this->timesheet_model->togglecheckin_checkout($empid);

        $rowsREV = $this->timesheet_model->togglecheckin_checkoutREV($empid);
          if ($rowsREV) {
            $data['rowsREV'] = $rowsREV;
          }
        
          $data['max_postsREV'] = $rowsREV ? count($rowsREV) : 0;        

        //$time_FLG = 'show time out';

        /*
        if (strlen($togglein_out) > 2 && isset($togglein_out))
        {
            //$time_FLG = 'this timed out show time in';
        }
        echo $togglein_out;
        */
        //!!$pos = strpos($togglein_out, "clockin");


	/*
	$show = $this->input->get_post('show', TRUE);
	
    $this->load->model('show_call_model');	
	$call_list = $this->show_call_model->show_call_list($show);
    if ($call_list) {
      $data['call_list'] = $call_list;
    }	
	*/
	//$this->load->model('timesheet_model');
        //$empid = 69;
        //echo $this->timesheet_model->getlastloginofempid($empid);

	$rows = $this->timesheet_model->get_timesheet( $empid);
	
    if ($rows) {
      $data['rows'] = $rows;
    }
	
    $data['max_posts'] = $rows ? count($rows) : 0;
	/*
	*/
	
       $this->load->view('templates/header');
        $this->load->view('show_timesheet',$data);
       $this->load->view('templates/footer');
	
	}	
    //-------------------------------------------------------------------------------------------
    function show_call_list() {
	$data = "";
	$show = $this->input->get_post('show', TRUE);
	
    $this->load->model('show_call_model');	
	$call_list = $this->show_call_model->show_call_list($show);
    if ($call_list) {
      $data['call_list'] = $call_list;
    }	
       //$this->load->view('templates/header');
        $this->load->view('show_call_div',$data);
       //$this->load->view('templates/footer');
	
	}
    //-------------------------------------------------------------------------------------------
	
    function show_surveyform() 
    {
	$this->load->model('surveyform_model');
	$topics = $this->surveyform_model->get_surveyquestions( );
    // If posts were fetched from the database, assign them to $data
    // so they can be passed into the view.
	
	//survey questions
    if ($topics) {
      $data['topics'] = $topics;
    }
    $data['max_posts'] = $topics ? count($topics) : 0;

    //campaigns
    $campaigns = $this->surveyform_model->get_campaigns();
    if ($campaigns) {
      $data['campaigns'] = $campaigns;
    }
    $data['max_campaigns'] = $campaigns ? count($campaigns) : 0;
	
	
    //$questions = get_surveysubquestions
	
       $this->load->view('templates/header');
        $this->load->view('show_surveyform',$data);
       $this->load->view('templates/footer');
	   
    }  
	
    //-------------------------------------------------------------------------------------------
	
	
    function show_surfeyform_keep() 
    {
        //set table id in table open tag
        $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="2" cellspacing="1" class="table table-bordered table-hover table-striped">' );  //class="table table-striped table-bordered bootstrap-datatable datatable"
        $this->table->set_template($tmpl); 
        //$this->table->set_heading('Number','Name','Status','Options');
        $this->table->set_heading('cat id','questions','topic','edited by','actions');
       $this->load->view('templates/header');
        $this->load->view('show_surfeyform');
       $this->load->view('templates/footer');
        
    }  
    //-------------------------------------------------------------------------------------------
    function ratingcategorydatatable_keep()
    {
        //->unset_column('avatar')
        //->add_column('avatar', '<img src="$1"/>','avatar')
        
        $this->datatables->select('categoryid,category,topic_id,user_id')
        //->unset_column('id')
        //->unset_column('tipo')
        ->add_column('Actions', qmp_rating_category_buttons('$1'),'categoryid')
        ->from('qmp_rating_category');
        
        echo $this->datatables->generate();
    }  
    //-------------------------------------------------------------------------------------------POSTGRE qmp_settings
    function qmp_setting() 
    {
        //set table id in table open tag
        $tmpl = array ( 'table_open'  => '<table id="big_table" class="table table-bordered table-hover table-striped">' );  // display border="0" cellpadding="2" cellspacing="1" class="table table-striped table-bordered bootstrap-datatable datatable"
        $this->table->set_template($tmpl); 
        //$this->table->set_heading('Number','Name','Status','Options');
        $this->table->set_heading('setting id','name','value','edited by','actions');
       $this->load->view('templates/header');
        $this->load->view('qmp_setting');
       $this->load->view('templates/footer');
        
    }  
    //-------------------------------------------------------------------------------------------
    //function formdatatable()
	function qmp_settingdatatable()
    {
        //->unset_column('avatar')
        //->add_column('avatar', '<img src="$1"/>','avatar')
        
        $this->datatables->select('setting_id,setting_name,setting_value,user_id')
        //->unset_column('id')
        //->unset_column('tipo')
        ->add_column('Actions', qmp_setting_buttons('$1'),'setting_id')
        ->from('qmp_settings');
		//->order_by('setting_id', 'desc');
        
        echo $this->datatables->generate();
    }  
    //-------------------------------------------------------------------------------------------CAMPAIGNS
    function show_campaign() 
    {
        //set table id in table open tag
        $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="2" cellspacing="1" class="table">' );  //class="table table-striped table-bordered bootstrap-datatable datatable"
        $this->table->set_template($tmpl); 
        //$this->table->set_heading('Number','Name','Status','Options');
        $this->table->set_heading('id','name','datetime_init','datetime_end','actions');
       $this->load->view('templates/header');
        $this->load->view('show_campaign');
       $this->load->view('templates/footer');
        
    }  
    //-------------------------------------------------------------------------------------------
    function campaigndatatable()
    {
        //->unset_column('avatar')
        //->add_column('avatar', '<img src="$1"/>','avatar')
        
        $this->datatables->select('id,name,datetime_init,datetime_end')
        //->unset_column('id')
        //->unset_column('tipo')
        ->add_column('Actions', campaign_buttons('$1'),'id')
        ->from('campaign');
        
        echo $this->datatables->generate();
    }  
    //-------------------------------------------------------------------------------------------
  /**
   * This is the controller method that drives the application.
   * After a user logs in, show_main() is called and the main
   * application screen is set up.
   */
    //-------------------------------------------------------------------------------------------
    //below are guide functions that may be used later XD
    //-------------------------------------------------------------------------------------------
  function show_main() {
    $this->load->model('post_m');

    // Get some data from the user's session
    $user_id = $this->session->userdata('id');
    $is_admin = $this->session->userdata('isAdmin');
    $team_id = $this->session->userdata('teamId');

    // Load all of the logged-in user's posts
    $posts = $this->post_m->get_posts_for_user( $user_id, 5 );

    // If posts were fetched from the database, assign them to $data
    // so they can be passed into the view.
    if ($posts) {
      $data['posts'] = $posts;
    }

    // Load posts based on the user's permission. Admins can see
    // everything, and regular users can only see posts from
    // their own team.
    $other_users_posts = $this->post_m->get_all_other_posts( $user_id, $team_id, $is_admin );
    if( $other_users_posts ) {
      $data['other_posts'] = $other_users_posts;
    }

    $data['is_admin'] = $is_admin;
    $data['max_posts'] = $posts ? count($posts) : 0;
    $data['post_count'] = $this->post_m->get_post_count_for_user( $user_id );
    $data['email'] = $this->session->userdata('email');
    $data['name'] = $this->session->userdata('name');
    $data['avatar'] = $this->session->userdata('avatar');
    $data['tagline'] = $this->session->userdata('tagline');
    $data['teamId'] = $this->session->userdata('teamId');

    $this->load->view('main',$data);
  }

  function post_message() {
    $message = $this->input->post('message');

    if ( $message ) {
      $this->load->model('post_m');
      $saved = $this->post_m->save_post($message);
    }

    if ( isset($saved) && $saved ) {
       echo "<tr><td>". $saved['body'] ."</td><td>". $saved['createdDate'] ."</td></tr>";
    } else {

    }
  }

  function create_new_user() {
    $userInfo = $this->input->post(null,true);

    if( count($userInfo) ) {
      $this->load->model('user_m');
      $saved = $this->user_m->create_new_user($userInfo);
    }

    if ( isset($saved) && $saved ) {
       echo "success";
    }
  }

  function update_tagline() {
    $new_tagline = $this->input->post('message');
    $user_id = $this->session->userdata('id');

    if( isset($new_tagline) && $new_tagline != "" ) {
      $this->load->model('user_m');
      $saved = $this->user_m->update_tagline($user_id, $new_tagline);
    }

    if ( isset($saved) && $saved ) {
      $this->session->set_userdata(array('tagline'=>$new_tagline));
      echo "success";
    }
  }

}
