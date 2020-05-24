<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_input_kerjasama extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function tampil_data(){
		$query = $this->db->query('SELECT * FROM tb_mou_tr_kerjasama1');
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
}
?>