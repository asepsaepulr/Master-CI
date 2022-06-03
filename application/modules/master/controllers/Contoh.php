<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends MX_Controller {
	
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->model('model_contoh');	
	}

	public function index() {		
		$this->page->view('contoh_index', array(
			'add'			=> $this->page->base_url('/add'),
			'grid'			=> $this->model_contoh->get_data(),
		));
	}
	
	private function form($action = 'insert', $id = ''){
		$this->page->view('contoh_form', array (
			'back'			=> $this->agent->referrer(),
			'action'		=> $this->page->base_url("/{$action}/{$id}"),
			'contoh'		=> $this->model_contoh->by_id($id),
		));
	}
	
	public function add(){
		$this->form();
	}
	
	public function edit($id){
		$this->form('update', $id);
	}
	
	public function insert(){
		$data = array(
			'kolom_ke1' => $this->input->post('input_kolom_1'),
			'kolom_ke2' => $this->input->post('input_kolom_2'),
		);
		$this->db->insert('nama_tabel', $data);
		
		redirect($this->page->base_url());
	}
	
	public function update($id){
		$data = array(
			'kolom_ke1' => $this->input->post('input_kolom_1'),
			'kolom_ke2' => $this->input->post('input_kolom_2'),			
		);
		$this->db->where('tabel_id', $id);
		$this->db->update('nama_tabel', $data);
		
		redirect($this->page->base_url());
	}
	
	public function delete($id){
		$this->db->delete('nama_tabel', array('tabel_id' => $id));
		redirect($this->agent->referrer());
	}
}

/* End of file Contoh.php */
/* Location: ./application/modules/master/controllers/Contoh.php */