<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Uni_det extends CI_Model
{

    public function __constructor()
    {
        parent::__construct();
    }

    public function fetch_data($limit = 15, $offset = 0)
    {
        $this->db->select('*')
            ->order_by('name')
            ->order_by('last_update');

        $query = $this->db->get('universities', $limit, $offset);
        return $query->result_array();
    }

    public function fetch_post_data($id)
    {
        $this->db->select('*')
            ->where('school_id', $id);
        $query = $this->db->get('universities');
        return $query->result_array()[0];
    }

    public function update_post(array $data, string $id)
    {
        $this->db->where('school_id =', $id);
        $this->db->update('universities', $data);
        return;
    }

    public function add_uni($data = array())
    {
       //
        $this->db->insert('universities', $data);
        return;
    }
}
