<?php

class M_Auth extends CI_model
{
	public function getAllData()
	{
		return $this->db->get('users')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('users', ['id' => $id])->row_array();
	}

	public function is_login()
	{
		$is_login = $this->session->userdata('auth');
		if (!empty($is_login)) {
			return true;
		} else {
			return false;
		}
	}

	public function do_login()
	{
		$post = $this->input->post();
		if (!empty($post)) {
			$username = @$post['username'];
			$password = @$post['password'];
			$user = $this->db->get_where('users', ['username' => $username])->row_array();
			if (!empty($user)) {
				if ($user['password'] == md5($password)) {
					$this->session->set_userdata('auth', $user);
					redirect(base_url());
				} else {
					return 'Password Salah ! ';
				}
			} else {
				return 'Username Tidak Ditemukan !';
			}
		}
	}
}
