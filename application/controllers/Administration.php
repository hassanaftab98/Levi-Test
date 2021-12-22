<?php

class Administration extends MY_Controller
{
	/*========= ADD LOCATION =========*/
	public function add_location()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Location";
			$this->load->view('backend/location/add_location', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= MANAGE LOCATION ==========*/
	public function manage_locations()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['location'] = $this->Administration_model->get_all_locations();
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Locations";
			$this->load->view('backend/location/manage_locations', $data);
		} else {
			redirect(base_url());
		}
	}


	/*========= EDIT LOCATION =========*/
	public function edit_location()
	{
		if ($this->isLoggedIn()) {
			$location_id = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['location'] = $this->Administration_model->get_location_by_id($location_id);
			//   echo "<pre>" ; print_r(  $data['location']); die;
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Edit Location";
			$this->load->view('Backend/location/edit_location', $data);
		} else {
			redirect(base_url());
		}
	}

	/*==== DEL location	 ====*/
	public function delete_location()
	{
		if ($this->isLoggedIn()) {
			$location_id = $this->input->post('id');
			$response = $this->Administration_model->delete_location($location_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Location Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}
	/*======== UPDATE Location ==========*/
	public function update_location()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'location_name',
						'label' => 'Location Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_address',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_city',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_state',
						'label' => 'Taxable',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_zipcode',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_phone_1',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$location_id = $this->input->post('location_id');
					$redirect_link = base_url('Administration/manage_locations');
					$this->Administration_model->edit_location($_POST, $location_id);
					echo json_encode(array("msg_type" => "success", "message" => "Location Updated Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*========= ADD PACKAGE ==========*/
	public function add_package()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Package";
			$this->load->view('backend/packages/add_package', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= Manage PACKAGE ==========*/
	public function manage_package()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['packages'] = $this->Administration_model->get_all_packages();
			// $data['g']
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Package";
			$this->load->view('backend/packages/manage_packages', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= Manage PACKAGE ==========*/
	public function edit_package()
	{
		if ($this->isLoggedIn()) {

			$package_id = $this->input->post('package_id');
			$data['package'] = $this->Administration_model->get_package_by_id($package_id);
			$this->load->view('backend/packages/package_ajax', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= CUSTOMER CONTACT TYPES ==========*/
	public function customer_contact_type()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['types'] = $this->Administration_model->get_customer_contact_types();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Customer Contact Types";
			$this->load->view('backend/customers/contact_types', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= SAVE CUSTOMER CONTACT TYPE ==========*/
	public function save_customer_contact_type()
	{
		if ($this->isLoggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'type',
						'label' => 'Contact Type',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Administration_model->customer_contact_type($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Contact type added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*======== Save Item ==========*/
	public function save_package()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Item Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_description',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_price',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_taxable',
						'label' => 'Taxable',
						'rules' => 'trim|required'
					)

				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {
					//   echo "<pre>"; print_r($_POST); exit;
					// $user_id = $this->input->post('user_id');
					$this->Administration_model->add_package($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Item Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*======== EditPackage Detail ==========*/
	public function save_edit_package()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Item Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_description',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'package_price',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					)

				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {
					//   echo "<pre>"; print_r($_POST); exit;
					$package_id = $this->input->post('package_id');
					$redirect_link = base_url('package/manage');
					$this->Administration_model->edit_package($_POST, $package_id);
					echo json_encode(array("msg_type" => "success", "message" => "Package Detail Update Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= ADD Item =========*/
	public function add_item()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Add Item";
			$this->load->view('Backend/items/add_item', $data);
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE Items ==========*/
	public function manage_items()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['items'] = $this->Administration_model->get_all_items();
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Item";
			$this->load->view('backend/items/manage_items', $data);
		} else {
			redirect(base_url());
		}
	}


	/*========= ADD Item =========*/
	public function edit_item()
	{
		if ($this->isLoggedIn()) {
			$item_id = $this->uri->segment(3);
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['item'] = $this->Administration_model->get_item_by_id($item_id);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Edit Item";
			$this->load->view('Backend/items/edit_item', $data);
		} else {
			redirect(base_url());
		}
	}



	/*======== Save Item ==========*/
	public function save_item()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Item Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_description',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_price',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'taxable',
						'label' => 'Taxable',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_pickup',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Administration_model->add_item($_POST);
					$redirect_link = base_url('item/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Item Added Successfully", "redirect_link" => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*======== EDIT SAVE Item ==========*/
	public function update_item()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Item Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_description',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_price',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'taxable',
						'label' => 'Taxable',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_pickup',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {
					//   echo "<pre>"; print_r($_POST); exit;
					$item_id = $this->input->post('item_id');
					$redirect_link = base_url('Administration/manage_items');
					$this->Administration_model->edit_item($_POST, $item_id);
					echo json_encode(array("msg_type" => "success", "message" => "Item Updated Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}



	/*======== Save Location ==========*/
	public function save_location()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'location_name',
						'label' => 'Location Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_address',
						'label' => 'Item Description',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_city',
						'label' => 'Item Price',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_state',
						'label' => 'Taxable',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_zipcode',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'location_phone_1',
						'label' => 'Item Pickup Request',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {


					$this->Administration_model->add_location($_POST);
					$redirect_link = base_url('location/manage');
					echo json_encode(array("msg_type" => "success", "message" => "Location Added Successfully", 'redirect_link' => $redirect_link));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= PACKAGE ITEMS =========*/
	public function package_items()
	{
		if ($this->isLoggedIn()) {
			$data['package_id'] = $this->uri->segment(3);
			$data['items'] = $this->Administration_model->get_all_items();
			$data['package_items'] = $this->Administration_model->get_package_items($data['package_id']);
			// echo "<pre>"; print_r($data['package_items']); exit;
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Package Items";
			$this->load->view('backend/packages/package_items', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========= Manage PACKAGE 	ITEM==========*/
	public function get_package_item()
	{
		if ($this->isLoggedIn()) {

			$data['package_id'] = $this->uri->segment(3);
			$package_item_id = $this->input->post('package_item_id');
			$data['items'] = $this->Administration_model->get_all_items();
			$data['package_items'] = $this->Administration_model->get_package_items_by_id($package_item_id);
			// echo "<pre>"; print_r($data['package_items']); exit;
			$this->load->view('backend/packages/packages_item_ajax', $data);
		} else {
			redirect(base_url());
		}
	}

	public function add_package_item()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'item_id',
						'label' => 'Location Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'item_qty',
						'label' => 'Item Quantity',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {
					//   echo "<pre>"; print_r($_POST); exit;
					// $user_id = $this->input->post('user_id');
					$this->Administration_model->add_item_package($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Package Item Has Added"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE EVENT ==========*/
	public function manage_event_types()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['events'] = $this->Administration_model->get_all_event();
			// echo "<pre>"; print_r($data['events']); exit;
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Event Types";
			$this->load->view('backend/events/event_types', $data);
		} else {
			redirect(base_url());
		}
	}



	public function save_event_type()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Event Name',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Administration_model->add_event($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Event type Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*==== DEL EVENT ====*/
	public function delete_event_type()
	{
		if ($this->isLoggedIn()) {
			$event_type_id = $this->input->post('event_type_id');
			$response = $this->Administration_model->delete_event($event_type_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Event Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE CRWE ==========*/
	public function manage_crew_types()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['crews'] = $this->Administration_model->get_all_crew();
			// echo "<pre>"; print_r($data['events']); exit;
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Crew Types";
			$this->load->view('backend/crew/crew_types', $data);
		} else {
			redirect(base_url());
		}
	}


	// SAVE CREW
	public function save_crew_type()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Crew Name',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Administration_model->add_crew($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Crew type Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}

	/*==== DEL CREW ====*/
	public function delete_crew_type()
	{
		if ($this->isLoggedIn()) {
			$crew_type_id = $this->input->post('crew_type_id');
			$response = $this->Administration_model->delete_crew($crew_type_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Event Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	/*========== MANAGE TAX STATUS TYPES ==========*/
	public function manage_tax_types()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['tax_type'] = $this->Administration_model->get_all_tax_type();
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | Manage Tax Types";
			$this->load->view('backend/system_settings/manage_tax_types', $data);
		} else {
			redirect(base_url());
		}
	}

	/*========== SAVE TAX STATUS TYPE ============*/
	public function save_tax_type()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'name',
						'label' => 'Tax Type',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$this->Administration_model->add_tax_status_type($_POST);
					echo json_encode(array("msg_type" => "success", "message" => "Tax type Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	/*==== DEL CREW ====*/
	public function delete_tax_type()
	{
		if ($this->isLoggedIn()) {
			$tax_status_id = $this->input->post('tax_status_id');
			$response = $this->Administration_model->delete_tax_type($tax_status_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Tax Type Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}


	/*========= MANAGE EVENT ==========*/
	public function get_location_by_zipcode()
	{
		if ($this->isLoggedIn()) {
			$zicode = $this->input->post('zipcode');
			$data['zipcodes'] = $this->Administration_model->get_location_by_zipcode($zicode);
			echo json_encode(array('msg_type' => 'success', 'data' => $data['zipcodes'], true));
		} else {
			redirect(base_url());
		}
	}


	public function delete_contact_type()
	{
		if ($this->isLoggedIn()) {
			$customer_contact_type_id = $this->input->post('contact_type_id');
			//			print_r($customer_contact_type_id); exit;
			$response = $this->Administration_model->delete_contact_type($customer_contact_type_id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Event Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	public function edit_customer_contact_type()
	{

		if ($this->isLoggedIn()) {

			$customer_contact_type_id = $this->input->post('contumer_contact_type_id');
			// print_r($customer_contact_type_id ); exit;
			$data['get_contact_type_by_id'] = $this->Administration_model->get_customer_contact_types_id($customer_contact_type_id);
			// print_r($data['get_contact_type_by_id'] ); exit;
			echo json_encode(array('data' => $data['get_contact_type_by_id']));
			// $this->load->view('backend/customers/contact_types', $data);
		} else {
			redirect(base_url());
		}
	}

	public function update_contact_type()
	{
		if ($this->isloggedIn()) {
			if ($_POST) {
				$config = array(
					array(
						'field' => 'type',
						'label' => 'Contact Type',
						'rules' => 'trim|required'
					)
				);
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == false) {
					echo json_encode(array("msg_type" => "error", "message" => validation_errors()));
				} else {

					$customer_contact_type_id = $this->input->post('contact_type_id');
					$this->Administration_model->update_contact_type($_POST, $customer_contact_type_id);
					echo json_encode(array("msg_type" => "success", "message" => "Tax type Added Successfully"));
				}
			}
		} else {
			redirect(base_url());
		}
	}


	// GET PACKAGES ITEM BY ITEM GRID
	public function get_packages_item()
	{

		if ($this->isLoggedIn()) {

			$package_id = $this->input->post('package_id');
			$data['package_items'] = $this->Administration_model->get_package_items($package_id);
			// echo "<pre>"; print_r($data['package_items']); exit;
			$html = $this->load->view('backend/packages/packages_item_grid_ajax', $data, true);
			echo json_encode(array("msg_type" => "success", "message" => "Data retrieved Successfully", "html" => $html));

		} else {
			redirect(base_url());
		}
	}


	public function delete_package()
	{
		if ($this->isLoggedIn()) {
			$id = $this->input->post('id');
			// print_r($id); exit;
			$response = $this->Administration_model->delete_package($id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Package Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	
	public function delete_item()
	{
		if ($this->isLoggedIn()) {
			$id = $this->input->post('id');
			// print_r($id); exit;
			$response = $this->Administration_model->delete_item($id);
			if ($response == true) {
				echo json_encode(array('msg_type' => 'success', 'message' => 'Item Deleted Successfully..!'));
			} else {
				echo json_encode(array('msg_type' => 'error', 'message' => 'Something Went Wrong'));
			}
		} else {
			redirect(base_url());
		}
	}

	public function view_calender()
	{
		if ($this->isLoggedIn()) {
			$user_id = $this->session->userdata['id'];
			$data['user'] = $this->Users_model->get_user_by_id($user_id);
			$group = $this->session->userdata['role'];
			$data['menu'] = $this->Menu_model->getMenuItems($group);
			$data['vendor'] = $this->Vendor_model->get_all_vendor();
			$data['menu_items'] = $this->Menu_model->getAllMenuItems('menus');
			$data['company_info'] = $this->Settings_model->get_company_info();
			$data['title'] = $data['company_info']['name'] . " | View Calendar";
			$this->load->view('backend/calendar/view_calendar', $data);
		} else {
			redirect(base_url());
		}

	}
}
