<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Resource loader
*/

function gl_meta($meta)
{
    //general meta data properties
    return '
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="'. $meta['desc'] .'">
        <meta name="author" content="'. $meta['author'] .'">

        <!-- Favicons -->
        <link href="'. base_url('assets/img/favicon.png') .'" rel="icon">
        <link href="'. base_url('assets/img/apple-touch-icon.png') .'" rel="apple-touch-icon">

        <title>'. $meta['title'] .'</title>
    ';

}

function gl_header($ah)
{
    $CI = &get_instance();
    return $CI->load->view('users/header', $ah,  TRUE);
}

function ad_header($ah)
{
    $CI = &get_instance();
    $ah['log'] = ($CI->session->userdata('ad_username') != NULL) ? TRUE : FALSE ;
    return $CI->load->view('admin/header', $ah,  TRUE);
}

function gl_footer()
{
    $CI = &get_instance();
    return $CI->load->view('users/footer', '',   TRUE);
}

function gl_modal()
{
    $CI = &get_instance();
    return $CI->load->view('users/modals', '',  TRUE);
}

function gl_scripts($scripts = array())
{
    //script for all pages
    $str = '
            <!-- JavaScript Libraries -->
        <script src="'. base_url('assets/script/jquery.js') .'"></script>
        <script src="'. base_url('assets/script/popper.min.js') .'"></script>
        <script src="'. base_url('assets/script/bootstrap.min.js') .'"></script>
        <script src="'. base_url('assets/script/slick.slider.min.js') .'"></script>
        <script src="'. base_url('assets/script/fancybox.min.js') .'"></script>
        <script src="'. base_url('assets/script/isotope.min.js') .'"></script>
        <script src="'. base_url('assets/script/smartmenus.min.js') .'"></script>
        <script src="'. base_url('assets/script/progressbar.js') .'"></script>
        <script src="'. base_url('assets/script/jquery.countdown.min.js') .'"></script>
        <script src="'. base_url('assets/script/functions.js') .'"></script>
        ';
        
        foreach($scripts as $script):
            $str .= '<script src="'. base_url('assets/' . $script ) . '"></script>';
        endforeach;

        return $str;

}

function gl_style($styles = array())
{
    //styles for all pages
    $str = '
        <!-- CSS -->
        <link rel="stylesheet" href="'. base_url('assets/css/bootstrap.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/fontawesome-all.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/slick-slider.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/fancybox.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/smartmenus.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/style.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/color.css') .'">
        <link rel="stylesheet" href="'. base_url('assets/css/responsive.css') .'">

    ';

    foreach($styles as $style):
        $str .= '<link href="'. base_url('assets/'. $style ) . '" rel="stylesheet">';
    endforeach;

    return $str;
}

function logout()
{
    $CI = &get_instance();
    $CI->session->sess_destroy();
}

function check_login($loc = '')
{
    $CI = &get_instance();
    if(!($CI->session->userdata('username') && $CI->session->userdata('password')))
    {
        //redirect to login page
        $url = ($loc != '') ? 'login?url=' . $loc : 'login';
        redirect(site_url($url), 'refresh');
    }
}

function check_adlogin($loc = '')
{
    $CI = &get_instance();
    if(!($CI->session->userdata('ad_username') && $CI->session->userdata('ad_password')))
    {
        //redirect to login page
        $url = ($loc != '') ? 'admin/login?url=' . $loc : 'admin/login';
        redirect(site_url($url), 'refresh');
    }
}

function check_adhead()
{
    $CI = &get_instance();
    if(!($CI->session->userdata('ad_username') && $CI->session->userdata('ad_password')))
    {
        //redirect to login page
        return FALSE;
    }
    return TRUE;
}

function pwd_hash($pwd)
{
    //
    return crypt($pwd, salt_adder());
}

function compare_pwd($pwd1, $pwd2)
{
    //
    // return hash_equals($pwd1, crypt($pwd2, $pwd1));
    // return hash_equals($pwd1, crypt($pwd2, $pwd1));
    return hash_equals($pwd1, $pwd2);
}

function salt_adder()
{
    //
    $cost = 11;
    $salt = substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);
    /* As blowfish takes a salt with the alphabet ./A-Za-z0-9 we have to
        * replace any '+' in the base64 string with '.'. We don't have to do
        * anything about the '=', as this only occurs when the b64 string is
        * padded, which is always after the first 22 characters.
        */
    $salt = str_replace("+",".",$salt);
    /* Next, create a string that will be passed to crypt, containing all
        * of the settings, separated by dollar signs
        */
    $param ='$'.implode('$',array(
            "2y", //select the most secure version of blowfish (>=PHP 5.3.7)
            str_pad($cost,2,"0",STR_PAD_LEFT), //add the cost in two digits
            $salt //add the salt
    ));

    return $param;
}

function sch()
{
    //
    $CI = &get_instance();
    return $CI->session->userdata('school');
}

function gl_actions()
{
    //
    $CI = &get_instance();
    $CI->load->library('user_agent');
    $agent = $CI->agent->agent_string();
    $method = $CI->input->method();
    
    return "{method: ". $method ."  ---; --- agent: ". $agent ."}";
}

function activity_list($track)
{
    //prep username, action, IPaddress, action ID for addition
    $CI = &get_instance();
    $add['activity_id'] = uniqid($track['suffix']);
    $add['username']    = ($CI->session->userdata('username') !== NULL) ? $CI->session->userdata('username') : '-- Anonymous -- ';
    $add['action']      = $track['action'];
    $add['action_id']   = $track['id'];
    $add['ip_address']  = $CI->input->ip_address();
    $add['details']     = gl_actions();
    $CI->load->model('md_gen');
    $CI->md_gen->add_activity($add);
}
