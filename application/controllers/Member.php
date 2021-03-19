<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//cek login
		if ($this->session->userdata('status') != "login")
		{
			$alert=$this->session->set_flashdata('alert', 'Anda Belum Login');
			http_redirect(baseurl());
		}
	}

	public function index()
	{
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();
		$data['buku'] = $this->M_perpus->get_data('buku')->result();

		$data['header'] = 'Katalog Buku';

		$this->load->view('daftarbuku', $data);
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */