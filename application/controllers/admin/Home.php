<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
		$data = array(
            'judul_halaman' => "Dashboard | Website"
        );
		$this->template->load('template_admin','admin/dashboard',$data);
	}
}
