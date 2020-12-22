<?php
class Sepatu extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_sepatu', '',TRUE);
	}

	function index() {
		$data['sepatu_pria']=$this->m_sepatu->baca_data_sepatu_pria();
		$data['sepatu_wanita']=$this->m_sepatu->baca_data_sepatu_wanita();
		$data['sepatu_anak']=$this->m_sepatu->baca_data_sepatu_anak();
		$this->load->view('welcome_message', $data);
	}	
}
?>