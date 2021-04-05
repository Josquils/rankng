<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_blog extends CI_Model
{

    public function __constructor()
    {
        parent::__construct();
    }

    public function fetch_data($limit = 5, $offset = 0)
    {
        $this->db->select('*')
            ->order_by('date')
            ->order_by('title')
            ->order_by('excerpts');

        $query = $this->db->get('posts', $limit, $offset);
        return $query->result_array();
    }

    public function fetch_post_data($slug)
    {
        $this->db->select('*')
            ->where('slug', $slug);
        $query = $this->db->get('posts');
        return $query->result_array()[0];
    }

    public function update_post(array $data, string $slug)
    {
        //use Id
        $trail = 1;
        // $slug = $data['slug'];
        $slug_dup = $data['slug'];

        if ($data['slug'] != $slug) :
            while (TRUE) {
                $this->db->select('post_id')
                    ->from('posts')
                    ->where('slug =', $slug_dup);

                $query = $this->db->get();
                if ($query->num_rows() == 0) {
                    break;
                } else {
                    $slug_dup = $slug . $trail;
                    $trail++;
                }
            }
        endif;

        $data['slug'] = $slug_dup;

        $this->db->where('slug =', $slug);
        $this->db->update('posts', $data);
        return $data['slug'];
    }

    public function add_post($data = array())
    {
        // 
        $trail = 1;
        $slug = $data['slug'];
        $slug_dup = $data['slug'];

        while (TRUE) {
            $this->db->select('post_id')
                ->from('posts')
                ->where('slug =', $slug_dup);

            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                break;
            } else {
                $slug_dup = $slug . $trail;
                $trail++;
            }
        }

        $data['slug'] = $slug_dup;

        $this->db->insert('posts', $data);
        return;
    }
}
