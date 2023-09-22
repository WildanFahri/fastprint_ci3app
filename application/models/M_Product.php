<?php

class M_Product extends CI_model
{
	public function getAllData()
	{
		$this->db->order_by('id_produk', 'ASC');
		$this->db->join('satuan', 'produk.kategori_id=satuan.id_satuan');
		$this->db->join('status', 'produk.status_id=status.id_status');
		return $this->db->get('produk')->result_array();
	}

	public function getData()
	{
		$this->db->where('status_id', 1);
		$this->db->join('satuan', 'produk.kategori_id=satuan.id_satuan');
		$this->db->join('status', 'produk.status_id=status.id_status');
		return $this->db->get('produk')->result_array();
	}

	public function hapusKategori($id)
	{
		$this->db->where('kategori_id', $id);
		return $this->db->get('produk')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
	}

	public function getDataByIdUsr($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->where('status_id', 1);
		$this->db->join('satuan', 'produk.kategori_id=satuan.id_satuan');
		$this->db->join('status', 'produk.status_id=status.id_status');
		return $this->db->get('produk')->row_array();
	}

	public function store()
	{
		$data = [
			// "no" => $this->input->post('no', true),
			"nama_produk" => $this->input->post('namaproduk', true),
			"harga" => $this->input->post('harga', true),
			"kategori_id" => $this->input->post('kategori', true),
			"status_id" => $this->input->post('status', true),
		];
		// var_dump($data);
		$this->db->insert('produk', $data);
	}

	public function update()
	{
		$data = [
			// "no" => $this->input->post('no', true),
			"nama_produk" => $this->input->post('namaproduk', true),
			"harga" => $this->input->post('harga', true),
			"kategori_id" => $this->input->post('kategori', true),
			"status_id" => $this->input->post('status', true),
		];

		$this->db->where('id_produk', $this->input->post('id', true));
		$this->db->update('produk', $data);
	}


	public function destroy($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}
