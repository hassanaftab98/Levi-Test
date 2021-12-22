<?php

class Event extends MY_Controller
{
	/*=========== CREATE EVENT ============*/
	public function create_event()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['customers'] = $this->Customer_model->get_all_customers();
			$data['event_types'] = $this->Administration_model->get_all_event();
			$data['locations'] = $this->Administration_model->get_all_locations();
			$data['vendor_types'] = $this->Administration_model->get_all_crew();
			//echo '<pre>'; print_r($data['vendor_types']); exit;
			//echo '<pre>'; print_r($data['locations']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Create Event";
			$this->load->view('backend/events/create_event', $data);
		}
		else {
			redirect(base_url());
		}
	}

	/*========= SAVE EVENT ===========*/
	public function save_event()
	{
		if($this->isLoggedIn())
		{
			if($_POST)
			{
				echo '<pre>'; print_r($_POST); exit;
				$config = array(
					array(
						'field' => 'event_type',
						'label' => 'Event Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'customer_id',
						'label' => 'Customer',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'event_date',
						'label' => 'Event Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'event_time',
						'label' => 'Event Time',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'end_date',
						'label' => 'End Date',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					echo '<pre>'; print_r($_POST); exit;
					//$this->Appointment_model->create_appointment($_POST);
					//$redirect_link = base_url('appointments/manage');
					//echo json_encode(array("msg_type" => "success", "message" => "Appointment created successfully", "redirect_link" => $redirect_link));
				}
			}
		}
		else {
			redirect(base_url());
		}
	}

	/*========= CONVERT ENGLISH DATE INTO HEBREW DATE =========*/
	public function convert_date_hebrew($month, $date, $year)
	{
		$months[1] = 'Tishri';
		$months[2] = 'Heshvan';
		$months[3] = 'Kislev';
		$months[4] = 'Tevet';
		$months[5] = 'Shevat';
		$months[6] = 'Adar I (in leap years), unused in non-leap years	';
		$months[7] = 'Adar (in non-leap years), Adar II (in leap years)	';
		$months[8] = 'Nisan';
		$months[9] = 'Iyar';
		$months[10] = 'Sivan';
		$months[11] = 'Tammuz';
		$months[12] = 'Av';
		$months[13] = 'Elul';

		$jd = gregoriantojd($month, $date, $year); // Month, Day, Year
		$d =  explode("/",jdtojewish($jd));
		$AQDate =  $d[1] ."  ". $months[$d[0]]."  ". $d[2];

		return $AQDate;
	}

	/*========= CONVERT EVENT HEBREW DATE ===========*/
	public function get_event_hebrew_date()
	{
		if($this->isLoggedIn())
		{
			$event_date = $this->input->post('event_date');
			$m = date('m', strtotime($event_date));
			$d = date('d', strtotime($event_date));
			$y = date('Y', strtotime($event_date));
			$data['day'] = date('l', strtotime($event_date));
			$data['hebrew'] = $this->convert_date_hebrew($m, $d, $y);
			echo json_encode(array('msg_type'=>'success','data'=> $data, true));
		}
		else {
			redirect(base_url());
		}
	}

	/*========== MANAGE EVENTS ============*/
	public function manage_events()
	{
		if($this->isLoggedIn())
		{
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['customers'] = $this->Customer_model->get_all_customers();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Events";
			$this->load->view('backend/events/manage_events', $data);
		}
		else {
			redirect(base_url());
		}
	}


}
