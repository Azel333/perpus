<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login")
		{
			$alert = $this->session->set_flashdata('alert','Anda belum Login');
			redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->view('desain');
		$this->load->view('toplayout');
		$this->load->view('detail_buku',$data);
	}

	public function katalog_detail()
	{
		$id = $this->uri->segment(3);
		$buku = $this->db->query("select*from buku b, kategori k where b.id_kategori=k.id_kategori and b.id_buku='$id'")->result(); 
		foreach ($buku as $fields)
		{
			$data['judul'] = $fields->judul_buku;
			$data['pengarang'] = $fields->pengarang;
			$data['penerbit'] = $fields->penerbit;
			$data['kategori'] = $fields->nama_kategori;
			$data['tahun'] = $fields->thn_terbit;
			$data['isbn'] = $fields->isbn;
			$data['gambar'] = $fields->gambar;
			$data['id'] = $id;
		}
		$this->load->view('desain');
		$this->load->view('toplayout');
		$this->load->view('detail_buku', $data);
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */