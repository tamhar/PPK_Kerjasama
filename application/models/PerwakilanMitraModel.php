<?php 

	/**
	 * 
	 */
	class PerwakilanMitraModel extends CI_Model
	{
		function get_regional($id){
			$query = $this->db->query('SELECT regional FROM tb_mou_rf_lembaga WHERE id_lembaga = "'.$id.'"');
			$jenis = $query->row()->regional;
			return $jenis;
		}

		function insertDataMitra($idperwakilan,$idlembaga,$namalembaga,$nama,$jabatan,$jeniskelamin,$alamat,$kecamatan,$kelurahan,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_PERWAKILAN_LEMBAGA' => $idperwakilan,
				'ID_NEGARA' => $negara,
				'ID_PROVINSI' => $provinsi,
				'ID_LEMBAGA' => $idlembaga,
				'ID_KOTA' => $kota,
				'NAMA' => $nama,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			);

			$query = $this->db->insert('tb_mou_rf_perwakilanlembaga', $data);
			return $query;
		}

		function insertDataMitraInternasional($idperwakilan,$nama,$idlembaga,$namalembaga,$jeniskelamin,$jabatan,$alamat,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_PERWAKILAN_LEMBAGA' => $idperwakilan,
				'ID_NEGARA' => $negara,
				'ID_PROVINSI' => $provinsi,
				'ID_LEMBAGA' => $idlembaga,
				'ID_KOTA' => $kota,
				'NAMA' => $nama,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			);

			$query = $this->db->insert('tb_mou_rf_perwakilanlembaga', $data);
			return $query;
		}

		function editDataMitraNasional($idperwakilan,$idlembaga,$namalembaga,$nama,$jabatan,$jeniskelamin,$alamat,$kecamatan,$kelurahan,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_NEGARA' => $negara,
				'ID_PROVINSI' => $provinsi,
				'ID_KOTA' => $kota,
				'NAMA' => $nama,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			);

			$this->db->where('ID_PERWAKILAN_LEMBAGA', $idperwakilan);
			$query = $this->db->update('tb_mou_rf_perwakilanlembaga', $data);
			return $query;
		}

		public function editDataMitraInternasional($idperwakilan,$nama,$idlembaga,$namalembaga,$jeniskelamin,$jabatan,$alamat,$provinsi,$kota,$negara,$kodenegara,$kodepos,$notelepon,$email)
		{
			$data = array(
				'ID_NEGARA' => $negara,
				'ID_PROVINSI' => $provinsi,
				'ID_KOTA' => $kota,
				'NAMA' => $nama,
				'NAMA_PERWAKILAN_LEMBAGA' => $namalembaga,
				'JENIS_KELAMIN_PERWAKILAN_LEMBAGA' => $jeniskelamin,
				'JABATAN' => $jabatan,
				'ALAMAT_PERWAKILAN_LEMBAGA' => "$alamat", 
				'KODEPOS_PERWAKILAN_LEMBAGA' => $kodepos,
				'NOTELP_PERWAKILAN_LEMBAGA' => "$kodenegara$notelepon",
				'EMAIL_PERWAKILAN_LEMBAGA' => $email,
			); 

			$this->db->where('ID_PERWAKILAN_LEMBAGA', $idperwakilan);
			$query = $this->db->update("tb_mou_rf_perwakilanlembaga", $data);

			return $query;
		}

		function tampilkanDataMitra() 
		{
			$query = $this->db->query("SELECT * FROM tb_mou_rf_perwakilanlembaga a JOIN tb_mou_rf_negara b ON a.ID_NEGARA = b.ID_NEGARA JOIN tb_mou_rf_provinsi c ON a.ID_PROVINSI = c.ID_PROVINSI JOIN tb_mou_rf_kota d ON a.ID_KOTA = d.ID_KOTA " );
			
			return $query->result_array();
		}

		function detailDataMitra($id)
		{
			$query = $this->db->query('SELECT *, e.NAMA_LEMBAGA as namalembaga FROM tb_mou_rf_perwakilanlembaga a JOIN tb_mou_rf_negara b ON a.ID_NEGARA = b.ID_NEGARA JOIN tb_mou_rf_provinsi c ON a.ID_PROVINSI = c.ID_PROVINSI JOIN tb_mou_rf_kota d ON a.ID_KOTA = d.ID_KOTA JOIN tb_mou_rf_lembaga e ON a.ID_LEMBAGA = e.ID_LEMBAGA WHERE a.ID_PERWAKILAN_LEMBAGA = "'.$id.'"');
			return $query->result_array();
		}

		function detail_data($id){
		$query = $this->db->query('SELECT *, e.NAMA_LEMBAGA as namalembaga FROM tb_mou_rf_perwakilanlembaga a JOIN tb_mou_rf_negara b ON a.ID_NEGARA = b.ID_NEGARA JOIN tb_mou_rf_provinsi c ON a.ID_PROVINSI = c.ID_PROVINSI JOIN tb_mou_rf_kota d ON a.ID_KOTA = d.ID_KOTA JOIN tb_mou_rf_lembaga e ON a.ID_LEMBAGA = e.ID_LEMBAGA WHERE a.ID_PERWAKILAN_LEMBAGA = "'.$id.'"');
		return $query->result();
		}
	}

	?>