<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function test_index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('try_view');
		
	}    
    function index() {
        if( $this->session->userdata('isLoggedIn') ) {
            //redirect('/main/show_main');
            //~~redirect('/create/show_agent');
			
			//echo $this->details->userlevel;
			//echo $this->session->userdata('user_level');
			//exit();
			
            //!!redirect('/crmcontroller/show_agent');
			$this->redirect_basedon_userlevel();
        } else {
            $this->show_login(false);
        }
    }

	function redirect_basedon_userlevel()
		{
			switch ($this->session->userdata('userlevel')) 
			{
                /*
				case -1:
				  redirect('/tks/show_employee');
				  break;
				case 3:
				  redirect('/tks/show_timesheet');
				  break;
				case 2:
				  redirect('/tks/show_timesheet');
                */
                case 1:
                  redirect('/tks/show_timesheet');
                  break;
				default:
				  redirect('/tks/show_timesheet');
			}
		}

    //------------------------------------------------------------------        
    function login_admin() {
        // Create an instance of the user model
        $this->load->model('user_m');

        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->user_m->validate_admin($email,$pass)) {
            // If the user is valid, redirect to the main view
            //redirect('/main/show_main');
            //~~redirect('/create/show_agent');

            //echo $this->details->userlevel;
            //echo $this->session->userdata('userlevel');
            //exit();
            
            //!!redirect('/crmcontroller/show_agent');
            $this->redirect_basedon_userlevel();
            
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }        
    //------------------------------------------------------------------        
	
    function login_user() {
        // Create an instance of the user model
        $this->load->model('user_m');

        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->user_m->validate_user($email,$pass)) {
            // If the user is valid, redirect to the main view
            //redirect('/main/show_main');
            //~~redirect('/create/show_agent');

			//echo $this->details->userlevel;
			//echo $this->session->userdata('userlevel');
			//exit();
			
            //!!redirect('/crmcontroller/show_agent');
			$this->redirect_basedon_userlevel();
			
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }

    function show_login( $show_error = false ) {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login',$data);
    }

    function logout_user() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }


}
