<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('blogcategory_model');
		$this->load->library('pagination');
	}
	public function index($id,$page=0)
	{
		$data['_varibles']['blogcat'] = $this->blogcategory_model->tkt_get($id);
		$data['_varibles']['blogs'] = $this->blog_model->tkt_get_list(10,$page,'DESC','blog_time',$id);
		/*pagination*/
		$config['base_url'] = base_url().'/'.rewrite($data['_varibles']['blogcat']['blogcat_name']).'-'.$id.'-cat.html/page/';
		$config['total_rows'] = count($this->blog_model->tkt_get_list(0,0,'DESC','blog_time',$id));
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$this->pagination->initialize($config);
		$data['_varibles']['pagination'] = $this->pagination->create_links();
		/*end pagination*/
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $data['_varibles']['blogcat']['blogcat_seo_title'];
		$data['SEO_descriptiton'] = $data['_varibles']['blogcat']['blogcat_seo_description'];
		$data['SEO_keyword'] = $data['_varibles']['blogcat']['blogcat_seo_keyword'];
		$data['_varibles']['blog_news'] = $this->blog_model->tkt_get_list(7,0,'DESC','blog_time');
		$data['_content'] = 'site/blog_cat';
		$this->load->view('layouts/site',$data);
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