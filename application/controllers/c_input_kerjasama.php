<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_kerjasama extends CI_Controller {

	var $title = 'Input data Kerjasama';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_input_kerjasama');
	}

	public function index(){
		$this->load->template('view_input_kerjasama');
	}


	public function insert_data_kerjasama(){
		
		// $kodekerjasama=$_POST['kodekerjasama'];
		$deskripsi=$_POST['deskripsi'];
		$tanggalmulai=$_POST['tanggalmulai'];
		$tanggalselesai=$_POST['tanggalselesai'];
		$namalembaga=$_POST['namalembaga'];
		$perwakilanlembaga=$_POST['perwakilanlembaga'];
		$uploadberkas=$_POST['uploadberkas'];
		$jenisberkas=$_POST['jenisberkas'];
		$statuskerjasama=$_POST['statuskerjasama'];

		$data_insert = array(
			'kode_kerjasama' => $this->M_app->getLatestid('kode_kerjasama', 'tb_mou_tr_kerjasama1'),
			'deskripsi' => $deskripsi,
			'tanggal_mulai' => $tanggalmulai,
			'tanggal_selesai' => $tanggalselesai,
			'nama_lembaga' => $namalembaga,
			'perwakilan_lembaga' => $perwakilanlembaga,
			'upload_berkas' => $uploadberkas,
			'jenis_berkas' => $jenisberkas,
			'status_kerjasama' => $statuskerjasama
		);

		$res = $this->db->insert('tb_mou_tr_kerjasama1',$data_insert);
		redirect('c_input_kerjasama');
	}

	public function hapus($id){
		$where = array('kode_kerjasama' => $id);
		$this->m_input_kerjasama->delete($where,'tb_mou_tr_kerjasama1');
		redirect('c_data_kerjasama');
	}


	function edit($id){
		$where = array('kode_kerjasama' => $id);
		$data['user'] = $this->db->get_where('tb_mou_tr_kerjasama1', $where)->row();
		$data['id'] = $id;
		$this->load->template('view_input_kerjasama',$data);
	}

	public function update($id){
		
		// $kodekerjasama=$_POST['kodekerjasama'];
		$deskripsi=$_POST['deskripsi'];
		$tanggalmulai=$_POST['tanggalmulai'];
		$tanggalselesai=$_POST['tanggalselesai'];
		$namalembaga=$_POST['namalembaga'];
		$perwakilanlembaga=$_POST['perwakilanlembaga'];
		$uploadberkas=$_POST['uploadberkas'];
		$jenisberkas=$_POST['jenisberkas'];
		$statuskerjasama=$_POST['statuskerjasama'];

		$data_insert = array(
			'kode_kerjasama' => $id,
			'deskripsi' => $deskripsi,
			'tanggal_mulai' => $tanggalmulai,
			'tanggal_selesai' => $tanggalselesai,
			'nama_lembaga' => $namalembaga,
			'perwakilan_lembaga' => $perwakilanlembaga,
			'upload_berkas' => $uploadberkas,
			'jenis_berkas' => $jenisberkas,
			'status_kerjasama' => $statuskerjasama
		);

		$where = array('kode_kerjasama' => $id);

		$res = $this->m_input_kerjasama->update_data($where, $data_insert, 'tb_mou_tr_kerjasama1');
		redirect('c_data_kerjasama');
	}
	


}