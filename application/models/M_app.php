<?php 
class M_app extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function getLatestid($key, $table) {
	  $this->db->select_max($key);
	  $query = $this->db->get($table);
	  $result = $query->row_array();

	  return $result[$key] + 1;
	}

	function getKodeBerkasmou($key, $table) {

	  	$this->db->select('RIGHT(tb_mou_tr_berkas.ID_BERKAS,4) as kode', FALSE);
		$this->db->order_by('ID_BERKAS','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_tr_berkas');      //cek dulu apakah ada sudah ada kode di tabel.
		  $data = $query->row();      
		  $kode = intval($data->kode);

		  if(($query->num_rows() > 0) ){      
		   //jika kode ternyata sudah ada.      
		  	//$data = $query->row();      
		  	//$kode = intval($data->kode) + 1;
		  	$kode += 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "000", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "U".$kodemax;    // hasilnya U001 dst.
		  return $kodejadi;
	}

	function getKodeBerkasmoa($key, $table) {
		$this->db->select('RIGHT(tb_mou_tr_berkas.ID_BERKAS,4) as kode', FALSE);
		$this->db->order_by('ID_BERKAS','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('tb_mou_tr_berkas');      //cek dulu apakah ada sudah ada kode di tabel.
		  $data = $query->row();      
		  $kode = intval($data->kode);

		  if(($query->num_rows() > 0) ){      
		   //jika kode ternyata sudah ada.      
		  	//$data = $query->row();      
		  	//$kode = intval($data->kode) + 1;
		  	$kode += 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "000", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0 (100($kode))
		  $kodejadi = "A".$kodemax;    // hasilnya U001 dst.
		  return $kodejadi;
	}
}
?>