<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

    function __construct() {

        parent::__construct();
    }

    function home(){
        echo 'Welcome to the Dashboard!';
    }
}