<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_security extends MX_Controller
{

    function __construct() {

        parent::__construct();
    }

    function make_hash($password) {
        $save_pasword = sha1($password);
        return $save_password;
    }
    
    function validate_is_admin(){
        $user_id = $this->session->userdata('user_id');
        
        //maybe better here to check for the existence of the user data
        if(!is_numeric($user_id)) {
           //redirect(base_url());
        }
    }
}