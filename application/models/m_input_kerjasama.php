<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_input_kerjasama extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function tampil_data(){
		$query = $this->db->query('SELECT a.ID_KERJASAMA, a.DESKRIPSI_KERJASAMA, a.TANGGAL_MULAI_KERJASAMA, a.TANGGAL_SELESAI_KERJASAMA, b.NAMA_LEMBAGA,
		c.NAMA_PERWAKILAN_LEMBAGA, a.STATUS_KERJASAMA FROM tb_mou_rf_kerjasama a join tb_mou_rf_lembaga b on a.ID_LEMBAGA = b.ID_LEMBAGA join tb_mou_rf_perwakilanlembaga c on b.ID_LEMBAGA = c.ID_LEMBAGA');
		return $query->result_array();
	}
	
	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function getperwakilan($namalembaga){
			$query = $this->db->query('SELECT c.id_perwakilan_lembaga, c.nama_perwakilan_lembaga FROM tb_mou_rf_perwakilanlembaga c JOIN tb_mou_rf_lembaga b ON c.id_lembaga=b.id_lembaga WHERE b.id_lembaga = "'.$namalembaga.'" ORDER BY c.nama_perwakilan_lembaga');
			return $query->result();
		}
		function getlembaga(){
		$query = $this->db->query('SELECT id_lembaga, nama_lembaga FROM tb_mou_rf_lembaga ORDER BY id_lembaga');
		return $query->result();
	}
}
?>