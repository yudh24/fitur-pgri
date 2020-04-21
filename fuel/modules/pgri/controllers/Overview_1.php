<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_1 extends CI_Controller {

	function __construct(){
		parent::__construct();		
		//$this->load->model('m_homepage');
    }
    
	public function index()
	{
		//$this->load->view('v_homepage');
		$this->template->load('template','/departement/v_overview_1');
	}
}
