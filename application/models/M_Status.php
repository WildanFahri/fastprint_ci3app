<?php

class M_Status extends CI_model
{
	public function getAllData()
	{
		return $this->db->get('status')->result_array();
	}

	public function store()
	{
		$data = [
			"no" => $this->input->post('no'),
			"nama_produk" => $this->input->post('namaproduk', true),
			"harga" => $this->input->post('harga', true),
			"kategori_id" => $this->input->post('kategori', true),
			"status_id" => $this->input->post('status', true),
		];

		$this->db->insert('produk', $data);
	}
}
