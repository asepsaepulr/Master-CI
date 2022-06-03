<?php

require APPPATH . '/libraries/REST_Controller.php';

class Vendor extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
		$this->load->model('api_mod');
    }

    // show data vendor
    function index_get() {
        $vendor = $this->db->get('t_vendor')->result();
        $this->response($vendor, 200);
    }
	
	//tambah data vendor
    function index_post() {
        $data = array(
                    'nama_vendor'       => $this->post('nama_vendor'),
                    'alamat_vendor'		=> $this->post('alamat_vendor'),
                    'kota'   			=> $this->post('kota'),
                    'no_telp'   		=> $this->post('phone'),
                    'email_vendor'   	=> $this->post('email'),
                    'cp_vendor'   		=> $this->post('nama_direktur'),
                    'cp_jabatan'   		=> "Direktur",
                    'id_perusahaan'     => $this->post('id_perusahaan'));
        $insert = $this->db->insert('t_vendor', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
     }
 
     // update data vendor
     function index_put() {
        $id_perusahaan= $this->put('id_perusahaan');
        $data = array(
                    'nama_vendor'       => $this->post('nama_vendor'),
                    'alamat_vendor'		=> $this->post('alamat_vendor'),
                    'kota'   			=> $this->post('kota'),
                    'no_telp'   		=> $this->post('phone'),
                    'email_vendor'   	=> $this->post('email'),
                    'cp_vendor'   		=> $this->post('nama_direktur'));
        $this->db->where('id_perusahaan', $id_perusahaan);
        $update = $this->db->update('t_vendor', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
     }
	
	// show data minat
    function minat_get() {
        $vendor = $this->db->get('t_vendor_minat')->result();
        $this->response($vendor, 200);
    }	
	//tambah data vendor
    function minat_post() {
		$idper=$this->post('id_perusahaan');
		$idvendor = $this->api_mod->get_idvendor($idper);
        $data = array(
                    'id_vendor'       	=> $idvendor,
					'id_bidus'       	=> $this->post('id_bidus'),
                    'id_perusahaan'     => $this->post('id_perusahaan'));
        $insert = $this->db->insert('t_vendor_minat', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	//tambah data user vendor
    function user_post() {
		$idper=$this->post('id_perusahaan');
		$roles_user=16;
		$idvendor = $this->api_mod->get_idvendor($idper);
        $data = array(
                    'id_vendor'       	=> $idvendor,
					'username'       	=> $this->post('username'),
					'email'       	=> $this->post('email'),
					'roles'       	=> $roles_user,
                    'password'     => md5($this->post('password')));
        $insert = $this->db->insert('t_users', $data);
		if ($insert) {
            $this->response($data, 200);
		} else {
            $this->response(array('status' => 'fail', 502));
        }
     }
	 
	 //edit data user vendor
    function user_put() {
		$idper=$this->post('id_perusahaan');
		$data = array(
                    'username'       	=> $this->post('username'),
					'email'       	=> $this->post('email'),
		            'password'     => md5($this->post('password')));
        $this->db->where('id_perusahaan', $id_perusahaan);
        $update = $this->db->update('t_vendor', $data);
		if ($update) {
            $this->response($data, 200);
		} else {
            $this->response(array('status' => 'fail', 502));
        }
     }
}