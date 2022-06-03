<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends MX_Controller {
	
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->model('model_fakultas');	
	}

	public function index() {		
		$this->page->view('fakultas_index', array(
			'add'			=> $this->page->base_url('/add'),
			'grid'			=> $this->model_fakultas->get_data(),
		));
	}
	
	private function form($action = 'insert', $id = ''){
		$this->page->view('fakultas_form', array (
			'back'			=> $this->agent->referrer(),
			'action'		=> $this->page->base_url("/{$action}/{$id}"),
			'fakultas'		=> $this->model_fakultas->by_id($id),
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
			'kode_fakultas' => $this->input->post('input_kode_fakultas'),
			'nama_fakultas' => $this->input->post('input_nama_fakultas'),
		);
		$this->db->insert('t_fakultas', $data);
		
		redirect($this->page->base_url());
	}
	
	public function update($id){
		$data = array(
			'kode_fakultas' => $this->input->post('input_kode_fakultas'),
			'nama_fakultas' => $this->input->post('input_nama_fakultas'),			
		);
		$this->db->where('kode_fakultas', $id);
		$this->db->update('t_fakultas', $data);
		
		redirect($this->page->base_url());
	}
	
	public function delete($id){
		$this->db->delete('t_fakultas', array('kode_fakultas' => $id));
		redirect($this->agent->referrer());
	}
}

/* End of file Contoh.php */
/* Location: ./application/modules/master/controllers/Contoh.php */