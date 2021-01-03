<?php
class Sepatu extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_sepatu', '',TRUE);
	}
	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('username')){
			$this->view_product();
		}
		else{
			$this->load->view('v_homepage');
		}
	}
	function view_product() {
		$data['sepatu_pria']=$this->m_sepatu->baca_data_sepatu_pria();
		$data['sepatu_wanita']=$this->m_sepatu->baca_data_sepatu_wanita();
		$data['sepatu_anak']=$this->m_sepatu->baca_data_sepatu_anak();
		$this->load->view('welcome_message', $data);
	}
	public function login_page(){
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if(empty($this->session->userdata('username'))) {
			$this->load->view('login_page');
		} else{
			$this->view_product();
		}
	}
	public function login(){
		//load session library
		$this->load->library('session');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->m_sepatu->login($username, $password);

		if($data){
			$this->session->set_userdata('tb_user', $data);
			$this->view_product();
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('username');
		$this->index();
	}
}
?>