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
	public function add_key_des()
	{

		// $this->load->model('blog_model');
		// $data = $this->blog_model->tkt_get_list();
		// foreach($data as $t)
		// {
		// 	$data_update = array(
		// 		'blog_id' => $t['blog_id'],
		// 		'blog_seo_title' => $t['blog_name'],
		// 		'blog_seo_keyword' => $t['blog_name'],
		// 		'blog_seo_description' => $t['blog_name'].get_excerpt($t['blog_content'],160)
		// 		);
		// 	if($this->blog_model->tkt_update($data_update)) echo $t['blog_id'].'<br/>';
		// 	else echo $t['blog_id'].'failled<br/>';
		// }
	}
}