<?php

Class Task extends MY_Controller
{

	/*======== CREATE NEW TASK =========*/
	public function create_new_task()
	{
		if ($this->isLoggedIn()) {


			$date = date('d m y');
			$hebrew = jdtojewish($date);
			print_r($hebrew); exit;
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);;
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name']." | Create New Task";
			$this->load->view('backend/tasks/create',$data);
		} else {
			redirect(base_url());
		}
	}

	/*========== MANAGE TASKS ===========*/
	public function manage_tasks()
	{
		if ($this->isLoggedIn()) {

			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);;
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name']." | Manage Tasks";
			$this->load->view('backend/tasks/manage',$data);
		} else {
			redirect(base_url());
		}
	}

}
