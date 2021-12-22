<?php

class Administration_model extends CI_Model
{
	/*======= ADD LOCATION =========*/
	public function add_location($data)
	{
		$location = array(
			'location_name'    => $data['location_name'],
			'location_address' => $data['location_address'],
			'location_city'    => $data['location_city'],
			'location_state'   => $data['location_state'],
			'location_zipcode' => $data['location_zipcode'],
			'location_phone_1' => $data['location_phone_1'],
			'location_phone_2' => $data['location_phone_2'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('event_locations', $location);
	}

	/*======= EDIT LOCATION ========*/
	public function edit_location($data, $location_id)
	{
		$location = array(
			'location_name'    => $data['location_name'],
			'location_address' => $data['location_address'],
			'location_city'    => $data['location_city'],
			'location_state'   => $data['location_state'],
			'location_zipcode' => $data['location_zipcode'],
			'location_phone_1' => $data['location_phone_1'],
			'location_phone_2' => $data['location_phone_2'],
			'update_by'        => $this->session->userdata['id'],
			'update_at'        => date('Y-m-d h:i:s')
		);
		$this->db->where('location_id', $location_id)->update('event_locations', $location);
	}

	/*======== GET ALL LOCATIONS ==========*/
	public function get_all_locations()
	{
		return $this->db->select('*')->from('event_locations')->get()->result_array();
	}

	/*========= GET LOCATION BY ID ==========*/
	public function get_location_by_id($location_id)
	{
		$query = $this->db->select('*')->from('event_locations')->where('location_id', $location_id)->get()->result_array();
		return $query[0];
	}

	/*========= GET LOCATION BY ZIPCODE ==========*/
	public function get_location_by_zipcode($zipcode)
	{
		$query = $this->db->select('*')->from('event_locations')->where('location_zipcode', $zipcode)->get()->result_array();
		return $query;
	}

	/*======== ADD ITEM =========*/
	public function add_item($data)
	{
		$items = array(
			'item_name'    => $data['name'],
			'item_price'   => $data['item_price'],
			'item_description'   => $data['item_description'],
			'item_taxable' => $data['taxable'],
			'item_pickup_required'  => $data['item_pickup'],
		);
		$this->db->insert('items', $items);
	}

	/*========= EDIT ITEM ============*/
	public function edit_item($data, $item_id)
	{
		$items = array(
			'item_name'    => $data['name'],
			'item_price'   => $data['item_price'],
			'item_description'   => $data['item_description'],
			'item_taxable' => $data['taxable'],
			'item_pickup_required'  => $data['item_pickup'],
		);
		$this->db->where('item_id', $item_id)->update('items', $items);
	}

	/*========= GET ALL ITEMS ===========*/
	public function get_all_items()
	{
		return $this->db->select('*')->from('items')
		->where('is_delete','0')
		->get()->result_array();
	}

	/*========= GET ITEM BY ID ==========*/
	public function get_item_by_id($item_id)
	{
		$query = $this->db->select('*')->from('items')->where('item_id', $item_id)->get()->result_array();
		return $query[0];
	}

	/*======== ADD PACKAGE =========*/
	public function add_package($data)
	{
		$items = array(
			'package_name'    => $data['name'],
			'package_description'   => $data['package_description'],
			'package_price'   => $data['package_price'],
			'package_taxable' => $data['package_taxable'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('packages', $items);
	}

	/*======== Edit PACKAGE =========*/
	public function edit_package($data, $package_id)
	{
		$items = array(
			'package_name'    => $data['name'],
			'package_description'   => $data['package_description'],
			'package_price'   => $data['package_price'],
			'package_taxable' => $data['package_taxable']
		);

		$this->db->where('package_id', $package_id)->update('packages', $items);

		// $this->db->insert('packages', $items);
	}

	/*========= GET ALL PACKAGES =========*/
	public function get_all_packages()
	{
		return $this->db->select('*')->from('packages')
		->where('is_delete','0')
		->get()->result_array();
	}

	/*======= GET PACKAGE BY ID ========*/
	public function get_package_by_id($package_id)
	{
		$query = $this->db->select('*')->from('packages')->where('package_id', $package_id)->get()->result();
		return $query[0];
	}

	/*======== ADD ITEM IN PACKAGE =========*/
	public function add_item_package($data)
	{
		$item = array(
			'package_id' => $data['package_id'],
			'item_id'  => $data['item_id'],
			'item_qty' => $data['item_qty'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('package_items', $item);
	}

	/*======== GET PACKAGE ITEMS =========*/
	public function get_package_items($package_id)
	{
		return $this->db->select('pt.*,t.item_name,t.item_description, p.package_name')
			->from('package_items as pt')
			->join('items as t', 'pt.item_id = t.item_id', 'left')
			->join('packages as p', 'pt.package_id = p.package_id', 'left')
			->where('pt.package_id', $package_id)
			->get()
			->result_array();
	}

	/*========= GET PACKAGE ITEM BY ID ==========*/
	public function get_package_items_by_id($package_item_id)
	{
		return $this->db->select('pt.*,t.item_name,t.item_description, p.package_name')
			->from('package_items as pt')
			->join('items as t', 'pt.item_id = t.item_id')
			->join('packages as p', 'pt.package_id = p.package_id')
			->where('pt.package_item_id', $package_item_id)
			->get()	
			->result_array();
	}


	// GET EVENTS
	public function get_all_event()
	{
		return $this->db->select('*')->from('event_types')->get()->result_array();
	}
	//ADD EVENT
	public function add_event($data)
	{
		$item = array(
			'event_type' => $data['name'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('event_types', $item);
	}

	// DELETE EVENT TYPE

	public function delete_event($event_type_id)
	{
	 return	$this->db->query("DELETE FROM event_types WHERE event_type_id=" . $event_type_id);
	}

		// GET EVENTS
	public function get_all_crew()
	{
		return $this->db->select('*')->from('crew_types')->get()->result_array();
	}

	//ADD EVENT
	public function add_crew($data)
	{
		$item = array(
			'crew_type' => $data['name'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('crew_types', $item);
	}

	// DELETE CREW TYPE

	public function delete_crew($crew_type_id)
	{
	 return	$this->db->query("DELETE FROM crew_types WHERE crew_type_id=" . $crew_type_id);
	}

	/*========== ADD TAX STATUS TYPE ==========*/
	public function add_tax_status_type($data)
	{
		$type = array(
			'business_id' => $data['business_id'],
			'tax_status'  => $data['name'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('tax_status', $type);
	}

	public function get_all_tax_type()
	{
		return $this->db->select('*')->from('tax_status')->get()->result_array();
	}

//	DELETE TAX TYPE
	public function delete_tax_type($tax_status_id)
	{
		return	$this->db->query("DELETE FROM tax_status WHERE tax_status_id=" . $tax_status_id);
	}

	/*======== GET CONTACT TYPES =========*/
	public function contact_types()
	{
		return $this->db->select('*')->from('contact_types')->get()->result();
	}

	/*======== ADD CUSTOMER CONTACT TYPE =========*/
	public function customer_contact_type($data)
	{
		$type = array(
			'customer_contact_type' => $data['type']
		);
		$this->db->insert('customer_contact_types', $type);
	}

	/*======== GET ALL CUSTOMER CONTACT TYPE =========*/
	public function get_customer_contact_types()
	{
		return $this->db->select('*')->from('customer_contact_types')->get()->result_array();
	}


	public function delete_contact_type($contact_id)
	{
		$this->db->where("customer_contact_type_id", $contact_id)->delete("customer_contact_types");
		return true;
	}

	public function get_customer_contact_types_id($customer_contact_type_id)
	{
		$qeury =  $this->db->select('*')->from('customer_contact_types')->where('customer_contact_type_id', $customer_contact_type_id)->get()->result_array();
		return $qeury[0];
	}

	public function update_contact_type($data, $contact_type_id)
	{
		$items = array(
			'customer_contact_type'    => $data['type'],
		
		);
		$this->db->where('customer_contact_type_id', $contact_type_id)->update('customer_contact_types', $items);


	}


	public function delete_package($id)
	{
		$item = array(
			'is_delete' => '1'
		);
		$this->db->where('package_id', $id)->update('packages', $item);
		return true;

	}

	public function delete_item($id)
	{
		$item = array(
			'is_delete' => '1'
		);
		$this->db->where('item_id', $id)->update('items', $item);
		return true;
	}

	public function delete_location($location_id)
	{
		$this->db->where('location_id', $location_id)->delete('event_locations');
		return true;
	}

	
}
