<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
		$this->load->model('blog_model');
		$this->load->helper('file');
		$this->load->model('course_model');
		$this->load->model('student_comment_model');
	}
	public function index()
	{
		$data['SEO_title'] = $this->setting_model->tkt_get('set_pagetitle');
		$data['SEO_descriptiton'] = $this->setting_model->tkt_get('set_pagedescriptiton');
		$data['SEO_keyword'] = $this->setting_model->tkt_get('set_pagekeyword');
		/*----------------------------------------------------------------*/
		$data['_varibles']['hinh_anh_trai_nghiem_s']=get_filenames('uploads/images/hinh_anh_trai_nghiem/');
		$data['_varibles']['slides'] = $this->slide_model->tkt_get_list();
		$data['_varibles']['tintucs'] = $this->blog_model->tkt_get_list(5,0,'DESC','blog_time',9);
		$data['_varibles']['courses'] = $this->course_model->tkt_get_list(0,0,'ASC','kh_ngaykhaigiang');
		$data['_varibles']['cam_nhan_hoc_vien_s'] = $this->student_comment_model->tkt_get_list();
		$data['_content'] = 'site/home';
		/*----------------------------------------------------------------*/
		$this->load->view('layouts/site',$data);
	}

	public function thu_vien_hinh_anh()
	{
		$data['SEO_title'] = $this->setting_model->tkt_get('set_pagetitle');
		$data['SEO_descriptiton'] = $this->setting_model->tkt_get('set_pagedescriptiton');
		$data['SEO_keyword'] = $this->setting_model->tkt_get('set_pagekeyword');
		/*----------------------------------------------------------------*/
		$data['_content'] = 'site/thu_vien_hinh_anh';
		$data['_varibles'] = NULL;
		/*----------------------------------------------------------------*/
		$this->load->view('layouts/site',$data);
	}
}
