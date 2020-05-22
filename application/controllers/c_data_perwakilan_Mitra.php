<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_data_perwakilan_Mitra extends CI_Controller {

	var $title = 'Data Perwakilan Mitra';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PerwakilanMitraModel');

		$this->load->helper('url');
	}

	public function index()
	{   
		$result = $this->PerwakilanMitraModel->tampilkanDataMitra();
		$data['result'] = $result;
		$this->load->template('view_data_perwakilan_Mitra', $data);
	}

	public function detailMitra($id)
	{
		$result = $this->PerwakilanMitraModel->detailDataMitra($id);

		$data['mitra'] = $result;

		$this->load->template('view_detail_perwakilan_mitra', $data);
	}


	public function editMitra($id) {
		$result = $this->PerwakilanMitraModel->detailDataMitra($id);

		if ($result[0]["ID_NEGARA"] == "NG057") {
			redirect("http://localhost/avenxo/index.php/c_input_perwakilan_mitra/editnasional/".$id);
		}
		else {
			redirect("http://localhost/avenxo/index.php/c_input_perwakilan_mitra/editinternasional/".$id);
		}
	}

}