<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	private $_userlogin;
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('userlogin')) redirect('/login','refresh');
		$this->load->model('blog_model');
		$this->load->model('users_model');
		$this->load->model('blogcategory_model');
		$this->load->model('slide_model');
		$this->load->model('subscribe_email_model');
		$this->load->model('categorys_model');
		$this->load->model('products_model');
		$this->load->model('course_cat_model');
		$this->load->model('course_model');
		$this->load->model('registration_course_model');
		$this->load->model('student_comment_model');
		$this->load->model('lecturer_model');
		$this->load->model('exam_result_model');
		$this->load->library('tkt_upload');
		$this->load->library('tkt_validate');
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
			if($this->tkt_upload->tkt_upload('logo','image','images/logos/'))
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
			if($this->tkt_upload->tkt_upload('blogcat_image','image','images/blogs/'))
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
			if($this->tkt_upload->tkt_upload('blogcat_image','image','images/blogs/'))
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
			if($this->tkt_upload->tkt_upload('blog_image','image','images/blogs/'))
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
			if($this->tkt_upload->tkt_upload('blog_image','image','images/blogs/'))
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

	public function add_product_category()
	{
		if($this->input->post('add_product_category'))
		{
			$data_temp = array(
				'cat_name' => $this->input->post('cat_name'),
				'cat_seo_title' => $this->input->post('cat_seo_title'),
				'cat_seo_description' => $this->input->post('cat_seo_description'),
				'cat_seo_keyword' => $this->input->post('cat_seo_keyword'),
				'cat_parent_id' => $this->input->post('cat_parent_id'),
				'cat_description' => $this->input->post('cat_description'),
				'cat_image' => '/uploads/icons/none.jpg'
			);
			if($this->tkt_upload->tkt_upload('cat_image','image','images/products/'))
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
			if($this->categorys_model->tkt_delete($this->input->post('table_records')))
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
			if($this->products_model->tkt_delete($this->input->post('table_records')))
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
				'pro_name' => $this->input->post('pro_name'),
				'pro_sku' => $this->input->post('pro_sku'),
				'pro_description' => $this->input->post('pro_description'),
				'pro_shortdescripttion' => $this->input->post('pro_shortdescripttion'),
				'pro_seo_title' => $this->input->post('pro_seo_title'),
				'pro_seo_description' => $this->input->post('pro_seo_description'),
				'pro_seo_keyword' => $this->input->post('pro_seo_keyword'),
				'pro_price' => $this->input->post('pro_price'),
				'pro_cat_ids' => json_encode($this->input->post('pro_cat_ids')),
				'pro_image' => '/uploads/icons/none.jpg'
			);
			if($this->tkt_upload->tkt_upload('pro_image','image','images/products/'))
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
				'pro_name' => $this->input->post('pro_name'),
				'pro_sku' => $this->input->post('pro_sku'),
				'pro_description' => $this->input->post('pro_description'),
				'pro_shortdescripttion' => $this->input->post('pro_shortdescripttion'),
				'pro_seo_title' => $this->input->post('pro_seo_title'),
				'pro_seo_description' => $this->input->post('pro_seo_description'),
				'pro_seo_keyword' => $this->input->post('pro_seo_keyword'),
				'pro_price' => $this->input->post('pro_price'),
				'pro_cat_ids' => json_encode($this->input->post('pro_cat_ids'))
			);
			if($this->tkt_upload->tkt_upload('pro_image','image','images/products/'))
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
				'cat_name' => $this->input->post('cat_name'),
				'cat_seo_title' => $this->input->post('cat_seo_title'),
				'cat_seo_description' => $this->input->post('cat_seo_description'),
				'cat_seo_keyword' => $this->input->post('cat_seo_keyword'),
				'cat_parent_id' => $this->input->post('cat_parent_id'),
				'cat_description' => $this->input->post('cat_description')
			);
			if($this->tkt_upload->tkt_upload('cat_image','image','images/products/'))
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

	public function new_slide()
	{
		if($this->input->post('new_slide'))
		{
			$data_insert = array(
				'slide_link' => $this->input->post('slide_link'),
				'slide_caption' => $this->input->post('slide_caption')
				);
			if($this->tkt_upload->tkt_upload('slide_image','image','images/slides/'))
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
			if($this->tkt_upload->tkt_upload('slide_image','image','images/slides/'))
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

	public function new_course_cat()
	{
		if($this->input->post('new_course_cat'))
		{
			$data_insert = array(
				'cc_name' => $this->input->post('cc_name'),
				'cc_parent_id' => $this->input->post('cc_parent_id'),
				'cc_description' => $this->input->post('cc_description'),
				'cc_seo_title' => $this->input->post('cc_seo_title'),
				'cc_seo_keyword' => $this->input->post('cc_seo_keyword'),
				'cc_seo_description' => $this->input->post('cc_seo_description'),
				'cc_image' => '/uploads/icons/none.jpg'
				);
			if($this->tkt_upload->tkt_upload('cc_image','image','images/courses/'))
			{
				$data_insert['cc_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->course_cat_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['coursescats'] = $this->course_cat_model->tkt_get_list();
		$data['_content'] = 'admin/new_course_cat';
		$this->load->view('layouts/admin',$data);
	}

	public function courses_cat()
	{
		if($this->input->post('delete_records'))
		{
			if($this->course_cat_model->tkt_delete($this->input->post('table_records')))
				$data['_alert'] = 'alert/success';
			else $data['_alert'] = 'alert/error';
		}
		$data['_varibles']['coursescats'] = $this->course_cat_model->tkt_get_list();
		$data['_content'] = 'admin/courses_cat';
		$this->load->view('layouts/admin',$data);
	}

	public function update_courses_cat($cc_id)
	{
		if($this->input->post('update_courses_cat'))
		{
			$data_update = array(
				'cc_id' => $cc_id,
				'cc_name' => $this->input->post('cc_name'),
				'cc_parent_id' => $this->input->post('cc_parent_id'),
				'cc_description' => $this->input->post('cc_description'),
				'cc_seo_title' => $this->input->post('cc_seo_title'),
				'cc_seo_keyword' => $this->input->post('cc_seo_keyword'),
				'cc_seo_description' => $this->input->post('cc_seo_description')
				);
			if($this->tkt_upload->tkt_upload('cc_image','image','images/courses/'))
			{
				$data_update['cc_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->course_cat_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['course_cat'] =  $this->course_cat_model->tkt_get($cc_id);
		$data['_varibles']['coursescats'] = $this->course_cat_model->tkt_get_list();
		$data['_content'] = 'admin/update_courses_cat';
		$this->load->view('layouts/admin',$data);
	}

	public function new_course()
	{
		if($this->input->post('new_course'))
		{
			$data_insert = array(
				'kh_ten' => $this->input->post('kh_ten'),
				'kh_hocphi' => $this->input->post('kh_hocphi'),
				'kh_hocphigiam' => $this->input->post('kh_hocphigiam'),
				'kh_noidung' => $this->input->post('kh_noidung'),
				'kh_seo_title' => $this->input->post('kh_seo_title'),
				'kh_seo_keyword' => $this->input->post('kh_seo_keyword'),
				'kh_seo_description' => $this->input->post('kh_seo_description'),
				'kh_ngaykhaigiang' => strtotime($this->input->post('kh_ngaykhaigiang')),
				'kh_cat_ids' => json_encode($this->input->post('kh_cat_ids')),
				'kh_image' => '/uploads/icons/none.jpg',
				'kh_time' => $this->input->post('kh_time')
				);
			if($this->tkt_upload->tkt_upload('kh_image','image','images/courses/'))
			{
				$data_insert['kh_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->course_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['coursescats'] = $this->course_cat_model->tkt_get_list();
		$data['_content'] = 'admin/new_course';
		$this->load->view('layouts/admin',$data);
	}

	public function courses()
	{
		if($this->input->post('delete_records'))
		{
			if($this->course_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/courses';
		$data['_varibles']['courses'] = $this->course_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function update_course($kh_id)
	{
		if($this->input->post('update_course'))
		{
			$data_update = array(
				'kh_id' => $kh_id,
				'kh_ten' => $this->input->post('kh_ten'),
				'kh_hocphi' => $this->input->post('kh_hocphi'),
				'kh_noidung' => $this->input->post('kh_noidung'),
				'kh_cat_ids' => json_encode($this->input->post('kh_cat_ids')),
				'kh_seo_title' => $this->input->post('kh_seo_title'),
				'kh_seo_keyword' => $this->input->post('kh_seo_keyword'),
				'kh_seo_description' => $this->input->post('kh_seo_description'),
				'kh_ngaykhaigiang' => strtotime($this->input->post('kh_ngaykhaigiang')),
				'kh_time' => $this->input->post('kh_time')
				);
			if($this->tkt_upload->tkt_upload('kh_image','image','images/courses/'))
			{
				$data_update['kh_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->course_model->tkt_update($data_update))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles']['course'] =  $this->course_model->tkt_get($kh_id);
		$data['_varibles']['coursescats'] = $this->course_cat_model->tkt_get_list();
		$data['_content'] = 'admin/update_course';
		$this->load->view('layouts/admin',$data);
	}

	public function registration_course()
	{
		if($this->input->post('delete_records'))
		{
			if($this->registration_course_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/registration_course';
		$data['_varibles']['registration_courses'] = $this->registration_course_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function student_comment()
	{
		if($this->input->post('delete_records'))
		{
			if($this->student_comment_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/student_comment';
		$data['_varibles']['student_comments'] = $this->student_comment_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function new_student_comment()
	{
		if($this->input->post('new_student_comment'))
		{
			$data_insert = array(
				'student_comment_name' => $this->input->post('student_comment_name'),
				'student_comment_class' => $this->input->post('student_comment_class'),
				'student_comment_content' => $this->input->post('student_comment_content'),
				'student_comment_info' => $this->input->post('student_comment_info'),
				'student_comment_image' => '/uploads/icons/user.png',
				'student_comment_time' => time()
				);
			if($this->tkt_upload->tkt_upload('student_comment_image','image','images/student_comment/'))
			{
				$data_insert['student_comment_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->student_comment_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/new_student_comment';
		$this->load->view('layouts/admin',$data);
	}

	public function lecturer()
	{
		if($this->input->post('delete_records'))
		{
			if($this->lecturer_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/lecturer';
		$data['_varibles']['lecturers'] = $this->lecturer_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function new_lecturer()
	{
		if($this->input->post('new_lecturer'))
		{
			$data_insert = array(
				'lecturer_name' => $this->input->post('lecturer_name'),
				'lecturer_info' => $this->input->post('lecturer_info'),
				'lecturer_image' => '/uploads/icons/user.png'
				);
			if($this->tkt_upload->tkt_upload('lecturer_image','image','images/lecturer/'))
			{
				$data_insert['lecturer_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->lecturer_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/new_lecturer';
		$this->load->view('layouts/admin',$data);
	}

	public function exam_result()
	{
		if($this->input->post('delete_records'))
		{
			if($this->exam_result_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/exam_result';
		$data['_varibles']['exam_results'] = $this->exam_result_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}

	public function new_exam_result()
	{
		if($this->input->post('new_exam_result'))
		{
			$data_insert = array(
				'exam_result_name' => $this->input->post('exam_result_name'),
				'exam_result_phone' => $this->input->post('exam_result_phone'),
				'exam_result_time' => $this->input->post('exam_result_time'),
				'exam_result_goal' => $this->input->post('exam_result_goal'),
				'exam_result_course' => $this->input->post('exam_result_course')
				);
			$data_insert['exam_result_email'] = $this->tkt_validate->is_email($this->input->post('exam_result_email'))?$this->input->post('exam_result_email'):'';
			if($this->tkt_upload->tkt_upload('lecturer_image','image','images/exam_result/'))
			{
				$data_insert['lecturer_image'] = $this->tkt_upload->tkt_get_file_path();
			}
			if($this->exam_result_model->tkt_insert($data_insert))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_varibles'] = NULL;
		$data['_content'] = 'admin/new_exam_result';
		$this->load->view('layouts/admin',$data);
	}

	public function learn_trial()
	{
		if($this->input->post('delete_records'))
		{
			if($this->learn_trial_model->tkt_delete($this->input->post('table_records')))
			{
				$data['_alert'] = 'alert/success';
			}
			else
			{
				$data['_alert'] = 'alert/error';
			}
		}
		$data['_content'] = 'admin/learn_trial';
		$data['_varibles']['learn_trials'] = $this->learn_trial_model->tkt_get_list();
		$this->load->view('layouts/admin',$data);
	}
}
