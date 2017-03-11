<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}
	public function index()
	{
		if($this->input->post('create'))
		{
			$data = array(
				'user_name' => $this->input->post('user_name',TRUE),
				'user_pass' => password_hash($this->input->post('user_pass',TRUE),PASSWORD_DEFAULT),
				'user_email' => $this->input->post('user_email',TRUE)
				);
			$users = $this->users_model->tkt_get_list_by_field('user_name',$data['user_name']);
			if(count($users)==0)
			{
				if($this->users_model->tkt_insert($data))
				{
					$alert['alert']="Sign up success! You can log in now!";
					$this->load->view('alert/success',$alert);
				}
				else
				{
					$this->load->view('alert/error');
				}
			}
			else
			{
				$alert['alert']="Sign up error! user name already exists!";
				$this->load->view('alert/error',$alert);
			}
		}
		if($this->input->post('login'))
		{
			$data = array(
				'user_name' => $this->input->post('user_name',TRUE),
				'user_pass' => $this->input->post('user_pass',TRUE)
				);
			if($this->users_model->tkt_verify($data))
			{
				$users = $this->users_model->tkt_get_list_by_field('user_name',$data['user_name']);
				if(count($users)==1)
				{
					$data = array(
						'user_id' => $users[0]['user_id'],
						'user_lastlogin' => time()
						);
					$this->users_model->tkt_update($data);
					$this->session->set_userdata('userlogin',$users[0]);
					redirect('/admin','refresh');
				}
				else
				{
					$this->load->view('alert/error');
				}
			}
			else
			{
				$this->load->view('alert/error');
			}
		}
		$this->load->view('layouts/login');
	}
	public function logout()
	{
		$this->session->unset_userdata('userlogin');
		redirect('/login');
	}
}
