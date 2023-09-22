<?php

class C_Siswa extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Siswa');
		$this->load->model('M_Auth');
		if (!$this->M_Auth->is_login()) {
			redirect('C_Auth/login');
		}
	}
	public function index()
	{
		$data['title'] = 'Halaman Siswa';
		$data['siswa'] = $this->M_Siswa->getAllData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Siswa/index', $data);
		$this->load->view('Templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Form Tambah Siswa';
		$data['siswa'] = $this->M_Siswa->getAllData();
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Siswa/create', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Siswa->store();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('C_Siswa');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Form Edit Siswa';
		$data['siswa'] = $this->M_Siswa->getDataById($id);
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Siswa/edit', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Siswa->update();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('C_Siswa');
		}
	}

	public function delete($id)
	{
		$this->M_Siswa->destroy($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('C_Siswa');
	}
}
