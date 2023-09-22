<?php

class M_Siswa extends CI_model
{
	public function getAllData()
	{
		return $this->db->get('siswa')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('siswa', ['id' => $id])->row_array();
	}


	public function store()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"telepon" => $this->input->post('telepon', true),
			"email" => $this->input->post('email', true),
		];
		// var_dump($data);
		$this->db->insert('siswa', $data);
	}

	public function update()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nis" => $this->input->post('nis', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"telepon" => $this->input->post('telepon', true),
			"email" => $this->input->post('email', true),
		];

		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('siswa', $data);
	}


	public function destroy($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');
	}
}
