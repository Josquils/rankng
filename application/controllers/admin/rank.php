<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rank extends CI_Controller
{

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
        $this->load->helper('text');
        $this->load->model('ad_ranking');
    }

    public function index($school_id = '')
    {
        $data = array();
        $add = array();

        if ($this->input->post('rank_front')) {
            //
            $school_id = $this->input->post('schools', TRUE);
            $year = $this->input->post('a_year', TRUE);
            redirect(site_url('admin/rank/edit/' . $school_id . '/' . $year), 'refresh');
            exit;
        }

        //load header and footers
        $ah['admin'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );
        $css = array(
            'script/select2/css/select2.min.css'
        );
        $js = array(
            'script/select2/js/select2.full.min.js'
        );

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style($css);
        $data['scripts']    = gl_scripts($js);
        $data['modals']     = gl_modal();


        $data['uni_list']   = $this->ad_ranking->uni_list();

        $this->load->view('admin/rank/rank_front', $data);
    }

    public function edit(string $school_id = '', int $year = NULL)
    {
        //
        $data = array();

        if ($school_id == '' || $year == NULL) {
            redirect(site_url('admin/rank'));
        }

        if($this->input->post('rank_data'))
        {
            //
        }
        
        //load header and footers
        $ah['admin'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );
        $css = array(
            'script/select2/css/select2.min.css'
        );
        $js = array(
            'script/select2/js/select2.full.min.js'
        );

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style($css);
        $data['scripts']    = gl_scripts($js);
        $data['modals']     = gl_modal();

        //check db for year's data
        $add = array();
        $add['school_id'] = $school_id;
        $add['year']    = $year;

        $resp = $this->ad_ranking->fetch_data($add);

        if($resp !== FALSE)
        {
            //
            $data['data'] = $resp;
        }

        $this->load->view('admin/rank/edit', $data);
    }
}
