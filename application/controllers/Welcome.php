<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('url');

		$this->load->view('view_in');
	}
	public function get_form() 
    {  
		$data = array (
			'name' =>$this->input->post("name"),
			'work' =>$this->input->post("work"),
			'adders'=>$this->input->post("adders"),
			'moo'=>$this->input->post("moo"),
			's'=>$this->input->post("s"),
			'road'=>$this->input->post("road"),
			't'=>$this->input->post("t"),
			'a'=>$this->input->post("a"),
			'prov'=>$this->input->post("prov"),
			'zip'=>$this->input->post("zip"),
			'phone'=>$this->input->post("phone")
		);
		$data['show'] = $data;
		$this->load->view('view_work',$data);
    }
}
