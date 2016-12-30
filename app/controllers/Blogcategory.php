<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogcategory extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blogcategory_model');
	}
	public function index($blogcat_id)
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
		/*___________________________need for side bar__________________________________*/
		$blogs = $this->blog_model->tkt_get_list(0,0,'DESC','blog_time');
		$data['_varibles']['newblogs'] = $this->blog_model->tkt_get_list(5,0,'DESC','blog_time');
		$data['_varibles']['popularblogs'] = $this->blog_model->tkt_get_list(5,0,'DESC','blog_views');
		/*__________________________________end need___________________________________*/
		$data['_varibles']['blogs'] = array();
		foreach($blogs as $blog)
		{
			$temp = json_decode($blog['blog_cat_ids']);
			if(is_array($temp) && in_array($blogcat_id, $temp)) $data['_varibles']['blogs'][] = $blog;
		}
		/*_________load view______________________________________________*/
		$data['_content'] = 'site/blogcategory';
		$this->load->view('layouts/site',$data);
	}
}