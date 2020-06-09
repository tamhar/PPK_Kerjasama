<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_kerjasama extends CI_Controller {

	var $title = 'Data Kerjasama';

	public function __construct(){
		parent::__construct();
		$this->load->model('m_input_kerjasama');
	}

	public function index()
	{   
		$hasil['kerjasama'] = $this->m_input_kerjasama->tampil_data();
		$this->load->template('view_data_kerjasama',$hasil);
	}

	public function preview($id)
	{
		$data ['hasil'] = $this->db->query("SELECT a.ID_KERJASAMA, a.DESKRIPSI_KERJASAMA, a.TANGGAL_MULAI_KERJASAMA, a.TANGGAL_SELESAI_KERJASAMA, b.NAMA_LEMBAGA,
		c.NAMA_PERWAKILAN_LEMBAGA, a.STATUS_KERJASAMA, b.ID_LEMBAGA, b.ALAMAT_LEMBAGA, b.REGIONAL, b.NEGARA, b.KODEPOS_LEMBAGA, b.NOTELP_LEMBAGA, b.EMAIL_LEMBAGA, c.JENIS_KELAMIN_PERWAKILAN_LEMBAGA, c.JABATAN, c.ALAMAT_PERWAKILAN_LEMBAGA, c.KODEPOS_PERWAKILAN_LEMBAGA, c.NOTELP_PERWAKILAN_LEMBAGA, c.EMAIL_PERWAKILAN_LEMBAGA FROM tb_mou_rf_kerjasama a join tb_mou_rf_lembaga b on a.ID_LEMBAGA = b.ID_LEMBAGA join tb_mou_rf_perwakilanlembaga c on b.ID_LEMBAGA = c.ID_LEMBAGA join tb_mou_tr_berkas d on a.ID_KERJASAMA = d.ID_KERJASAMA where a.ID_KERJASAMA = '".$id. "'")->row();

		// $data ['berkas'] = null;
		// $getmoa=$this->db->query("SELECT a.JENIS_BERKAS FROM tb_mou_tr_berkas a join tb_mou_rf_kerjasama b on a.ID_KERJASAMA = b.ID_KERJASAMA where a.ID_KERJASAMA = '".$id. "' AND a.JENIS_BERKAS = 'MOA'");
		// if ($getmoa->num_rows() > 0) {
		// 	return $data['berkas'] = $getmoa->row();
		// } else {
		// 	return $data['berkas'] = $this->db->query("SELECT a.NAMA_BERKAS, a.JENIS_BERKAS FROM tb_mou_tr_berkas a join tb_mou_rf_kerjasama b on a.ID_KERJASAMA = b.ID_KERJASAMA where a.ID_KERJASAMA = '".$id. "' AND a.JENIS_BERKAS = 'MOU'")->row();
		// }

		$data['id'] = $id;
		$this->load->template('view_detail_kerjasama',$data);
	}
	

	// function delete($id){
	// 	$where = array('id' => $id);
	// 	$this->m_input_kerjasama->hapus_data($where,'user');
	// 	redirect('c_data_kerjasama');
	

	}

