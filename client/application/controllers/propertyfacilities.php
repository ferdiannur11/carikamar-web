<?php
defined('BASEPATH') or exit('No direct script access allowed');

class propertyfacilities extends CI_Controller
{
	public function index()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'list-property-facilities';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
}
