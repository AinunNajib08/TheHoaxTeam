<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}

	public function index(){
		echo "ini method index pada controller Control";
	}

	public function halo(){
		$this->load->view('view_coba');
	}

}