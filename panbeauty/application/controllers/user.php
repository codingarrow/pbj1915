<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller { //CI_Controller
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        //captcha
        $this->load->helper(array('form', 'url', 'captcha'));
    }
    public function index()
    {
        //echo 'check '. CI_VERSION;;
        //exit;
        //echo $this->session->userdata('user_id') . ' here';

        if(($this->session->userdata('user_id')!=""))
        {
            redirect(site_url('home'));
        }
        else
        {

            /*
             * load captcha necessary codes
             */
            //$this->captcha_require();
            /* ---------------------------------------------------------------------------------- */
            $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
            $vals = array(
                'word' => $random_number,
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200
            );

            /*
            $captcha = create_captcha($vals);
            $this->session->set_userdata('captchaWord', $captcha['word']);
            */

            /* Generate the captcha */
            $data['captcha'] = create_captcha($vals);
            /* Store the captcha value (or 'word') in a session to retrieve later */
            $this->session->set_userdata('captchaWord',$data['captcha']['word']);
            /* ---------------------------------------------------------------------------------- */
            $this->load->view("register_view", $data);
        }
    }

    public function captcha_require()
    {
        /** Validation was not successful - Generate a captcha **/

        /* Setup vals to pass into the create_captcha function */
        $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
        $vals = array(
            'word' => $random_number,
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/',
            'img_width' => 140,
            'img_height' => 32,
            'expiration' => 7200
        );

        /*
        $captcha = create_captcha($vals);
        $this->session->set_userdata('captchaWord', $captcha['word']);
        */

        /* Generate the captcha */
        $data['captcha'] = create_captcha($vals);
        /* Store the captcha value (or 'word') in a session to retrieve later */
        $this->session->set_userdata('captchaWord',$data['captcha']['word']);

    }

    public function showusers()
    {
        $this->checkusersess();
        $rows = $this->user_model->show_userlist( );

        if ($rows) {
            $data['rows'] = $rows;
        }

        $data['max_posts'] = $rows ? count($rows) : 0;
        //$this->load->view('templates/header');
        $this->load->view('home',$data);
        //$this->load->view('templates/footer');
    }
    //-----------------------------------------------------------------------------------------
    function edit_userlist(){
        //$this->tks_redirect();
        $this->checkusersess();

        $id = $this->uri->segment(3);
        /*
         $leadid = $this->uri->segment(4);
         $data['lead'] = $this->Leads_Model->get_leads_info($leadid);
         $data['content'] = $this->load->view('admin/leads/profile', $data, TRUE);
         echo 'test '.$id;
        /*/
        $data['entry'] =  $this->user_model->get_entry($id);
        //$_SESSION['agententry'] = $this->agent_model->$entry->id;;
        //echo $this->uri->segment(3, 0);
        //if(!isset($data['entry'][0]) || $data['entry'][0] == ""){
        if(!isset($data['entry'][0]) || $data['entry'][0] == ""){
            echo "No id found...redirecting";
            //echo $_SESSION['agententry'];
            //Gredirect("/tks/load_employeemasterlist");
            redirect(site_url('home'));
        }
        else
        {
            //G$data['print_department'] = $this->employee_model->get_dropdepartment();

            //!!$data['entry'] =  $this->employee_model->get_entry($this->input->post('id'));
            //$_SESSION['agententry'] = $gurl;
            //echo $_SESSION['agententry'];
            $data['entry'] = $data['entry'][0];

            //$_SESSION['agententry'] = $gurl;
            //echo $_SESSION['agententry'];
            //G$this->load->view('templates/header');
            $this->load->view('edit_users', $data);
            //G$this->load->view('templates/footer');
        }

    }
    //-----------------------------------------------------------------------------------------

    public function login()
    {
        $rules = array(array('field'=>'l_email','label'=>'Email','rules'=>'required|valid_email'),
            array('field'=>'l_pass','label'=>'Password','rules'=>'required'));
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $auth=$this->user_model->login($this->input->post('l_email'),$this->input->post('l_pass'));
            if($auth)
            {
                //redirect(site_url('home'));
                //$this->load->view('home');
                $this->showusers();
            }
            else
            {
                $this->index();
            }
        }
    }public function register()
{
    $this->load->view('register_view');//loads the register_view.php file in views folder
}

    public function validate_captcha() {//$str
      /*
        $word = $this->session->userdata('captchaWord');
        if(strcmp(strtoupper($str),strtoupper($word)) == 0){
            return true;
        }
        else{
            $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
            return false;
        }
      */
        if($this->input->post('captcha') != $this->session->userdata['captchaWord'])
        {
            $this->form_validation->set_message('validate_captcha', 'Wrong captcha code, kindly verify!');
            return false;
        }else{
        return true;
        }
    }

    public function save_user()
    {
        $id = $this->input->post('id',1);
        $this->user_model->save_user($id);
        //$this->load->view('home');
        redirect(site_url('user/showusers'));

    }

    public function checkusersess()
    {
        if ($this->session->userdata('username') == "")
            redirect(site_url('user/logout'));
    }

    function purge_userlist(){
        $this->checkusersess();

        //G$this->tks_redirect();
        if($this->uri->segment(3, 0) != ""){
            $this->user_model->purge_entry($this->uri->segment(3, 0));
        }
        $showmessage = "You have deleted an employee.<br />";
        //$this->session->set_flashdata('tks_showmessage', $this->tks_message("Info!",$showmessage));
        //!$this->tks_message("Info!",$showmessage);
        //G$this->session->keep_flashdata('tks_showmessage');
        redirect(site_url('user/showusers'));
    }



    public function do_register()
    {
        $rules = array(
            array('field'=>'username','label'=>'User Name','rules'=>'trim|required|min_length[4]|max_length[12]'),
            array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email|is_unique[tblusers.email]'),
            array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
            array('field'=>'gender','label'=>'Gender','rules'=>'required'),
            array('field'=>'captcha','label'=>'Captcha','rules'=>'required|callback_validate_captcha')

        );
        $this->form_validation->set_rules($rules);
        //if($this->form_validation->run() == FALSE)
        /* Get the user's entered captcha value from the form */
        $userCaptcha = set_value('captcha');
        /* Get the actual captcha value that we stored in the session (see below) */
        $word = $this->session->userdata('captchaWord');

        /*
        if ($this->form_validation->run() == TRUE &&
            strcmp(strtoupper($userCaptcha),strtoupper($word)) == 0)
        */
        if($this->form_validation->run() == FALSE)
        {
            $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
            $vals = array(
                'word' => $random_number,
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200
            );

            /*
            $captcha = create_captcha($vals);
            $this->session->set_userdata('captchaWord', $captcha['word']);
            */

            /* Generate the captcha */
            $data['captcha'] = create_captcha($vals);
            /* Store the captcha value (or 'word') in a session to retrieve later */
            $this->session->set_userdata('captchaWord',$data['captcha']['word']);
            /*
            if(strcmp(strtoupper($userCaptcha),strtoupper($word)) == 0)
            {
                echo '1 ' . $userCaptcha .' 2 ' . $word;  --2 has value
                $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
                return false;
            }
            */
            /* ---------------------------------------------------------------------------------- */
            $this->load->view('register_view',$data);
        }
        else
        {
            /* ---------------------------------------------------------------------------------- */
            $this->user_model->register_user();
            $this->load->view('success');
            /* ---------------------------------------------------------------------------------- */
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }
}