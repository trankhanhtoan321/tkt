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
		$this->load->model('categorys_model');
		$this->load->model('products_model');
		$this->load->model('setting_model');
		$this->load->model('blogcategory_model');
		$this->load->model('blog_model');
		$this->load->model('slide_model');

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
			$user_id = $this->_userlogin['user_id'];
			$user_fullname = $this->input->post('user_fullname',TRUE);
			$user_name = $this->input->post('user_name',TRUE);
			$user_email = $this->input->post('user_email',TRUE);
			$user_image = '';
			if($this->tkt_upload->tkt_upload('user_image'))
			{
				$user_image = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->users_model->update_profile($user_id,$user_fullname,$user_name,$user_email,$user_image))
			{
				$data['_alert'] = 'alert/success';
				if($userlogin = $this->users_model->get_info($user_id))
				{
					$this->session->set_userdata('userlogin',$userlogin);
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
			$old_password = $this->input->post('old_password',TRUE);
			$new_password = $this->input->post('new_password',TRUE);
			if($this->users_model->change_password($this->_userlogin['user_id'],$old_password,$new_password))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/change_password';
		$this->load->view('layouts/admin',$data);
	}

	public function add_product_category()
	{
		if($this->input->post('add_product_category'))
		{
			$data_temp = array(
				'cat_name' => $this->input->post('cat_name',TRUE),
				'cat_seo_title' => $this->input->post('cat_seo_title',TRUE),
				'cat_seo_description' => $this->input->post('cat_seo_description',TRUE),
				'cat_seo_keyword' => $this->input->post('cat_seo_keyword',TRUE),
				'cat_parent_id' => $this->input->post('cat_parent_id',TRUE),
				'cat_description' => $this->input->post('cat_description'),
				'cat_image' => '/uploads/icons/none.jpg'
			);
			if($this->tkt_upload->tkt_upload('cat_image'))
			{
				$data_temp['cat_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->categorys_model->tkt_insert($data_temp))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['categorys'] = $this->categorys_model->tkt_get_list();
		$data['_content'] = 'admin/add_product_category';
		$this->load->view('layouts/admin',$data);
	}

	public function categorys()
	{
		if($this->input->post('delete_records'))
		{
			if($this->categorys_model->tkt_delete($this->input->post('table_records',TRUE)))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_content'] = 'admin/categorys';
		$data['_varibles']['categorys'] = $this->categorys_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function products()
	{
		if($this->input->post('delete_records'))
		{
			if($this->products_model->tkt_delete($this->input->post('table_records',TRUE)))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_content'] = 'admin/products';
		$data['_varibles']['products'] = $this->products_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function new_product()
	{
		if($this->input->post('new_product'))
		{
			$data_insert = array(
				'pro_name' => $this->input->post('pro_name',TRUE),
				'pro_sku' => $this->input->post('pro_sku',TRUE),
				'pro_description' => $this->input->post('pro_description',TRUE),
				'pro_shortdescripttion' => $this->input->post('pro_shortdescripttion',TRUE),
				'pro_seo_title' => $this->input->post('pro_seo_title',TRUE),
				'pro_seo_description' => $this->input->post('pro_seo_description',TRUE),
				'pro_seo_keyword' => $this->input->post('pro_seo_keyword',TRUE),
				'pro_price' => $this->input->post('pro_price',TRUE),
				'pro_cat_ids' => json_encode($this->input->post('pro_cat_ids',TRUE)),
				'pro_image' => '/uploads/icons/none.jpg'
			);
			if($this->input->post('use_sale_price') == 1)
			{
				$data_insert['pro_price_sale'] = $this->input->post('pro_price_sale',TRUE);
				$pro_date_sale = $this->input->post('pro_date_sale',TRUE);
				$timetkt = explode("-", $pro_date_sale);
				$data_insert['pro_price_sale_date_begin'] = strtotime($timetkt[0]);
				$data_insert['pro_price_sale_date_finish'] = strtotime($timetkt[1]);
			}
			if($this->tkt_upload->tkt_upload('pro_image'))
			{
				$data_insert['pro_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->products_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['categorys'] = $this->categorys_model->tkt_get_list();
		$data['_content'] = 'admin/new_product';
		$this->load->view('layouts/admin',$data);
	}

	public function update_product($pro_id)
	{
		if($this->input->post('update_product'))
		{
			$data_update = array(
				'pro_id' => $pro_id,
				'pro_name' => $this->input->post('pro_name',TRUE),
				'pro_sku' => $this->input->post('pro_sku',TRUE),
				'pro_description' => $this->input->post('pro_description',TRUE),
				'pro_shortdescripttion' => $this->input->post('pro_shortdescripttion',TRUE),
				'pro_seo_title' => $this->input->post('pro_seo_title',TRUE),
				'pro_seo_description' => $this->input->post('pro_seo_description',TRUE),
				'pro_seo_keyword' => $this->input->post('pro_seo_keyword',TRUE),
				'pro_price' => $this->input->post('pro_price',TRUE),
				'pro_cat_ids' => json_encode($this->input->post('pro_cat_ids',TRUE))
			);
			if($this->input->post('use_sale_price') == 1)
			{
				$data_update['pro_price_sale'] = $this->input->post('pro_price_sale',TRUE);
				$pro_date_sale = $this->input->post('pro_date_sale',TRUE);
				$timetkt = explode("-", $pro_date_sale);
				$data_update['pro_price_sale_date_begin'] = strtotime($timetkt[0]);
				$data_update['pro_price_sale_date_finish'] = strtotime($timetkt[1]);
			}
			if($this->tkt_upload->tkt_upload('pro_image'))
			{
				$data_update['pro_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->products_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['product'] = $this->products_model->tkt_get($pro_id);
		$data['_varibles']['categorys'] = $this->categorys_model->tkt_get_list();
		$data['_content'] = 'admin/update_product';
		$this->load->view('layouts/admin',$data);
	}
	
	public function update_category($cat_id)
	{
		if($this->input->post('update_category'))
		{
			$data_update = array(
				'cat_id' => $cat_id,
				'cat_name' => $this->input->post('cat_name',TRUE),
				'cat_seo_title' => $this->input->post('cat_seo_title',TRUE),
				'cat_seo_description' => $this->input->post('cat_seo_description',TRUE),
				'cat_seo_keyword' => $this->input->post('cat_seo_keyword',TRUE),
				'cat_parent_id' => $this->input->post('cat_parent_id',TRUE),
				'cat_description' => $this->input->post('cat_description',TRUE)
			);
			if($this->tkt_upload->tkt_upload('cat_image'))
			{
				$data_update['cat_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->categorys_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['category'] = $this->categorys_model->tkt_get($cat_id);
		$data['_varibles']['categorys'] = $this->categorys_model->tkt_get_list();
		$data['_content'] = 'admin/update_category';
		$this->load->view('layouts/admin',$data);
	}

	public function general_setting()
	{
		if($this->input->post('save_setting'))
		{
			$data_update = array(
				'set_pagetitle' => $this->input->post('set_pagetitle',TRUE),
				'set_pagedescriptiton' => $this->input->post('set_pagedescriptiton',TRUE),
				'set_pagekeyword' => $this->input->post('set_pagekeyword',TRUE),
				'address' => $this->input->post('address',TRUE),
				'phone' => $this->input->post('phone',TRUE),
				'email' => $this->input->post('email',TRUE),
				'id_analytics' => $this->input->post('id_analytics',TRUE),
				'google_site_verification' => $this->input->post('google_site_verification',TRUE)
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
			if($this->blogcategory_model->tkt_delete($this->input->post('table_records',TRUE)))
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
				'blogcat_name' => $this->input->post('blogcat_name',TRUE),
				'blogcat_seo_title' => $this->input->post('blogcat_seo_title',TRUE),
				'blogcat_seo_description' => $this->input->post('blogcat_seo_description',TRUE),
				'blogcat_seo_keyword' => $this->input->post('blogcat_seo_keyword',TRUE),
				'blogcat_parent_id' => $this->input->post('blogcat_parent_id',TRUE),
				'blogcat_description' => $this->input->post('blogcat_description',TRUE),
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
				'blogcat_name' => $this->input->post('blogcat_name',TRUE),
				'blogcat_seo_title' => $this->input->post('blogcat_seo_title',TRUE),
				'blogcat_seo_description' => $this->input->post('blogcat_seo_description',TRUE),
				'blogcat_seo_keyword' => $this->input->post('blogcat_seo_keyword',TRUE),
				'blogcat_parent_id' => $this->input->post('blogcat_parent_id',TRUE),
				'blogcat_description' => $this->input->post('blogcat_description',TRUE)
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
				'blog_name' => $this->input->post('blog_name',TRUE),
				'blog_seo_title' => $this->input->post('blog_seo_title',TRUE),
				'blog_seo_description' => $this->input->post('blog_seo_description',TRUE),
				'blog_seo_keyword' => $this->input->post('blog_seo_keyword',TRUE),
				'blog_cat_ids' => json_encode($this->input->post('blog_cat_ids',TRUE)),
				'blog_content' => $this->input->post('blog_content',TRUE),
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
			if($this->blog_model->tkt_delete($this->input->post('table_records',TRUE)))
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
				'blog_name' => $this->input->post('blog_name',TRUE),
				'blog_seo_title' => $this->input->post('blog_seo_title',TRUE),
				'blog_seo_description' => $this->input->post('blog_seo_description',TRUE),
				'blog_seo_keyword' => $this->input->post('blog_seo_keyword',TRUE),
				'blog_cat_ids' => json_encode($this->input->post('blog_cat_ids',TRUE)),
				'blog_content' => $this->input->post('blog_content',TRUE)
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
				'slide_link' => $this->input->post('slide_link',TRUE),
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
			if($this->slide_model->tkt_delete($this->input->post('table_records',TRUE)))
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
				'slide_link' => $this->input->post('slide_link',TRUE)
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
}
