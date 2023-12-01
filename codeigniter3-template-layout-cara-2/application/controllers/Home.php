<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged')){
            $url=base_url('login');
            redirect($url);
        }
    }

	public function index(){
        $this->load->view('view-home');
    }
}
