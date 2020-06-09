<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_kerjasama extends CI_Controller {

	var $title = 'Input data Kerjasama';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_input_kerjasama');
	}

	public function index(){
		
		$data['lembaga']= $this->m_input_kerjasama->getlembaga();
		$this->load->template('view_input_kerjasama', $data);
	}


	public function insert_data_kerjasama(){

		$id_kerjasama=$this->M_app->getLatestid('id_kerjasama', 'tb_mou_rf_kerjasama');
		$id_kodeberkasmou=$this->M_app->getKodeBerkasmou('id_berkas', 'tb_mou_tr_berkas');
		$id_kodeberkasmoa=$this->M_app->getKodeBerkasmoa('id_berkas', 'tb_mou_tr_berkas');
		$deskripsi_kerjasama=$this->input->post('deskripsi_kerjasama');
		$tanggal_mulai_kerjasama=$this->input->post('tanggal_mulai_kerjasama');
		$tanggal_selesai_kerjasama=$this->input->post('tanggal_selesai_kerjasama');
		$id_lembaga=$this->input->post('id_lembaga');
		$nama_berkas=$this->input->post('nama_berkas');
		$berkas_mou=$this->input->post('berkas_mou');
		// $berkas_moa=$this->input->post('berkas_moa');
		$id_berkas_mou=$this->input->post('id_berkas_mou');
		$id_berkas_moa=$this->input->post('id_berkas_moa');
		$statuskerjasama=$this->input->post('statuskerjasama');

		$data_insert = array(
			'id_kerjasama' => $id_kerjasama,
			'id_lembaga' => $id_lembaga,
			'tanggal_mulai_kerjasama' => $tanggal_mulai_kerjasama,
			'tanggal_selesai_kerjasama' => $tanggal_selesai_kerjasama,
			'deskripsi_kerjasama' => $deskripsi_kerjasama,
			'status_kerjasama' => $statuskerjasama
		);

		$data_insertmou = array(
			'nama_berkas' => $berkas_mou,
			'jenis_berkas' => "MOU",
			'id_berkas' => $id_kodeberkasmou,
			'id_kerjasama' => $id_kerjasama

		);
			
		$this->db->insert('tb_mou_rf_kerjasama',$data_insert);
		$this->db->insert('tb_mou_tr_berkas',$data_insertmou);
		
		redirect('c_input_kerjasama');
	}

	// public function hapus($id){
	// 	$where = array('id_kerjasama' => $id);
	// 	$this->m_input_kerjasama->delete($where,'tb_mou_rf_kerjasama1');
	// 	redirect('c_data_kerjasama');
	// }


	// function edit($id){
	// 	$where = array('id_kerjasama' => $id);
	// 	$data['user'] = $this->db->get_where('tb_mou_rf_kerjasama', $where)->row();
	// 	$data['id'] = $id;
	// 	$this->load->template('view_input_kerjasama',$data);
	// }

// 	public function update($id){
		
// 		// $id_kerjasama=$this->input->post['id_kerjasama'];
// 		$deskripsi_kerjasama=$this->input->post('deskripsi_kerjasama');
// 		$tanggal_mulai_kerjasama=$this->input->post('tanggal_mulai_kerjasama');
// 		$tanggal_selesai_kerjasama=$this->input->post('tanggal_selesai_kerjasama');
// 		$id_lembaga=$this->input->post('id_lembaga');
// 		$nama_berkas=$this->input->post('nama_berkas');
// 		$statuskerjasama=$this->input->post('statuskerjasama');

// 		$data_insert = array(
			
// 			'id_lembaga' => $id_lembaga,
// 			'tanggal_mulai_kerjasama' => $tanggal_mulai_kerjasama,
// 			'tanggal_selesai_kerjasama' => $tanggal_selesai_kerjasama,
// 			'deskripsi_kerjasama' => $deskripsi_kerjasama,
// 			'perwakilan_lembaga' => $perwakilan_lembaga,
// 			'status_kerjasama' => $statuskerjasama
// 		);
// 		$data_insertmoa = array(
// 			'nama_berkas' => $berkas_moa,
// 			'jenis_berkas' => "MOA",
// 			'id_berkas' => $id_kodeberkasmoa,
// 			'id_kerjasama' => $id_kerjasama
// );

// 		$where = array('id_kerjasama' => $id_kerjasama);

// 		$res = $this->m_input_kerjasama->update_data($where, $data_insert, 'tb_mou_rf_kerjasama');
// 		redirect('c_data_kerjasama');


// 	}
	
  function getperwakilan() {
        $this->load->model('m_input_kerjasama');

        $namalembaga = $this->input->post('namalembaga', true);
        $perwakilanlembaga = $this->m_input_kerjasama->getperwakilan($namalembaga);
        echo json_encode($perwakilanlembaga);
    }

}