<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
		$this->load->library('pagination');
	}
	public function index()
	{
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $this->setting_model->tkt_get('set_pagetitle');
		$data['SEO_descriptiton'] = $this->setting_model->tkt_get('set_pagedescriptiton');
		$data['SEO_keyword'] = $this->setting_model->tkt_get('set_pagekeyword');
		/*_______________need for main menu_________________________________*/
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(3);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(4);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(5);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(6);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(7);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(8);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(9);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(10);
		/*___________________________need for side bar__________________________________*/
		$blogs = $this->blog_model->tkt_get_list(0,0,'DESC','blog_time');
		/*__________________________________end need___________________________________*/
		$data['_varibles']['slides'] = $this->slide_model->tkt_get_list();
		$data['_varibles']['kinhnghiems'] = array();
		$dem=0;
		$kn_totals = 0;
		foreach($blogs as $blog)
		{
			$temp1 = json_decode($blog['blog_cat_ids']);
			if(is_array($temp1) && in_array(5, $temp1))
			{
				if(++$dem<=5)
				{
					$data['_varibles']['kinhnghiems'][] = $blog;
				}
			}
		}
		
		/*________________________________________________________________*/
		$data['_varibles']['tintucs'] = array();
		$dem=0;
		$tt_totals = 0;
		foreach($blogs as $blog)
		{
			$temp2 = json_decode($blog['blog_cat_ids']);
			if(is_array($temp2) && in_array(4, $temp2))
			{
				if(++$dem<=5)
				{
					$data['_varibles']['tintucs'][] = $blog;
				}
			}
		}
		
		// pagination
		$blogsss = $this->blog_model->tkt_get_list(0,0,'DESC','blog_time',4);
		$config['base_url'] = base_url().'/'.'tin-tuc-4-cat.html/page/';
		$config['total_rows'] = count($blogsss);
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$this->pagination->initialize($config);
		$data['_varibles']['tt_pagination'] = $this->pagination->create_links();
		// end pagination
		// pagination
		$blogsss = $this->blog_model->tkt_get_list(0,0,'DESC','blog_time',5);
		$config['base_url'] = base_url().'/'.'kinh-nghiem-5-cat.html/page/';
		$config['total_rows'] = count($blogsss);
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$this->pagination->initialize($config);
		$data['_varibles']['kn_pagination'] = $this->pagination->create_links();
		// end pagination
		/*_________load view______________________________________________*/
		$data['_content'] = 'site/home';
		$this->load->view('layouts/site',$data);
	}
}
