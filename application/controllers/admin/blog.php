<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
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
        $this->load->model('admin_blog');
    }

    public function index($ind = 0)
    {
        check_adlogin('admin/blog/');

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
        $data['post_data']  = $this->admin_blog->fetch_data(5, $offset);
        

        //load resources
        $data['header']     = gl_header($ah);
        $data['footer']     = gl_footer();
        $data['metas']      = gl_meta($meta);
        $data['styles']     = gl_style();
        $data['scripts']    = gl_scripts();
        $data['modals']     = gl_modal();

        $this->load->view('admin/blog/blog_list', $data);
    }

    private function delete($post_id)
    {
        // 
    }

    public function update(string $post_slug)
    {
        // 
        $data = array();

        if($this->input->post('update_post'))
        {
            //
            $data['error'] = '';
            $add = array();
            
            $add['title']       = $this->input->post('title', TRUE);
            $add['content']     = $this->input->post('content', TRUE);
            $add['category']    = $this->input->post('category');
            $add['excerpts']    = strip_tags($this->input->post('excerpts', TRUE));
            $add['excerpts']    = ($add['excerpts'] == '') ? word_limiter(strip_tags($add['content']), 20, '...') : $add['excerpts'];
            $add['slug']        = url_title(strip_tags($add['title']));
            $add['update_author']  = $this->session->userdata('fullname');
            
            // Upload image file
            $thumbnail   = $this->upload_file($data['error']);

            ($thumbnail != FALSE) ? $add['thumbnail'] = $thumbnail : '';

            $resp = $this->admin_blog->update_post($add, $post_slug);
            redirect(site_url('/admin/blog/update/'.$resp));
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

        $data['post'] = $this->admin_blog->fetch_post_data($post_slug);
        $data['post']['sub_type'] = 'edit';

        $this->load->view('admin/blog/add_post', $data);
    }

    public function add_post()
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
            
            $add['title']       = $this->input->post('title', TRUE);
            $add['content']     = $this->input->post('content', TRUE);
            $add['category']    = $this->input->post('category');
            $add['excerpts']    = $this->input->post('excerpts', TRUE);
            $add['excerpts']    = ($add['excerpts'] == '') ? word_limiter($add['content'], 20, '...') : $add['excerpts'];
            $add['slug']        = url_title($add['title']);
            $add['author']      = $this->session->userdata('fullname');
            $add['update_author']      = $add['author'];
            
            // Upload image file
            $thumbnail   = $this->upload_file($data['error']);
            ($thumbnail != FALSE) ? $add['thumbnail'] = $thumbnail : '';

            $this->admin_blog->add_post($add);
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

        $this->load->view('admin/blog/add_post', $data);
    }

    private function upload_file(&$error)
    {
        //NUMBER CODES ---- dup means duplicate found; TRUE means successful; FALSE means no upload; else Rule violated

        $config['upload_path']          = './assets/thumbnails/';
        $config['allowed_types']        = 'jpeg|png';
        $config['max_size']             = 20480;
        $config['encrypt_name']         = 'TRUE';

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('up_img'))
        {
            $error = $this->upload->display_errors('<span>', '</span>');
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
