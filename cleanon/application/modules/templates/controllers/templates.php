<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller{
    
    //edna kolonka e templeita za saita s hedara otgore i futera otdolu
    //Data ti kazva koq stranica izska4a pod hedara
    function main_frame($data) {
        
        $this->load->model('mod_templates');
        $data['query'] = $this->mod_templates->get_webpages();
        
        $this->load->view('main_frame', $data);
    }
    
    function two_col($data) {
        $this->load->view('two_col', $data);
    }
    
    function admin($data) {
        $this->load->view('admin', $data);
    }
    
    function login_page($data) {
        $this->load->view('login_page', $data);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

