<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}
	public function index()
	{
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $this->setting_model->tkt_get('set_pagetitle');
		$data['SEO_descriptiton'] = $this->setting_model->tkt_get('set_pagedescriptiton');
		$data['SEO_keyword'] = $this->setting_model->tkt_get('set_pagekeyword');
		/*_________load view______________________________________________*/
		$data['_varibles']['slides'] = $this->slide_model->tkt_get_list();
		$data['_content'] = 'site/home';
		$this->load->view('layouts/site',$data);
	}
}
