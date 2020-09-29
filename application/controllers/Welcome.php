<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function contact_show()
	{
		$data = array (
			'email' => $this->input->post('email'),
			'tel' => $this->input->post('tel'),
			'facebook' => $this->input->post('facebook'),
			'line' => $this->input->post('line'),
			'homea' => $this->input->post('homea'),
			'mou' => $this->input->post('mou'),
			'song' => $this->input->post('song'),
			'road' => $this->input->post('road'),
			'tampon' => $this->input->post('tampon'),
			'ampor' => $this->input->post('ampor'),
			'prov' => $this->input->post('prov'),
			'zipcode' => $this->input->post('zipcode')
		);
		$data['show'] = $data;
		$this->load->view('contact_show',$data);
	}
}
