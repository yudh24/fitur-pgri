<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	function __construct(){
		parent::__construct();		
		//$this->load->model('m_homepage');
    }
    
	public function index()
	{
		//$this->load->view('v_homepage');
		$this->template->load('template','/admission/v_admission');
	}
}
