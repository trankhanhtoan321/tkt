<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	private $_userlogin;
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('userlogin'))
			redirect('/login','refresh');
		
		$this->load->model('users_model');
		$this->load->model('blogcategory_model');
		$this->load->model('slide_model');
		$this->load->model('subscribe_email_model');
		$this->load->library('tkt_upload');

		$this->_userlogin = $this->session->userdata('userlogin');
	}

	public function index()
	{
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/home';
		$this->load->view('layouts/admin',$data);
	}

	public function profile_user()
	{
		if($this->input->post('update_profile'))
		{
			$data_update = array(
				'user_id' => $this->_userlogin['user_id'],
				'user_fullname' => $this->input->post('user_fullname'),
				'user_name' => $this->input->post('user_name'),
				'user_email' => $this->input->post('user_email')
				);
			$users = $this->users_model->tkt_get_list_by_field('user_name',$data_update['user_name']);
			if($data_update['user_name']==$this->_userlogin['user_name'] || count($users)==0)
			{
				if($this->tkt_upload->tkt_upload('user_image'))
				{
					$data_update['user_image'] = $this->tkt_upload->tkt_get_file_path();
				}
				if($this->users_model->tkt_update($data_update))
				{
					$data['_alert'] = 'alert/success';
					$users = $this->users_model->tkt_get_list_by_field('user_name',$data_update['user_name']);
					if(count($users)==1)
					{
						$this->_userlogin = $users[0];
						$this->session->set_userdata('userlogin',$this->_userlogin);
					}
				}
				else
				{
					$data['_alert'] = 'alert/error';
				}
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/profile_user';
		$this->load->view('layouts/admin',$data);
	}

	public function change_password()
	{
		if($this->input->post('change_password'))
		{
			$data_update = array(
				'user_id' => $this->_userlogin['user_id'],
				'user_pass' => password_hash($this->input->post('new_password'),PASSWORD_DEFAULT)
				);
			$data_verify = array(
				'user_name' => $this->_userlogin['user_name'],
				'user_pass' => $this->input->post('old_password')
				);
			if($this->users_model->tkt_verify($data_verify))
			{
				if($this->users_model->tkt_update($data_update))
				{
					$data['_alert'] = 'alert/success';
				}
				else
				{
					$data['_alert'] = 'alert/error';
				}
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/change_password';
		$this->load->view('layouts/admin',$data);
	}

	public function general_setting()
	{
		if($this->input->post('save_setting'))
		{
			$data_update = array(
				'set_pagetitle' => $this->input->post('set_pagetitle'),
				'set_pagedescriptiton' => $this->input->post('set_pagedescriptiton'),
				'set_pagekeyword' => $this->input->post('set_pagekeyword'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'id_analytics' => $this->input->post('id_analytics'),
				'google_site_verification' => $this->input->post('google_site_verification')
				);
			if($this->tkt_upload->tkt_upload('logo'))
			{
				$data_update['logo'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->setting_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/general_setting';
		$this->load->view('layouts/admin',$data);
	}

	public function blogcategory()
	{
		if($this->input->post('delete_records'))
		{
			if($this->blogcategory_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/blogcategory';
		$data['_varibles']['blogcategorys'] = $this->blogcategory_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function new_blogcategory()
	{
		if($this->input->post('new_blogcategory'))
		{
			$data_insert = array(
				'blogcat_name' => $this->input->post('blogcat_name'),
				'blogcat_seo_title' => $this->input->post('blogcat_seo_title'),
				'blogcat_seo_description' => $this->input->post('blogcat_seo_description'),
				'blogcat_seo_keyword' => $this->input->post('blogcat_seo_keyword'),
				'blogcat_parent_id' => $this->input->post('blogcat_parent_id'),
				'blogcat_description' => $this->input->post('blogcat_description'),
				'blogcat_image' => '/uploads/icons/none.jpg'
				);
			if($this->tkt_upload->tkt_upload('blogcat_image'))
			{
				$data_insert['blogcat_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->blogcategory_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['blogcategorys'] = $this->blogcategory_model->tkt_get_list();
		$data['_content'] = 'admin/new_blogcategory';
		$this->load->view('layouts/admin',$data);
	}

	public function update_blogcategory($blogcat_id=0)
	{
		if($blogcat_id == 0) redirect('/admin/blogcategory','refresh');
		if($this->input->post('update_blogcategory'))
		{
			$data_update = array(
				'blogcat_id' => $blogcat_id,
				'blogcat_name' => $this->input->post('blogcat_name'),
				'blogcat_seo_title' => $this->input->post('blogcat_seo_title'),
				'blogcat_seo_description' => $this->input->post('blogcat_seo_description'),
				'blogcat_seo_keyword' => $this->input->post('blogcat_seo_keyword'),
				'blogcat_parent_id' => $this->input->post('blogcat_parent_id'),
				'blogcat_description' => $this->input->post('blogcat_description')
				);
			if($this->tkt_upload->tkt_upload('blogcat_image'))
			{
				$data_update['blogcat_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->blogcategory_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['blogcategory'] =  $this->blogcategory_model->tkt_get($blogcat_id);
		$data['_varibles']['blogcategorys'] = $this->blogcategory_model->tkt_get_list();
		$data['_content'] = 'admin/update_blogcategory';
		$this->load->view('layouts/admin',$data);
	}

	public function new_blog()
	{
		if($this->input->post('new_blog'))
		{
			$data_insert = array(
				'blog_user_id' => $this->_userlogin['user_id'],
				'blog_time' => time(),
				'blog_name' => $this->input->post('blog_name'),
				'blog_seo_title' => $this->input->post('blog_seo_title'),
				'blog_seo_description' => $this->input->post('blog_seo_description'),
				'blog_seo_keyword' => $this->input->post('blog_seo_keyword'),
				'blog_cat_ids' => json_encode($this->input->post('blog_cat_ids')),
				'blog_content' => $this->input->post('blog_content'),
				'blog_image' => '/uploads/icons/none.jpg'
				);
			if($this->tkt_upload->tkt_upload('blog_image'))
			{
				$data_insert['blog_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->blog_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['blogcategorys'] = $this->blogcategory_model->tkt_get_list();
		$data['_content'] = 'admin/new_blog';
		$this->load->view('layouts/admin',$data);
	}

	public function blogs()
	{
		if($this->input->post('delete_records'))
		{
			if($this->blog_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/blog';
		$data['_varibles']['blogs'] = $this->blog_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function update_blog($blog_id)
	{
		if($blog_id == 0) redirect('/admin/blogs','refresh');
		if($this->input->post('update_blog'))
		{
			$data_update = array(
				'blog_id' => $blog_id,
				'blog_time' => time(),
				'blog_name' => $this->input->post('blog_name'),
				'blog_seo_title' => $this->input->post('blog_seo_title'),
				'blog_seo_description' => $this->input->post('blog_seo_description'),
				'blog_seo_keyword' => $this->input->post('blog_seo_keyword'),
				'blog_cat_ids' => json_encode($this->input->post('blog_cat_ids')),
				'blog_content' => $this->input->post('blog_content')
				);
			if($this->tkt_upload->tkt_upload('blog_image'))
			{
				$data_update['blog_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->blog_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['blog'] =  $this->blog_model->tkt_get($blog_id);
		$data['_varibles']['blogcategorys'] = $this->blogcategory_model->tkt_get_list();
		$data['_content'] = 'admin/update_blog';
		$this->load->view('layouts/admin',$data);
	}

	public function new_slide()
	{
		if($this->input->post('new_slide'))
		{
			$data_insert = array(
				'slide_link' => $this->input->post('slide_link'),
				'slide_caption' => $this->input->post('slide_caption')
				);
			if($this->tkt_upload->tkt_upload('slide_image'))
			{
				$data_insert['slide_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->slide_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/new_slide';
		$this->load->view('layouts/admin',$data);
	}

	public function slides()
	{
		if($this->input->post('delete_records'))
		{
			if($this->slide_model->tkt_delete($this->input->post('table_records')))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_varibles']['slides'] = $this->slide_model->tkt_get_list();
		$data['_content'] = 'admin/slides';
		$this->load->view('layouts/admin',$data);
	}

	public function update_slide($slide_id)
	{
		if($this->input->post('update_slide'))
		{
			$data_update = array(
				'slide_id' => $slide_id,
				'slide_link' => $this->input->post('slide_link'),
				'slide_caption' => $this->input->post('slide_caption')
				);
			if($this->tkt_upload->tkt_upload('slide_image'))
			{
				$data_update['slide_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->slide_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['slide'] =  $this->slide_model->tkt_get($slide_id);
		$data['_content'] = 'admin/update_slide';
		$this->load->view('layouts/admin',$data);
	}

	public function subscribe_email()
	{
		if($this->input->post('delete_records'))
		{
			if($this->subscribe_email_model->tkt_delete($this->input->post('table_records')))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_varibles']['subs'] = $this->subscribe_email_model->tkt_get_list(0,0,'DESC');
		$data['_content'] = 'admin/subscribe_email';
		$this->load->view('layouts/admin',$data);
	}
}
