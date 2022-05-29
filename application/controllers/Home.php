<?php
class Home extends CI_Controller
{
	// View Home
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index');
		$this->load->view('templates/footer');

		$this->load->helper('url');
	}
	public function mahasiswa()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/mahasiswa');
		$this->load->view('templates/footer');

		$this->load->helper('url');
	}
	public function tambah_mahasiswa()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/tambah_mahasiswa');
		$this->load->view('templates/footer');

		$this->load->helper('url');
	}

}
?>
