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
		$data['_varibles'] = NULL;
		$data['_content'] = NULL;
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
		$data['_varibles']['newblogs'] = $this->blog_model->tkt_get_list(6,0,'DESC','blog_time');
		$data['_varibles']['popularblogs'] = $this->blog_model->tkt_get_list(6,0,'DESC','blog_views');
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
				if(++$dem<=5) $data['_varibles']['kinhnghiems'][] = $blog;
				$kn_totals++;
			}
		}
		$config_pagination['base_url'] = '/kinh-nghiem-5-cat.html/page';
		$config_pagination['total_rows'] = $kn_totals;
		$config_pagination['per_page'] = 1;
		$this->pagination->initialize($config_pagination);
		$data['_varibles']['kn_pagination'] = $this->pagination->create_links();
		/*________________________________________________________________*/
		$data['_varibles']['tintucs'] = array();
		$dem=0;
		$tt_totals = 0;
		foreach($blogs as $blog)
		{
			$temp2 = json_decode($blog['blog_cat_ids']);
			if(is_array($temp2) && in_array(4, $temp2))
			{
				if(++$dem<=5) $data['_varibles']['tintucs'][] = $blog;
				$tt_totals++;
			}
		}
		$config_pagination['base_url'] = '/tin-tuc-4-cat.html/page';
		$config_pagination['total_rows'] = $tt_totals;
		$config_pagination['per_page'] = 1;
		$this->pagination->initialize($config_pagination);
		$data['_varibles']['tt_pagination'] = $this->pagination->create_links();
		$data['_varibles']['ttt_pagination'] = $this->pagination->create_links();
		/*_________load view______________________________________________*/
		$data['_content'] = 'site/home';
		$this->load->view('layouts/site',$data);
	}
}
