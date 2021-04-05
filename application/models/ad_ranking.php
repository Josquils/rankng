<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ad_ranking extends CI_Model
{

    public function __constructor()
    {
        parent::__construct();
    }

    public function uni_list()
    {
        //
        $this->db->select('school_id, abb, name');
        $query = $this->db->get('universities');

        return $query->result_array();
    }

    public function fetch_data($data)
    {
        //
        $this->db->select('*')
            ->where('school_id', $data['school_id'])
            ->where('year', $data['year']);
        $query = $this->db->get('rank_data');

        if ($query->num_rows() == 1) {
            return $query->result_array()[0];
        }
        else
        {
            return FALSE;
        }

    }
}
