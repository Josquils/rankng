<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index page
     * Shows latest news
     * Ranking preview (show top 5 rank of the persons location)
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('GL');
        $this->load->model('usr_blog');
    }

	public function index()
	{
        //
        $data = array();

        //load header and footers
        $ah['blog_m'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style();
        $data['scripts']    = gl_scripts();
        $data['modals']    = gl_modal();

        $data['posts']  = $this->usr_blog->fetch_list();
        $this->load->view('users/blog', $data);
        
    }
    
    public function view($slug ='')
    {
        //
        $data = array();

        if($slug == '')
        {
            //reditect home
            redirect(site_url());
        }

        //load header and footers
        $ah['blog_m'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style();
        $data['scripts']    = gl_scripts();
        $data['modals']     = gl_modal();

        $data['post'] = $this->usr_blog->fetch_post_data($slug);
        // print_r($data['post']);

        $this->load->view('users/blog_view', $data);
    }
}
