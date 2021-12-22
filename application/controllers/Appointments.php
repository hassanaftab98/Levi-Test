<?php

Class Appointments extends MY_Controller
{

	/*======== CREATE APPOINTMENT ==========*/
	public function create_appointment()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['customers'] = $this->Customer_model->get_all_customers();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Appointments";
			$this->load->view('backend/appointments/create_appointment', $data);
		}
		else {
			redirect(base_url());
		}
	}

	/*======== SAVE APPOINTMENT =========*/
	public function save_appointment()
	{
		if($this->isLoggedIn())
		{
			if($_POST)
			{
				$config = array(
					array(
						'field' => 'customer_id',
						'label' => 'Customer',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_date',
						'label' => 'Appointment Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_time',
						'label' => 'Appointment Time',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_desc',
						'label' => 'Description',
						'rules' => 'trim|required'
					),
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Appointment_model->create_appointment($_POST);
					$redirect_link = base_url('appointments/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Appointment created successfully", "redirect_link" => $redirect_link));
				}
			}
		}
	}

	/*======== MANAGE APPOINTMENTS =========*/
	public function manage_appointments()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$business_id = 1;
			$data['appointments'] = $this->Appointment_model->get_all_appointments($business_id);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Appointments";
			$this->load->view('backend/appointments/manage_appointments', $data);
		}
		else {
			redirect(base_url());
		}
	}

	/*======== EDIT APPOINTMENT ==========*/
	public function edit_appointment()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['appointment_id'] = $this->uri->segment(3);
			$data['appointment'] = $this->Appointment_model->get_appointment_by_id($data['appointment_id']);
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['customers'] = $this->Customer_model->get_all_customers();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Edit Appointments";
			$this->load->view('backend/appointments/edit_appointment', $data);
		}
		else {
			redirect(base_url());
		}
	}

	/*========= SAVE EDIT APPOINTMENT =========*/
	public function save_edit_appointment()
	{
		if($this->isLoggedIn())
		{
			if($_POST)
			{
				$config = array(
					array(
						'field' => 'customer_id',
						'label' => 'Customer',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_date',
						'label' => 'Appointment Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_time',
						'label' => 'Appointment Time',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'appointment_desc',
						'label' => 'Description',
						'rules' => 'trim|required'
					),
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$appointment_id = $this->input->post('appointment_id');
					$this->Appointment_model->edit_appointment($_POST, $appointment_id);
					$redirect_link = base_url('appointments/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Appointment updated successfully", "redirect_link" => $redirect_link));
				}
			}
		}
	}


}
