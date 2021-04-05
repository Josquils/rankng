<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usr_blog extends CI_Model
{
    
    public function __constructor()
    {
        parent::__construct();
    }
    
    public function fetch_post_data($slug)
    {
        $this->db->select('*')
            ->where('slug', $slug);
        $query = $this->db->get('posts');
        return $query->result_array()[0];
    }

    public function fetch_list($limit=5, $offset=0)
    {
        //
        $this->db->select('*')
            ->order_by('date')
            ->order_by('title')
            ->order_by('excerpts');

        $query = $this->db->get('posts', $limit, $offset);
        return $query->result_array();
    }
    
}
