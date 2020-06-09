<?php 
class dashboardModel extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function ambilKSDN(){ //kerjasama dalam negeri
		
		$query = $this->db
				->select('count(a.ID_KERJASAMA) as dalamnegri')
				->from('tb_mou_rf_kerjasama a')
				->join('tb_mou_rf_lembaga b','a.ID_LEMBAGA = b.ID_LEMBAGA','inner')
				->where('(year(TANGGAL_MULAI_KERJASAMA)) = year(curdate()) AND b.negara = "Indonesia"')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilKSLN(){ //kerjasama luar negeri
		
		$query = $this->db
				->select('count(a.ID_KERJASAMA) as luarnegri')
				->from('tb_mou_rf_kerjasama a')
				->join('tb_mou_rf_lembaga b','a.ID_LEMBAGA = b.ID_LEMBAGA','inner')
				->where('(year(TANGGAL_MULAI_KERJASAMA)) = year(curdate()) AND b.negara != "Indonesia"')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilRealisasi(){ //realisasi kerjasama
		
		$query = $this->db
				->select('count(ID_KERJASAMA) as terlaksana')
				->from('tb_mou_rf_kerjasama')
				->where('STATUS_KERJASAMA', 'Sedang Berjalan')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilKSAB(){ //kerjasama akan berakhir
		
		$query = $this->db
				->select('count(ID_KERJASAMA) as berakhir')
				->from('tb_mou_rf_kerjasama')
				->where('(year(TANGGAL_SELESAI_KERJASAMA)) = year(curdate()) AND 
						(month(TANGGAL_SELESAI_KERJASAMA)) >= (month(curdate()) + 2) AND 
						curdate() < TANGGAL_SELESAI_KERJASAMA')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilBerkasMOU(){ //ambil mou
		
		$query = $this->db
				->select('count(ID_BERKAS) as Total')
				->from('tb_mou_tr_berkas')
				->where('JENIS_BERKAS', 'mou')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilBerkasMOA(){ //ambil moa
		
		$query = $this->db
				->select('count(ID_BERKAS) as Total')
				->from('tb_mou_tr_berkas')
				->where('JENIS_BERKAS', 'moa')
				->get()
				->row();	
		return $query;
	}
	
	public function ambilKerjaSama(){ //ambil kerjasama untuk chart
		
		for($a=1; $a<=12; $a++){
		$query[$a] = $this->db
							->select('count(ID_KERJASAMA) as chart')
							->from('tb_mou_rf_kerjasama')
							->where("(year(TANGGAL_MULAI_KERJASAMA)) = year(curdate()) AND 
									 (month(TANGGAL_MULAI_KERJASAMA)) = $a")
							->get()
							->row();	
		}							
		return $query;
	}
}
?>