<?php
class M_sepatu extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password){
		$query = $this->db->get_where('tb_user', array('username'=>$username, 'password'=>$password));
		return $query->row_array();
	}

	// fungsi untuk aksi menampilkan semua data	
	function baca_data(){
		return $this->db->query("SELECT * FROM tb_produk");
	}
	function baca_data_sepatu_pria(){
		return $this->db->query("SELECT * FROM tb_produk WHERE Jenis = 'Sepatu Pria'");
	}
	function baca_data_sepatu_wanita(){
		return $this->db->query("SELECT * FROM tb_produk WHERE Jenis = 'Sepatu Wanita'");
	}
	function baca_data_sepatu_anak(){
			return $this->db->query("SELECT * FROM tb_produk WHERE Jenis = 'Sepatu Anak'");
	}
}
?>


			