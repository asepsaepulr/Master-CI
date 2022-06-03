<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {
	
	
	function __construct() {
		parent::__construct();
		
		$this->page->use_directory();
	}
	
	
	public function index(){
		$tanggal=getdate();
		$tahun=$tanggal["year"];
		
		$this->page->view('site_index', array('notif'=> $notif));
		
	}
	
}

/* End of file Site.php */
/* Location: ./application/modules/Beranda/controllers/Site.php */
