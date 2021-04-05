<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranks extends CI_Controller {

	/**
	 * Index page
     * Shows latest news
     * Ranking preview (show top 5 rank of the persons location)
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('GL');
    }

	public function index()
	{
        //
        $data = array();

        //load header and footers
        $ah['ranks_m'] = TRUE;
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

        $this->load->view('users/ranks', $data);
        
	}
}
