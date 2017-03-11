<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogcategory extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blogcategory_model');
		$this->load->library('pagination');
	}
	public function index($blogcat_id,$page=0)
	{
		$data['_varibles']['blogcat'] = $this->blogcategory_model->tkt_get($blogcat_id);
		$data['_content'] = NULL;
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $data['_varibles']['blogcat']['blogcat_seo_title'];
		$data['SEO_descriptiton'] = $data['_varibles']['blogcat']['blogcat_seo_description'];
		$data['SEO_keyword'] = $data['_varibles']['blogcat']['blogcat_seo_keyword'];
		/*_______________need for main menu_________________________________*/
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(3);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(4);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(5);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(6);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(7);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(8);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(9);
		$data['_varibles']['dichvuketoans'][] = $this->blog_model->tkt_get(10);
		/*___________________________end need__________________________________*/
		$blogs = $this->blog_model->tkt_get_list(0,0,'DESC','blog_time',$blogcat_id);
		$data['_varibles']['blogs'] = $this->blog_model->tkt_get_list(10,$page,'DESC','blog_time',$blogcat_id);
		// pagination
		$config['base_url'] = base_url().'/'.rewrite($data['_varibles']['blogcat']['blogcat_name']).'-'.$blogcat_id.'-cat.html/page/';
		$config['total_rows'] = count($blogs);
		$config['per_page'] = 10;
		$config['num_links'] = 5;
		$this->pagination->initialize($config);
		$data['_varibles']['pagination'] = $this->pagination->create_links();
		// end pagination
		/*_________load view______________________________________________*/
		$data['_content'] = 'site/blogcategory';
		$this->load->view('layouts/site',$data);
	}
}