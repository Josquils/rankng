<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uni_details extends CI_Controller
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
        $this->load->model('uni_det');
    }

    public function index($ind = 0)
    {
        // check_adlogin('admin/blog/');

        //list of contents added by the user 
        $data = array();

        //load header and footers
        $ah['admin'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );
        // fetch all post
        $offset = ($ind !== 0) ? ( $ind * 5 ) : 0;
        $data['post_data']  = $this->uni_det->fetch_data(5, $offset);
        

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style();
        $data['scripts']    = gl_scripts();
        $data['modals']     = gl_modal();

        $this->load->view('admin/uni/uni_list', $data);
    }

    private function delete($post_id)
    {
        // 
    }

    public function view($school_id)
    {
        //
        //
        $data = array();

        if($school_id == '')
        {
            //reditect home
            redirect(site_url());
        }

        //load header and footers
        $ah['admin'] = TRUE;
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

        $data['post'] = $this->uni_det->fetch_post_data($school_id);

        $this->load->view('admin/uni/uni_view', $data);
    }

    public function update(string $uni_id)
    {
        // 
        $data = array();

        if($this->input->post('update_post'))
        {
            //
            $data['error'] = '';
            $add = array();
            
            $add['name']       = ucwords($this->input->post('name', TRUE));
            $add['abb']       = strtoupper($this->input->post('abb', TRUE));
            $add['about']     = $this->input->post('details', TRUE);
            $add['location']    = $this->input->post('location', TRUE);
            $add['website']    = $this->input->post('url', TRUE);
            $add['update_author']      = $this->session->userdata('fullname');
            
            // Upload image file
            $thumbnail   = $this->upload_file($data['error']);
            ($thumbnail != FALSE) ? $add['logo'] = $thumbnail : '';
            $add['update_author']  = $this->session->userdata('fullname');
            
            // Upload image file
            $thumbnail   = $this->upload_file($data['error']);

            ($thumbnail != FALSE) ? $add['logo'] = $thumbnail : '';

            $this->uni_det->update_post($add, $uni_id);
        }

        
        //load header and footers
        $ah['admin'] = TRUE;
        $meta = array(
            'title' => 'IPO Rank',
            'desc' => 'Prepare ahead by following the course outline for your department at ',
            'author' => 'IPO Rank'
        );
        $css = array(
            'css/bootstrap-fileupload.min.css'
        );
        $js = array(
            'script/CKEditor/ckeditor.js',
            'script/bootstrap-fileupload.js'
        );
        

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style($css);
        $data['scripts']    = gl_scripts($js);
        $data['modals']     = gl_modal();

        $data['post'] = $this->uni_det->fetch_post_data($uni_id);
        $data['post']['sub_type'] = 'edit';

        $this->load->view('admin/uni/add_uni', $data);
    }

    public function add_uni()
    {
        // 
        //list of contents added by the user 
        $data = array();

        // collect post data --- title, content, 
        if($this->input->post('add_post'))
        {
            //
            $data['error'] = '';
            $add = array();
            
            $add['name']       = ucwords($this->input->post('name', TRUE));
            $add['abb']       = strtoupper($this->input->post('abb', TRUE));
            $add['about']     = $this->input->post('details', TRUE);
            $add['location']    = $this->input->post('location', TRUE);
            $add['website']    = $this->input->post('url', TRUE);
            $add['school_id']        = uniqid();
            $add['author']      = $this->session->userdata('fullname');
            $add['update_author']      = $add['author'];
            
            // Upload image file
            $thumbnail   = $this->upload_file($data['error']);
            ($thumbnail != FALSE) ? $add['logo'] = $thumbnail : '';

            $this->uni_det->add_uni($add);
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
            'css/bootstrap-fileupload.min.css'
        );
        $js = array(
            'script/CKEditor/ckeditor.js',
            'script/bootstrap-fileupload.js'
        );
        

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style($css);
        $data['scripts']    = gl_scripts($js);
        $data['modals']     = gl_modal();

        $this->load->view('admin/uni/add_uni', $data);
    }

    private function upload_file(&$error)
    {
        //NUMBER CODES ---- dup means duplicate found; TRUE means successful; FALSE means no upload; else Rule violated

        $config['upload_path']          = './assets/logo/';
        $config['allowed_types']        = 'jpeg|png|jpg';
        $config['max_size']             = 20480;
        $config['encrypt_name']         = 'TRUE';

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('logo'))
        {
            $error = $this->upload->display_errors('<span>', '</span>');
            // echo '<h2>' . $error . '</h2>';
            return FALSE;
        }
        else
        {
            // send the filename
            $file   = $this->upload->data();
            return $file['file_name'];

            // To delete 
            // ! unlink( APPPATH . 'ebooks/' . $file['file_name'])
        }

        return FALSE;
    }
}
