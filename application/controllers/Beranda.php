<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->page->template('site_tpl');
		$this->page->view();
	}
	
}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */