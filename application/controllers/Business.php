<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Business extends MY_Controller
{
	/*======= ADD NEW BUSINESS ========*/
	public function add_new_business()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['subscription_packages'] = $this->Business_model->get_all_subscription_packages();
			$data['modules'] = $this->Business_model->get_all_modules();
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Business";
			$this->load->view('backend/business/add_business', $data);
		} else {
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
					),
					array(
						'field' => 'package_type',
						'label' => 'Package Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'start_date',
						'label' => 'Start Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'end_date',
						'label' => 'End Date',
						'rules' => 'trim|required'
					), array(
						'field' => 'name',
						'label' => 'User Name',
						'rules' => 'trim|required'
					), array(
						'field' => 'status',
						'label' => 'Subscription Status',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'email',
						'label' => 'User Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'user_status',
						'label' => 'User Status',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Business_model->create_business($_POST);
					$redirect_link = base_url('business/manage');
					echo json_encode(array("msg_type" => "success", "message" => "New Business Added Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*======= MANAGE BUSINESS ========*/
	public function manage_businesses()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['business'] = $this->Business_model->manage_business();
			// $data[]
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Business";
			$this->load->view('backend/business/manage_business', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======== EDIT BUSINESS DETAILS =========*/
	public function edit_business_detail()
	{
		if ($this->isLoggedIn()) {

			$vendor_id = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['business_detail'] = $this->Business_model->get_business_by_id($vendor_id);
			$data['business_contacts'] = $this->Business_model->get_business_contact_by_id($vendor_id);
			// echo "<pre>"; print_r($data['business_detail']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Edit Business Details";
			$this->load->view('backend/business/edit_business', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======= SAVE BUSINESS ========*/
	public function update_business_detail()
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


					$business_id = $this->input->post('business_id');
					// print_r($business_id);exit;
					$this->Business_model->update_business($_POST, $business_id);
					$redirect_link = base_url('business/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Business Updated Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	public function delete_business()
	{
		if ($this->isLoggedIn()) {
			$business_id = $this->input->post('business_id');;

			$check = $this->Business_model->delete_business($business_id);
			// print_r($check); exit;
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Business Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}




	/*======== VIEW BUSINESS DETAIL =========*/
	public function view_business_detail()
	{
		if ($this->isLoggedIn()) {
			$vendor_id = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['subscription'] = $this->Business_model->get_business_subscription($vendor_id);
			$data['business_detail'] = $this->Business_model->get_business_by_id($vendor_id);
			$data['business_contacts'] = $this->Business_model->get_business_contact_by_id($vendor_id);
			$data['business_notes'] = $this->Business_model->get_registration_all_notes($vendor_id);
			$data['docs'] = $this->Business_model->get_document_by_id($vendor_id);
			// echo "<pre>"; print_r($data['business_contacts']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | View Business Details";
			$this->load->view('backend/business/business_detail', $data);
		} else {
			redirect(base_url());
		}
	}


	// /======= DELETE Business DOCUMENT =========/
	public function delete_business_doc()
	{
		if ($this->isLoggedIn()) {
			$doc_id = $this->input->post('doc_id');
			//echo '<pre>'; print_r($json_decode); exit;
			$response = $this->Business_model->delete_business_doc($doc_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Document Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}



	/*======= MANAGE SUBSCRIPTION PACKAGES ========*/
	public function manage_subscription_packages()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['subscription_packages'] = $this->Business_model->get_all_subscription_packages();
			// echo "<pre>"; print_r($data['subscription_packages']); exit;
			$data['business'] = $this->Business_model->manage_business();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Subscription Packages";
			$this->load->view('backend/business/manage_subscription_packages', $data);
		} else {
			redirect(base_url());
		}
	}

	/*======= load VIEW add SUBSCRIPTION PACKAGES ========*/
	public function add_subscription_packages()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['modules'] = $this->Business_model->get_all_modules();
			$data['sub_package_types'] = $this->Business_model->get_sub_package_types();
			// echo "<pre>"; print_r($data['modules']); exit;
			$data['business'] = $this->Business_model->manage_business();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Subscription Package";
			$this->load->view('backend/business/add_subscription_packages', $data);
		} else {
			redirect(base_url());
		}
	}


	/*======= SAVE SUBSCRIPTION PACKAGES ========*/
	public function save_subscription_package()
	{
		// echo "<pre>"; print_r($_POST); exit;
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'price',
						'label' => 'Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'type',
						'label' => 'Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'modules[]',
						'label' => 'Module',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Business_model->add_subscription_package($_POST);
					$redirect_link = base_url('subscription/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Subscriptions Package Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	public function edit_subscription_packages()
	{

		$vendor_id = $this->uri->segment(3);
		$user_id = $this->session->userdata['id'];
		$data['user'] = $this->Users_model->get_user_by_id($user_id);
		$group = $this->session->userdata['role'];
		$data['menu'] = $this->Menu_model->getMenuItems($group);
		$data['modules'] = $this->Business_model->get_all_modules();
		$data['sub_package_types'] = $this->Business_model->get_sub_package_types();
		$data['subscription_package'] = $this->Business_model->get_subscription_packages_by_id($vendor_id);
		// echo "<pre>"; print_r($data['subscription_package']); exit;
		$data['company_info'] = $this->Settings_model->get_company_info();
		$data['title'] = $data['company_info']['name'] . " | Edit Subscription Detail";
		$this->load->view('backend/business/edit_subscription_package', $data);
	}

	/*======= SAVE SUBSCRIPTION PACKAGES ========*/
	public function update_subscription_package()
	{
		// echo "<pre>"; print_r($_POST); exit;
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'price',
						'label' => 'Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'type',
						'label' => 'Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'modules[]',
						'label' => 'Module',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$package_id = $this->input->post('package_id');
					$this->Business_model->update_subscription_package($_POST, $package_id);
					$redirect_link = base_url('subscription/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Subscriptions Package Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	public function delete_manage_subscription()
	{
		if ($this->isLoggedIn()) {
			$sub_package_id = $this->input->post('sub_package_id');;

			$check = $this->Business_model->delete_subcription_package($sub_package_id);
			// print_r($check); exit;
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Subscription Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE BUSINESS BY ID =========*/
	public function get_business_by_id()
	{
		if ($this->isLoggedIn()) {
			$business_id = $this->input->post('business_id');
			// print_r($business_id); exit;

			if ($business_id == "All") {
				$data['business'] = $this->Business_model->manage_business();
			} else {
				$data['business'] = $this->Business_model->getsingle_business_by_id($business_id);
			}
			// print_r($data['business']); exit;
			$html = $this->load->view('backend/business/manage_business_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}


	public function subscription_packages_detail()
	{
		$vendor_id = $this->uri->segment(3);
		$user_id = $this->session->userdata['id'];
		$data['user'] = $this->Users_model->get_user_by_id($user_id);
		$group = $this->session->userdata['role'];
		$data['menu'] = $this->Menu_model->getMenuItems($group);
		$data['modules'] = $this->Business_model->get_all_modules();
		$data['subscription_package'] = $this->Business_model->get_subscription_packages_by_id($vendor_id);
		// echo "<pre>"; print_r($data['subscription_package']); exit;
		$data['company_info'] = $this->Settings_model->get_company_info();
		$data['title'] = $data['company_info']['name'] . " | Subscription Detail";
		$this->load->view('backend/business/subscription_package_detail', $data);
	}






	/*======= MANAGE CUTOMER SUBSCRITPION ========*/
	public function manage_subscriptions()
	{
		if ($this->isLoggedIn()) {

			$data['business_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['subscriptions'] = $this->Business_model->get_business_subscriptions($data['business_id']);
			$data['subscription_packages'] = $this->Business_model->get_all_subscription_packages();
			$data['business'] = $this->Business_model->get_business_by_id($data['business_id']);

			// echo "<pre>"; print_r($data['subscriptions']); exit;

			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage SubscriptionS";
			$this->load->view('backend/business/manage_subscriptions', $data);
		} else {
			redirect(base_url());
		}
	}


	public function get_subscription_status()
	{
		if ($this->isLoggedIn()) {

			$subscription_id = $this->input->post('subscription_id');
			$data['all_subs_packages'] = $this->Business_model->get_all_subscription_packages();
			$data['get_status'] = $this->Business_model->get_subscription_status_by_id($subscription_id);
			echo json_encode(array('data' => $data));
		} else {

			redirect(base_url());
		}
	}


	public function update_subscription_detail()
	{

		// echo "<pre>"; print_r($_POST); exit;
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(

					array(
						'field' => 'package_type',
						'label' => 'Package Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'end_date',
						'label' => 'End Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'status',
						'label' => 'Status',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'admin_note',
						'label' => 'Note',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {
					$subscription_id = $this->input->post('subscription_id');
					if (isset($_POST['my-checkbox'])) {
						$this->Business_model->update_subscription_detail($_POST, $subscription_id);
						echo json_encode(array("msg_type" => "success", "message" => "Updated Successfully"));
					} else {

						$this->Business_model->update_subscription_detail($_POST, $subscription_id);
						//$registration_id = $this->input->post('registration_id');
						//$redirect_link = base_url('registration/detail/'.$registration_id);
						echo json_encode(array("msg_type" => "success", "message" => "Updated Successfully"));
					}
				}
			}
		} else {
			redirect(base_url());
		}
	}

	public function add_new_subscription()
	{

		// echo "<pre>"; print_r($_POST); exit;
		if ($this->isloggedIn()) {
			// echo '<pre>'; print_r($_POST); exit;

			if ($_POST) {
				$config = array(
					array(
						'field' => 'business_name',
						'label' => 'Business Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_type',
						'label' => 'Package Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'start_date',
						'label' => 'Start Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'end_date',
						'label' => 'End Date',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'status',
						'label' => 'Status',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Business_model->add_subscription($_POST);
					// $redirect_link = base_url('subscription/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Subscriptions Package Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}




	/*========= ADD ADMIN NOTE ==========*/
	public function save_note()
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
					$this->Business_model->add_note($_POST);
					$business_id = $this->input->post('business_id');
					$redirect_link = base_url('business/detail/' . $business_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully", "redirect_link" => $redirect_link));
				} else {

					$this->Business_model->add_note($_POST);
					//$registration_id = $this->input->post('registration_id');
					//$redirect_link = base_url('registration/detail/'.$registration_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully"));
				}
			}
		}
	}


	/*========= DELETE NOTE ===========*/
	public function delete_note()
	{
		if ($this->isLoggedIn()) {
			$note_id = $this->input->post('note_id');

			$check = $this->Business_model->delete_note($note_id);
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Note Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}


	// MANAGE BUSSINESS INVOICES

	public function manage_business_invoices()
	{
		if ($this->isLoggedIn()) {

			$data['business_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['invoices'] = $this->Business_model->get_invoice_by_id($data['business_id']);
			$data['active_sub'] = $this->Business_model->get_active_subscription($data['business_id']);
			$data['subscription_packages'] = $this->Business_model->get_all_subscription_packages();
			$data['payment_methods'] = $this->Business_model->get_all_payment_method();
			// echo "<pre>"; print_r($data['active_sub']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Invoice";
			$this->load->view('backend/business/invoice/manage_invoices', $data);
		} else {
			redirect(base_url());
		}
	}

	public function create_new_invoice()
	{

		if ($_POST) {
			$config = array(
				array(
					'field' => 'amount',
					'label' => 'Invoice Amount',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'due_date',
					'label' => 'Due Date',
					'rules' => 'trim|required'
				)
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == false) {
				echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
			} else {

				$check = $this->Business_model->create_invoice($_POST);
				if (!empty($check)) {
					$business_id = $this->input->post('business_id');
					// print_r($variable); exit;
					$redirect_link = base_url('manage/manage-invoices/' . $business_id);
					echo json_encode(array("msg_type" => "success", "message" => "Subscriptions Package Added Successfully", "redirect_link" => $redirect_link));
				} else {
					echo json_encode(array("msg_type" => "error", "message" => "Something Went Wroung"));
				}
			}
		}
	}


	public function delete_invoice()
	{
		if ($this->isLoggedIn()) {
			$invoice_di = $this->input->post('invoice_id');

			$check = $this->Business_model->delete_invoice($invoice_di);
			// print_r($check); exit;
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Invoice Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}


	public function get_invoice()
	{
		if ($this->isLoggedIn()) {

			$data['invoice_id'] = $this->input->post('invoice_id');
			$data['get_invoice'] = $this->Business_model->get_one_invoice($data['invoice_id']);
			$data['remaining_amount'] = $this->Business_model->remaining_invoice_amount($data['invoice_id']);
			echo json_encode(array('data' => $data));
		} else {
			redirect(base_url());
		}
	}


	/*======= SAVE DOCUMENT========*/
	public function add_document()
	{
		if ($this->isloggedIn()) {
			// echo "<pre>"; print_r($_POST); exit;
			if ($_POST) {
				$config = array(
					array(
						'field' => 'doc_title',
						'label' => 'Document Title',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Business_model->upload_doc($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Document Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	// BUSINESS CONTACT SECITON
	public function get_customer_contact()
	{
		if ($this->isLoggedIn()) {
			$data['bc_id'] = $this->input->post('bc_id');
			$data['customer_contact_type'] = $this->Business_model->get_one_business_info($data['bc_id']);
			// $data['contact_types'] = $this->Administration_model->contact_types();
			// echo "<pre>" ; print_r($data['customer_contact_type']); exit;
			$html = $this->load->view('backend/business/business_contact_type_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}


	public function update_contact_type_detail()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'person_title',
						'label' => 'Person Title',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'person_name',
						'label' => 'Person Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'person_email',
						'label' => 'Person Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'person_contact_no',
						'label' => 'Person Contact',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$bc_id = $this->input->post('bc_id');
					// echo "<pre>" ; print_r($_POST); exit;
					$this->Business_model->update_business_type_detail($_POST, $bc_id);
					echo json_encode(array("msg_type" => "success", "message" => "Contact Successfully Updated"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

		/*========== ADD PAYMENT ===========*/
	public function add_payment()
	{
//		echo '<pre>'; print_r($_POST); exit;
		if ($_POST) {
			$config = array(
				array(
					'field' => 'payment_method',
					'label' => 'Payment Method',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'amount',
					'label' => 'Amount',
					'rules' => 'trim|required'
				)
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == false) {
				echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
			} else {

				$this->Business_model->add_payment($_POST);
				echo json_encode(array("msg_type" => "success", "message" => "Payment Added Successfully"));
			}
		}
	}

   // /======= DELETE Business contact =========/
	public function delete_business_contact()
	{
		if ($this->isLoggedIn()) {
			$bc_id = $this->input->post('bc_id');
			//echo '<pre>'; print_r($json_decode); exit;
			$response = $this->Business_model->delete_business_contact($bc_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Delete Contact Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	public function get_invoice_detail()
	{
		if ($this->isLoggedIn()) {
			$invoice_id = $this->input->post('invoice_id');
			$data['paid_invoice'] = $this->Business_model->get_paidinvoice_by_id($invoice_id);
//			echo'<pre>'; print_r($data['paid_invoice']); exit;
			$html = $this->load->view('backend/business/invoice/get_invoice_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}

	//	FUNCTION FOR RENDERING INVOICE
	public function get_invoice_details()
	{
		if ($this->isLoggedIn())
		{
			$data['invoice_id'] = $this->input->post('invoice_id');
			$data['print_invoice'] = $this->Business_model->get_invoice($data['invoice_id']);
//			echo '<pre>'; print_r($data['print_invoice']) ; exit;
			$html = $this->load->view('backend/business/invoice/invoice_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		}
		else
		{
			redirect(base_url());
		}

	}

	public function delete_payment_invoice()
	{
		if ($this->isLoggedIn())
		{
			$data['payment_id'] =$this->input->post('payment_id');
			$data['invoice_id'] = $this->input->post('invoice_id');
			// echo '<pre>'; print_r($data['invoice_id'] ) ; 

			$data['print_invoice'] = $this->Business_model->delete_invoice_payment($data['payment_id'], $data['invoice_id']);
			$html = $this->load->view('backend/business/invoice/invoice_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		}
		else
		{
			redirect(base_url());
		}

	}

}
