<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index($blog_id)
	{
		$data['_varibles']['blog'] = $this->blog_model->tkt_get($blog_id);
		$data['_content'] = NULL;
		/*________________need for SEO________________________________________*/
		$data['SEO_title'] = $data['_varibles']['blog']['blog_seo_title'];
		$data['SEO_descriptiton'] = $data['_varibles']['blog']['blog_seo_description'];
		$data['SEO_keyword'] = $data['_varibles']['blog']['blog_seo_keyword'];
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

		/*_________load view______________________________________________*/
		$data['_content'] = 'site/blog';
		$this->load->view('layouts/site',$data);
	}
}