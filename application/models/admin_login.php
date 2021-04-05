<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Model
{
    
    public function __constructor()
    {
        parent::__construct();
    }
    
    public function verify_login($data)
    {
        //
        $this->db->select('password, firstname, lastname')
                ->where('username =', $data['username'])
                ->where('position =', 'admin');

        $query = $this->db->get('users');

        if($query->num_rows() == 1)
        {
            //proceed
            $qry = $query->result_array()[0];
            $pwd = $qry['password'];

            if(crypt($data['password'], $pwd)==$pwd)
            {
                $this->session->set_userdata('fullname', $qry['firstname'] . ' ' . $qry['lastname']);
                return TRUE;
            }
            else
            {
                return FALSE;
            }
            // return crypt($data['password'], $pwd)==$pwd;
        }
        else
        {
            return FALSE;
        }
    }
    
}
