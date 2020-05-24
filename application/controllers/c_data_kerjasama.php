<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_kerjasama extends CI_Controller {

	var $title = 'Data Kerjasama';

	public function __construct(){
		parent::__construct();
		$this->load->model('m_input_kerjasama');
	}

	public function index()
	{   
		$hasil = $this->m_input_kerjasama->tampil_data();
		$this->load->template('view_data_kerjasama',array('data'=>$hasil));
	}

	public function preview($id)
	{
		$where = array('kode_kerjasama' => $id);
		$data['user'] = $this->db->get_where('tb_mou_tr_kerjasama1', $where)->row();
		$data['id'] = $id;
		$this->load->template('view_detail_kerjasama',$data);
	}
	

	function delete($id){
		$where = array('id' => $id);
		$this->m_input_kerjasama->hapus_data($where,'user');
		redirect('c_data_kerjasama');
	

	}

}