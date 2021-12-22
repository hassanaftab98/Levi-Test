<?php

class Registration extends MY_Controller {

	/*======= STUDENT REGISTRATION =========*/
	public function index()
	{
		$data['company_info'] = $this->Settings_model->get_company_info();
		$data['title'] = $data['company_info']['name']." | Registration";
		$this->load->view('Registration/index', $data);
	}
}
