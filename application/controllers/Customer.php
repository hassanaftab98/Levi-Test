<?php

class Customer extends MY_Controller
{
	/*======== CREATE CUSTOMER ========*/
	public function add_customer()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['vendor_type'] = $this->Administration_model->get_all_crew();
			$data['contact_types'] = $this->Administration_model->contact_types();
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Customer";
			$this->load->view('backend/customers/add_customer', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= SAVE CUSTOMER =========*/
	public function save_customer()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'first_name',
						'label' => 'First Name',
						'rules' => 'trim|required'
					),
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
						'field' => 'customer_address1',
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
					),
					array(
						'field' => 'name',
						'label' => 'User Name',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Customer_model->add_customer($_POST);
					$redirect_link = base_url('customer/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Customer Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*========= MANAGE CUSTOMERS =========*/
	public function manage_customers()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['customers'] = $this->Customer_model->get_all_customers();
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Customers";
			$this->load->view('backend/customers/manage_customers', $data);
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE CUSTOMERS =========*/
	public function get_customer_by_id()
	{
		if ($this->isLoggedIn()) {
			$customer_id = $this->input->post('customer_id');
			// print_r($customer_id); exit;

			if ($customer_id == "All") {
				$data['customers'] = $this->Customer_model->get_all_customers();
			} else {
				$data['customers'] = $this->Customer_model->get_customer_detail($customer_id);
			}
			// print_r($data['customers']); exit;
			$html = $this->load->view('backend/customers/manage_customer_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}

	/*========= EDIT CUSTOMER =========*/
	public function edit_customer()
	{
		if ($this->isLoggedIn()) {

			$data['customer_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['customer'] = $this->Customer_model->get_customer_detail($data['customer_id']);
			// echo "<pre>"; print_r($data['customer']); exit;
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Edit Customer";
			$this->load->view('backend/customers/edit_customer', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========== CUSTOMER ADDITIONAL CONTACTS ===========*/
	public function customer_additional_contacts()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['customer_id'] = $this->uri->segment(3);
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['types'] = $this->Administration_model->get_customer_contact_types();
			$data['contacts'] = $this->Customer_model->all_additional_contacts($data['customer_id']);
			// echo "<pre>" ; print_r($data['contacts']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Customer Additional Contacts";
			$this->load->view('backend/customers/manage_additional_contacts', $data);
		} else {
			redirect(base_url());
		}
	}


	/*==========  	VIEW CUSTOMER ADDITIONAL CONTACTS ===========*/
	public function get_additional_contact_details()
	{
		if ($this->isLoggedIn()) {
			$data['contact_id'] = $this->input->post('contact_id');
			$data['customer_id'] = $this->input->post('customer_id');
			$data['contacts'] = $this->Customer_model->get_additional_contact_by_id($data['customer_id'], 	$data['contact_id']);
			// echo "<pre>" ; print_r($data['contacts'][0]); exit;
			echo json_encode(array('data' => $data));
			// $this->load->view('backend/customers/manage_additional_contacts', $data);
		} else {
			redirect(base_url());
		}
	}


	/*==========  	EDIT CUSTOMER ADDITIONAL CONTACTS ===========*/
	public function edit_additional_contact_details()
	{
		if ($this->isLoggedIn()) {
			$data['contact_id'] = $this->input->post('contact_id');
			$data['customer_id'] = $this->input->post('customer_id');
			$data['types'] = $this->Administration_model->get_customer_contact_types();
			$data['contacts'] = $this->Customer_model->get_additional_contact_by_id($data['customer_id'], 	$data['contact_id']);
			// echo "<pre>" ; print_r($data['contacts'][0]); exit;
			$html = $this->load->view('backend/customers/edit_additonal_contact_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
			// echo json_encode(array('data' => $data));
			// $this->load->view('backend/customers/manage_additional_contacts', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========== SAVE ADDITIONAL CONTACT INFO ==========*/
	public function save_additional_contact_info()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'c_type',
						'label' => 'Contact Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_name',
						'label' => 'Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_email',
						'label' => 'Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_contact_no',
						'label' => 'Contact No',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_zip',
						'label' => 'ZipCode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_city',
						'label' => 'city',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_state',
						'label' => 'State',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Customer_model->additional_contacts($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Contact Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*========== SAVE ADDITIONAL CONTACT INFO ==========*/
	public function update_contact_type()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'c_type',
						'label' => 'Contact Type',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_name',
						'label' => 'Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_email',
						'label' => 'Email',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_contact_no',
						'label' => 'Contact No',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_zip',
						'label' => 'ZipCode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_city',
						'label' => 'city',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'c_state',
						'label' => 'State',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					// echo "<pre>"; print_r($_POST); exit;

					$contact_info_id = $this->input->post('contact_id');
					$this->Customer_model->edit_additional_contacts($_POST, $contact_info_id);
					echo json_encode(array("msg_type" => "success", "message" => "Contact Updated Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*======= DELETE ADDITIONAL CONTACT ========*/
	public function delete_additional_contact()
	{
		if ($this->isLoggedIn()) {
			$contact_info_id = $this->input->post('contact_info_id');;

			$check = $this->Customer_model->delete_additional_contact($contact_info_id);
			//print_r($check); exit;
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Contact Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}

	/*======== CUSTOMER DETAIL =========*/
	public function customer_detail()
	{
		if ($this->isLoggedIn()) {

			$data['customer_id'] = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$data['detail'] = $this->Customer_model->get_customer_detail($data['customer_id']);
			$data['contacts'] = $this->Customer_model->get_customer_contacts($data['customer_id']);
			// echo '<pre>'; print_r($data['contacts']); exit;
			$data['shipment'] = $this->Customer_model->customer_shipment_details($data['customer_id']);
			$data['customer_notes'] = $this->Customer_model->get_customer_notes($data['customer_id']);
			$data['docs'] = $this->Customer_model->get_document_by_id($data['customer_id']);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Customer Detail";
			$this->load->view('backend/customers/customer_detail', $data);
		} else {
			redirect(base_url());
		}
	}


	/*========= ADD Vendor NOTE ==========*/
	public function save_customer_note()
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
					$this->Customer_model->add_customer_note($_POST);
					$vendor_id = $this->input->post('vendor_id');
					$redirect_link = base_url('vendor/detail/' . $vendor_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully", "redirect_link" => $redirect_link));
				} else {

					$this->Customer_model->add_customer_note($_POST);
					//$registration_id = $this->input->post('registration_id');
					//$redirect_link = base_url('registration/detail/'.$registration_id);
					echo json_encode(array("msg_type" => "success", "message" => "Note Added Successfully"));
				}
			}
		}
	}

	/*========= DELETE ADMIN NOTE ===========*/
	public function delete_customer_note()
	{
		if ($this->isLoggedIn()) {
			$customer_note_id = $this->input->post('customer_note_id');

			$check = $this->Customer_model->delete_customer_note($customer_note_id);
			if ($check == "1") {
				echo json_encode(array("msg_type" => "success", "message" => "Note Deleted Successfully"));
			}
		} else {
			redirect(base_url());
		}
	}


	// scrab function
	public function get_package_data()
	{
		if ($this->isLoggedIn()) {
			$data['package_id'] = $this->input->post('package_id');
			$data['pkg'] = $this->Administration_model->get_package_by_id($data['package_id']);

			echo json_encode(array('msg_type' => 'success', 'data' => $data['pkg'], true));
		} else {
			redirect(base_url());
		}
	}


	public function invoice()
	{

		if ($this->isLoggedIn()) {

			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['packages'] = $this->Customer_model->get_all_package();
			$data['items'] = $this->Administration_model->get_all_items();
			// echo "<pre>"; print_r($data['items']); exit;
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Customer Detail";
			$this->load->view('backend/customers/invoice/invoice', $data);
		} else {
			redirect(base_url());
		}
	}

	// /========= GET ITEM DATA ==========/
	public function get_item_data()
	{
		if ($this->isLoggedIn()) {
			$data['item_id'] = $this->input->post('item_id');
			$data['item'] = $this->Administration_model->get_item_by_id($data['item_id']);
			echo json_encode(array('msg_type' => 'success', 'data' => $data['item'], true));
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

					$this->Customer_model->upload_doc($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Document Added Successfully"));
				}
			}
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
			$response = $this->Customer_model->delete_business_doc($doc_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Document Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	// /======= DELETE Business DOCUMENT =========/
	public function delete_customer()
	{
		if ($this->isLoggedIn()) {
			$customer_id = $this->input->post('customer_id');
			// echo '<pre>'; print_r($customer_id); exit;
			$response = $this->Customer_model->delete_customer($customer_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Customer Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= SAVE CUSTOMER =========*/
	public function update_customer()
	{
		if ($this->isLoggedIn()) {
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
						'field' => 'customer_address1',
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
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$customer_id = $this->input->post('customer_id');
					// print_r($customer_id); exit;
					$this->Customer_model->update_customer($_POST, $customer_id);
					$redirect_link = base_url('customer/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Customer Update Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	public function get_customer_contact()
	{
		if ($this->isLoggedIn()) {
			$data['customer_contact_id'] = $this->input->post('customer_contact_id');
			$data['customer_contact_type'] = $this->Customer_model->get_one_customer_info($data['customer_contact_id']);
			$data['contact_types'] = $this->Administration_model->contact_types();
			// echo "<pre>" ; print_r($data['contact_types']); exit;
			$html = $this->load->view('backend/customers/customer_contact_type_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));
		} else {
			redirect(base_url());
		}
	}

	// UPDATE CUSTOMER CONTACTS
	public function update_contact_type_detail()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'person_title',
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

					$contact_type_id = $this->input->post('contact_type_id');
					// echo "<pre>" ; print_r($_POST); exit;
					$this->Customer_model->update_contact_type_detail($_POST, $contact_type_id);
					echo json_encode(array("msg_type" => "success", "message" => "Contact Successfully Updated"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


		// /======= DELETE Business Contact =========/
	public function delete_customer_contact()
	{
		if ($this->isLoggedIn()) {
			$customer_contact_id = $this->input->post('customer_contact_id');
			//echo '<pre>'; print_r($json_decode); exit;
			$response = $this->Customer_model->delete_customer_contach($customer_contact_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Delete Contact Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}



}
