<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index(){
		$this->page->view();
	}
	
}

/* End of file dasbor.php */
/* Location: ./application/controllers/dasbor.php */