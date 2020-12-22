<?php if (!defined('BASEPATH')) EXIT ('No Direct Script Access Allowed');

class M_sepatu extends CI_Model{
	
	
	function __construct(){
		parent::__construct();
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



			