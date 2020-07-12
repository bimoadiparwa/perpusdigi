<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function cek_login($e, $p){
        //exit(var_dump($e,$p));
        return $this->db->get_where('anggota', array('email' => $e , 'password' => $p ));
    }
		public function ang_id()   {
			$this->db->select('RIGHT(anggota.ang_id,5) as kode', FALSE);
			$this->db->order_by('ang_id','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('anggota');      //cek dulu apakah ada sudah ada kode di tabel.    
			if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
			}
			else {      
			 //jika kode belum ada      
			 $kode = 1;    
			}
			$tgl=date('Y');
			$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
			$kodejadi = "ANG-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
			return $kodejadi;  
	  }
	  function semua_anggota()
	  {
		  return $this->db->get('anggota');
	  }
	  function tambah_anggota($params,$table)
	  {
		$this->db->insert($table,$params);
	}
	 
	function ambil($ang_id)
	{
		return $this->db->get_where('anggota',array('ang_id'=>$ang_id))->row_array();
	}
	
	function hapus($ang_id)
	{
		return $this->db->delete('anggota',array('ang_id'=>$ang_id));
	}
	function edit_data($where,$table)
  {
  	return $this->db->get_where($table,$where)->row_array();
  }
  function update_data($where,$data,$table)
  {
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
}
