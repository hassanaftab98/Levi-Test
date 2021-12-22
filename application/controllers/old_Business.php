<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends MY_Controller
{
	/*======= ADD NEW BUSINESS ========*/
    public function add_new_business()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['modules'] = $this->Business_model->get_all_modules();
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name']." | Add Business";
			$this->load->view('backend/business/add_business',$data);
		}
		else {
			redirect(base_url());
		}
	}

	/*======= SAVE BUSINESS ========*/
	public function save_business()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'business_name',
						'label' => 'Business Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'business_email',
						'label' => 'Business Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'business_contact_no',
						'label' => 'Business Contact no.',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'zipcode',
						'label' => 'ZipCode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'state',
						'label' => 'State',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'city',
						'label' => 'City',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

//					echo '<pre>'; print_r($_POST); exit;
					$this->Business_model->create_business($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "New Business Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*======= MANAGE BUSINESS ========*/
	public function manage_businesses()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['business'] = $this->Business_model->manage_business();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name']." | Manage Business";
			$this->load->view('backend/business/manage_business',$data);
		}
		else {
			redirect(base_url());
		}
	}

	/*======== EDIT BUSINESS DETAILS =========*/
	public function edit_business_detail()
	{
		if($this->isLoggedIn())
		{

		}
		else {
			redirect(base_url());
		}
	}

	/*======== VIEW BUSINESS DETAIL =========*/
	public function view_business_detail()
	{
		if($this->isLoggedIn())
		{

		}
		else {
			redirect(base_url());
		}
	}

}
