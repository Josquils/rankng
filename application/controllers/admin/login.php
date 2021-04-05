<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index page
     * Shows latest news
     * Ranking preview (show top 5 rank of the persons location)
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('GL');
        $this->load->model('admin_login');
    }

	public function index()
	{
        //
        
        $data = array();

        if($this->input->post('admin_login'))
        {
            //
            $add = array();
            $add['username'] = $this->input->post('username', TRUE);
            $add['password'] = $this->input->post('password');
            $add['remember'] = $this->input->post('remember');

            $resp = $this->admin_login->verify_login($add);

            if($resp === TRUE)
            {
                //true login
                $this->session->set_userdata('ad_username', $add['username']);
                $this->session->set_userdata('ad_password', pwd_hash($add['password']));

                if($add['remember'] == 'remember')
                {
                    $this->session->sess_expiration = 0;
                }

                //default page to send to
                $page = 'admin/blog';
                if(($this->input->get('url', TRUE)) && ($this->input->get('url', TRUE) != ''))
                {
                    $page = 'admin/' . $this->input->get('url', TRUE);
                }
                redirect(site_url($page));
                exit;
            }
            else
            {
                $data['login_error']['msg'] = 'Username and Password provided does not match <br> <br>';
                $data['login_error']['username'] =  $add['username'];
                $data['login_error']['remember'] =  $add['remember'];
            }

        }

        //load header and footers
        $ah['login_m'] = TRUE;
        $meta = array(
            'title' => 'IPO Quality Rank',
            'desc' => 'IPO Quality Ranking',
            'author' => 'IPO Rank'
        );

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style();
        $data['scripts']    = gl_scripts();
        $data['modals']     = gl_modal();

        $this->load->view('admin/login', $data);
        
    }
    
    public function logout()
    {
        //logout
        //
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }

    public function register()
    {
        //add new user
        
    }
}
