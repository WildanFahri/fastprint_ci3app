<?php

class M_Category extends CI_model
{
	public function getAllData()
	{
		return $this->db->get('satuan')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('satuan', ['id_satuan' => $id])->row_array();
	}


	public function store()
	{
		$data = [
			"nama_satuan" => $this->input->post('namakategori', true),
		];
		// var_dump($data);
		$this->db->insert('satuan', $data);
	}

	public function update()
	{
		$data = [
			"nama_satuan" => $this->input->post('namakategori', true),
		];

		$this->db->where('id_satuan', $this->input->post('id', true));
		$this->db->update('satuan', $data);
	}


	public function destroy($id)
	{
		$this->db->where('id_satuan', $id);
		$this->db->delete('satuan');
	}
}
