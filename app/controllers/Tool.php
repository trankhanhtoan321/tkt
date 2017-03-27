<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('userlogin'))
			redirect('/login','refresh');
	}
	public function index()
	{
		$data = array('host'=>'dichvuketoantainha.net');
		$this->load->library('tkt_webclient',$data);
	}
}