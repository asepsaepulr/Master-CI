<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {
	
	
	function __construct() {
		parent::__construct();
		
		$this->page->use_directory();
	}
	
	
	public function index(){
		echo "hh"; die();
		$tanggal=getdate();
		$tahun=$tanggal["year"];
		
		$this->page->view('site_index');
		
	}
	
}

/* End of file Beranda.php */
/* Location: ./application/modules/Beranda/controllers/Beranda.php */
