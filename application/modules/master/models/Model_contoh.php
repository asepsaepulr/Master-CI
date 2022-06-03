<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contoh extends CI_Model {
	
	public $kolom_ke1 = "";
	public $kolom_ke2 = "";
	
	public function get_data(){
		$query = "
			SELECT *
			FROM nama_tabel
			ORDER BY tabel_id DESC
		";
		return $this->db->query($query)->result();
	}
	
	public function by_id($id){
		$datasrc = $this->db->get_where('nama_tabel', array('tabel_id' => $id));
		return $datasrc->num_rows() > 0 ? $datasrc->row() : $this;
	}
	
}
/* End of file Model_contoh.php */
/* Location: ./application/modules/master/models/Model_contoh.php */