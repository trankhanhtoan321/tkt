<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}
	public function index()
	{

	}
	public function detail($id)
	{
		$data['_varibles']['blog'] = $this->blog_model->tkt_get($id);
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $data['_varibles']['blog']['blog_seo_title'];
		$data['SEO_descriptiton'] = $data['_varibles']['blog']['blog_seo_description'];
		$data['SEO_keyword'] = $data['_varibles']['blog']['blog_seo_keyword'];
		$data['_varibles']['blog_news'] = $this->blog_model->tkt_get_list(7,0,'DESC','blog_time');
		$data['_content'] = 'site/blog_detail';
		$this->load->view('layouts/site',$data);
	}
}