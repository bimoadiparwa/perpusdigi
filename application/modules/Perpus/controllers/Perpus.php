<?php

class Perpus extends MY_Controller{
    function __construct()
    {
		parent::__construct();
		$this->load->model('anggota/M_anggota','ang');
		$this->load->model('buku/M_buku','b');
		$this->load->model('M_perpus','p');
		$this->load->model('penerbit/M_penerbit','pub');
		$this->load->model('penulis/M_penulis','pen');
		$this->load->model('kategori/M_kategori','k');
		$this->load->model('perpus/M_perpus','k');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		
    } 

	function index()
	{
		$data['title'] = 'Perpustakaan Kota Depok';
		$data['content_view'] = 'perpus/home';
		$this->template->template_anggota($data);
	}

	function buku()
	{
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		$config['total_rows'] = $this->b->totalBuku();
        $config['per_page'] = 8;
        $config['uri_segment'] = 3; 
        //mengatur tag
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&#x25B6;';
        $config['prev_link'] = '&#x25C0;';
        //url setiap link
        $config['base_url'] = base_url().'perpus/buku/';
        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);
//        ubah data menjadi tampilan per limit
        $buku = $this->b->lihatbukulimit($config['per_page'],$start)->result(); 
        $data = array(
            'buku' => $buku,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );

		$data['buku'] = $this->b->lihat_buku()->result_array();
		$data['title'] = 'Koleksi Buku';
		$data['content_view'] = 'perpus/buku';
		$this->template->template_anggota($data);
	}
	function keranjang()
	{	
		if($this->session->userdata('status')=='anggotalogin'){
			$buku_id = $this->input->post('buku_id');
			$ang_id = $this->session->userdata('ang_id');
			// echo $kode_buku; die();
		$num = $this->db->get('tmp');
		$cek = $this->p->cek_tmp($buku_id,$ang_id);
	
		if($num->num_rows() < 4 && $cek->num_rows() < 1)
		{
			
			$params = array(
					'buku_id'			=> $this->input->post('buku_id'),
					'ang_id'			=> $this->input->post('ang_id'),
					'pen_id'			=> $this->input->post('pen_id'),
					'kat_id'			=> $this->input->post('kat_id'),
					'penerbit_id'		=> $this->input->post('penerbit_id'),
				);
				$this->p->tambah_item($params,'tmp');
				redirect('perpus/buku');
			
		} else {
		redirect('perpus/lihat_keranjang');
		
		}
		
	} else {
		
		redirect('auth','refresh');
		
	}
		
	}
	function lihat_keranjang()
	{
		$data['sub_title'] = 'Keranjang';
		$data['id_pinjam'] = $this->p->id_pinjam();
		$data['tmp'] = $this->p->item_keranjang()->result_array();
		$data['content_view'] = 'perpus/keranjang';
		$this->template->template_anggota($data);
	}
	function hapus($buku_id)
		{
			$tmp = $this->p->ambil($buku_id);
	
			// cek buku ada atau tidak
			if(isset($tmp['buku_id']))	
			{
				$this->p->hapus($buku_id);
				redirect('perpus/lihat_keranjang');
			}
			else
				show_error('Buku yang ingin dihapus tidak ada.');
		}
		function hapus_semua()
		{
			$this->p->hapus_semua();
			
			redirect('perpus/lihat_keranjang','refresh');
			
		}
		function pinjam()
		{
			
			$buku_id = $this->input->post('buku_id');

			//die(var_dump($buku_id));

			$data = array();
			foreach($buku_id as $k => $key)
			{
				
				$data =  array(
					'buku_id' => $buku_id[$k],
					'id_peminjaman' => $this->input->post('id_peminjaman')[$k],
					'ang_id' => $this->input->post('ang_id')[$k],
					'kat_id' => $this->input->post('kat_id')[$k],
					'pen_id' => $this->input->post('pen_id')[$k],
					'penerbit_id' => $this->input->post('penerbit_id')[$k],
					'tgl_pinjam' => $this->input->post('tgl_pinjam')[$k],
					'tgl_harus_kembali' => $this->input->post('tgl_harus_kembali')[$k]

				);
			
				$this->db->insert('peminjaman',$data);
				
			}
			$this->p->hapus_semua();
			
			redirect('perpus/lihat_keranjang','refresh');
			//$this->db->insert_batch('peminjaman', $data);
			
			//$data = $this->input->post();
			//unset($data['submit']);
			//$this->p->pinjam();
			/*$ang_id = $this->session->userdata('ang_id');
			$buku_id = $this->input->post('buku_id');
			$cek_pinjam = $this->p->cek_pinjam($buku_id,$ang_id);
			$tmp = $this->p->get_tmp()->result();
			if($cek_pinjam->num_rows() < 1 ){

				$params = array(
					'id_peminjaman'  	=> $this->input->post('id_peminjaman'),
					'ang_id'		 	=> $ang_id,
					'buku_id' 			=> $buku_id,
					'kat_id' 		 	=> $this->input->post('kat_id'),
					'pen_id' 		 	=> $this->input->post('pen_id'), 
					'penerbit_id' 		=> $this->input->post('penerbit_id'), 
					'tgl_pinjam' 		=> $this->input->post('tgl_pinjam'), 
					'tgl_harus_kembali' => $this->input->post('tgl_harus_kembali')
				);

				$this->p->pinjam($params);
				$this->p->hapus_semua();
				redirect('perpus/lihat_keranjang');
			}else{
				echo "<script>alert('Gagal')</script>";
				redirect('lihat_keranjang','refresh');		
			}*/
		}
	}

