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
		$this->load->library('tkt_mailer');
		$this->tkt_mailer->addTo('14520979@gm.uit.edu.vn');
		$this->tkt_mailer->setBody("sdhasdf asdf asdf asdf asdf sdf");
		$this->tkt_mailer->setSubject("alksdjfasdfasdfasdf");
		if($this->tkt_mailer->send()) echo 1;
		else echo 0;
	}
}