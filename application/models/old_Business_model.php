<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Business_model extends CI_Model
{
	/*======= CREATE BUSINESS ========*/
	public function create_business($data)
	{
		$this->db->trans_begin();

		$business_details = array(
			'business_name'  => $data['business_name'],
			'business_email' => $data['business_email'],
			'business_contact_no' => $data['business_contact_no'],
			'business_zipcode' => $data['zipcode'],
			'business_city' => $data['city'],
			'business_state' => $data['state'],
			'business_address'    => $data['business_address'],
			'business_website' => $data['business_website'],
			'business_tax_status' => $data['tax_status'],
			'business_tax_id' => $data['tax_id'],
			'added_by'            => $this->session->userdata['id']
		);
		$this->db->insert('business', $business_details);
		$business_id = $this->db->insert_id();

		$contact = array();
		$i = 0;
		foreach ( $data['person'] as $row )
		{
			$contact[] = array(
				'b_id' => $business_id,
				'person_title' => $data['title'][$i],
				'person_name' => $row,
				'person_email' => $data['other_email'][$i],
				'person_contact_no' => $data['other_contact'][$i]

			);
			$i++;
		}
		$this->db->insert_batch('business_contacts',$contact);

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
		}
		else
		{
			$this->db->trans_commit();
		}

		return $business_id;
	}

	/*======= EDIT BUSINESS ========*/
	public function edit_business()
	{

	}

	/*======== MANAGE BUSINESS =========*/
	public function manage_business()
	{
		$query = $this->db->select('*')->from('business')->get()->result_array();
		return $query;
	}

	/*============ GET ALL MODULES ============*/
	public function get_all_modules()
	{
		return $this->db->select('*')->from('menus')->where('parent', 0)->get()->result_array();
	}

	/*========= ADD SUBSCRIPTION PACKAGE ==========*/
	public function add_subscription_package($data)
	{
		$package = array(
			'sub_package'        => $data['sub_package'],
			'sub_package_type'   => $data['sub_package_type'],
			'sub_package_price'  => $data['sub_package_price'],
			'sub_package_Details' => $data['sub_package_details'],
			'added_by'            => $this->session->userdata['id']
		);
		$this->db->insert('subscription_packages', $package);
		$package_id = $this->db->insert_id();

		$modules = array();
		foreach ($data['modules'] as $row)
		{
			$modules[] = array(
				'sub_package_id' => $package_id,
				'module_id'      => $row
			);
		}
	}

}
