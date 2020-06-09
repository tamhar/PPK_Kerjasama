<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $title = 'Dashboard';

	public function index()
	{   
		$this->load->model('dashboardModel');
		$data ['mou']= $this->dashboardModel->ambilBerkasMOU();
		$data ['moa']= $this->dashboardModel->ambilBerkasMOA();
		$data ['ksdn']= $this->dashboardModel->ambilKSDN();
		$data ['ksln']= $this->dashboardModel->ambilKSLN();
		$data ['ksab']= $this->dashboardModel->ambilKSAB();
		$data ['realisasi']= $this->dashboardModel->ambilRealisasi();
		$data ['chartKS']= $this->dashboardModel->ambilKerjaSama();
		$this->load->template('view_dashboard', $data);
	}

}
