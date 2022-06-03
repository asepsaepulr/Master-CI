<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_fakultas extends CI_Model {
	
	public $kode_fakultas = "";
	public $nama_fakultas = "";
	
	public function get_data(){
		$query = "
			SELECT *
			FROM t_fakultas
			ORDER BY kode_fakultas DESC
		";
		return $this->db->query($query)->result();
	}
	
	public function by_id($id){
		$datasrc = $this->db->get_where('t_fakultas', array('kode_fakultas' => $id));
		return $datasrc->num_rows() > 0 ? $datasrc->row() : $this;
	}
	
}
/* End of file Model_contoh.php */
/* Location: ./application/modules/master/models/Model_contoh.php */