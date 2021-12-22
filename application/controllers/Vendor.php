<?php

class Vendor extends MY_Controller
{
	/*======== ADD VENDOR ========*/
	public function add_vendor()
	{
		if ($this->isLoggedIn()) {

			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['vendor_type'] = $this->Administration_model->get_all_crew();
			$data['contact_types'] = $this->Administration_model->contact_types();
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Menu";
			$this->load->view('backend/vendors/add_vendor', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======== SAVE VENDOR ========*/
	public function save_vendor()
	{
		if ($this->isloggedIn()) {


			if ($_POST) {
				$config = array(
					array(
						'field' => 'first_name',
						'label' => 'First Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'last_name',
						'label' => 'Last Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'email',
						'label' => 'Primary Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'contact',
						'label' => 'Primary Contact No',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'vendor_address1',
						'label' => 'Address',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'zipcode',
						'label' => 'ZipCode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'city',
						'label' => 'State',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'state',
						'label' => 'City',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'vendor_type',
						'label' => 'City',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					//					echo '<pre>'; print_r($_POST); exit;
					$this->Vendor_model->add_vendor($_POST);
					$redirect_link = base_url('vendor/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Vendor Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	public function manage_vendors()
	{
		if ($this->isLoggedIn()) {

			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['vendor'] = $this->Vendor_model->get_all_vendor();
			//			echo "<pre>"; print_r($data['vendor']); exit;
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Vendors";
			$this->load->view('backend/vendors/manage_vendors', $data);
		} else {
			redirect(base_url());
		}
	}


	public function edit_vendor()
	{
		if ($this->isLoggedIn()) {

			$vendor_id = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['vendor_type'] = $this->Administration_model->get_all_crew();
			$data['vendor'] = $this->Vendor_model->get_vendor_by_id($vendor_id);
			//			echo "<pre>"; print_r($data['vendor']); exit;
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Vendors";
			$this->load->view('backend/vendors/edit_vendor', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======== SAVE VENDOR ========*/
	public function update_vendor()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'first_name',
						'label' => 'First Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'last_name',
						'label' => 'Last Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'email',
						'label' => 'Primary Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'contact',
						'label' => 'Primary Contact No',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'vendor_address1',
						'label' => 'Address',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'zipcode',
						'label' => 'ZipCode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'city',
						'label' => 'City',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'state',
						'label' => 'State',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'vendor_type',
						'label' => 'Vendor Type',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$vendor_id = $this->input->post('vendor_id');
					//					echo '<pre>'; print_r($_POST); exit;
					$this->Vendor_model->update_save_vendor($_POST, $vendor_id);
					$redirect_link = base_url('vendor/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Vendor Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*======== ADD VENDOR CONTACT ========*/
	public function add_vendor_contact()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'contact_person_name',
						'label' => 'Person Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'contact_person_title',
						'label' => 'Person Title',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'contact_person_email',
						'label' => 'Person Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'person_contact',
						'label' => 'Contact No',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					echo '<pre>';
					print_r($_POST);
					exit;
					$this->Vendor_model->add_vendor($_POST);
					$redirect_link = base_url('vendor/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Vendor Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	public function get_vendor_by_id()
	{
		if ($this->isLoggedIn()) {
			$vendor_id = $this->input->post('vendor_id');
			// print_r($vendor_id); exit;

			if ($vendor_id == "All") {
				$data['vendor'] = $this->Vendor_model->get_all_vendor();
			} else {
				$data['vendor'] = $this->Vendor_model->get_single_vendor_by_id($vendor_id);
			}
			// print_r($data['business']); exit;
			$html = $this->load->view('backend/vendors/manage_vendor_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}

	public function detail()
	{
		if ($this->isLoggedIn()) {

			$data['vendor_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$data['detail'] = $this->Vendor_model->get_vendor_by_id($data['vendor_id']);
			$data['contacts'] = $this->Vendor_model->get_vendor_contacts($data['vendor_id']);
			//			print_r($data['contacts']); exit;
			$data['shipment'] = $this->Vendor_model->vendor_shipment_details($data['vendor_id']);
			$data['vendor_notes'] = $this->Vendor_model->get_vendor_notes($data['vendor_id']);
			$data['items'] = $this->Administration_model->get_all_items();
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Vendor Detail";
			$this->load->view('backend/vendors/vendor_detail', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======== VENDOR PRICE LIST =========*/
	public function vendor_price_list()
	{
		if ($this->isLoggedIn()) {

			$data['vendor_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$data['items'] = $this->Administration_model->get_all_items();
			$data['price_list'] = $this->Vendor_model->vendor_price_list($data['vendor_id']);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Vendor Price List";
			$this->load->view('backend/vendors/vendor_price_list', $data);
		} else {
			redirect(base_url());
		}
	}

	public function get_item_name()
	{
		if ($this->isLoggedIn()) {

			$item_id = $this->input->post('item_id');
			$data['get_item'] = $this->Administration_model->get_item_by_id($item_id);
			//			echo "<pre>"; print_r(	$data['get_item']); exit;
			echo json_encode(array('msg_type' => 'success', 'data' => $data['get_item'], true));
		} else {
			redirect(base_url());
		}
	}


	/*========= SAVE VENDOR PRICE LIST ==========*/
	public function save_vendor_price()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'item_id',
						'label' => 'Item',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'price',
						'label' => 'Price',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Vendor_model->add_vendor_price($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Vendor price added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*======== DELETE VENDOR PRICE LIST ITEM ==========*/
	public function delete_vendor_item()
	{
		if ($this->isLoggedIn()) {
			$price_list_id = $this->input->post('price_list_id');
			$response = $this->Vendor_model->delete_vendor_pitem($price_list_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Item Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	/*========= GET PRICE LIST DATA BY ID  =========*/
	public function price_list_by_id()
	{
		if ($this->isLoggedIn()) {
			$price_list_id = $this->input->post('price_list_id');
			$data['detail'] = $this->Vendor_model->get_price_by_id($price_list_id);
			echo json_encode(array('msg_type' => 'success', 'data' => $data['detail'], true));
		} else {
			redirect(base_url());
		}
	}

	/*======== UPDATE VENDOR PRICE =========*/
	public function update_vendor_price()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'price1',
						'label' => 'Price',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$price_list_id = $this->input->post('price_list_id');
					$this->Vendor_model->update_vendor_price($price_list_id, $_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Price updated Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= ADD Vendor NOTE ==========*/
	public function save_vendor_note()
	{
		if ($_POST) {
			$config = array(
				array(
					'field' => 'admin_note',
					'label' => 'Admin Note',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'customRadio',
					'label' => 'Note Type',
					'rules' => 'trim|required'
				)
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == false) {
				echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
			} else {

				if (isset($_POST['my-checkbox'])) {
					$note_id = $this->Vendor_model->add_vendor_note($_POST);
					// echo $note_id; exit;
					$vendor_id = $this->input->post('vendor_id');
					$this->send_vendor_note($note_id);
					$redirect_link = base_url('vendor/detail/' . $vendor_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully", "redirect_link" => $redirect_link));
				} else {

					$this->Vendor_model->add_vendor_note($_POST);
					//$registration_id = $this->input->post('registration_id');
					//$redirect_link = base_url('registration/detail/'.$registration_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully"));
				}
			}
		}
	}


	// /========= SEND ADMIN NOTE TO vendor =======/
	public function send_vendor_note($note_id)
	{
		$data['detail'] = $this->Vendor_model->get_note_detail($note_id);
		// echo "<pre>"; print_r($data['detail']);exit;
		$data['company_info'] = $this->Settings_model->get_company_info();
		$settings = $this->Settings_model->getEmailSettings();
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = $settings->host;
		$mail->Port = $settings->port;
		$mail->Username = $settings->email;
		$mail->Password = $settings->password;
		$mail->SetFrom($settings->sent_email, $settings->sent_title);
		$mail->AddReplyTo($settings->reply_email, $settings->reply_email);
		//////////////Email to User////////////////
		$mail->Subject = $data['company_info']['name'] . " | New Admin Note";
		$mail->IsHTML(true);
		$body = $this->load->view('emails/admin_note_email', $data, true);
		$mail->MsgHTML($body);
		//$destination = $data['detail']->email; // Who is addressed the email to
		$destination = $data['detail']->email;
		$mail->AddAddress($destination);

		if (!$mail->Send()) {
			$data['code'] = 300;
			$data["message"] = "Error: " . $mail->ErrorInfo;
		}
	}


	/*========= DELETE ADMIN NOTE ===========*/
	public function delete_vendor_note()
	{
		if ($this->isLoggedIn()) {
			$vendor_note_id = $this->input->post('vendor_note_id');

			$check = $this->Vendor_model->delete_vendor_note($vendor_note_id);
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Note Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}


	// AQ FORM
	public function aq_form()
	{
		if ($this->isLoggedIn()) {

			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " |AQ";
			$this->load->view('backend/vendors/aq', $data);
		} else {
			redirect(base_url());
		}
	}

}
