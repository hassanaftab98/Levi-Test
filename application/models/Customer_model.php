<?php

class  Customer_model extends CI_Model
{
	/*========== ADD CUSTOMER ==========*/
	public function add_customer($data)
	{

		$st = $this->db->select('*')->from('customers')->WHERE('customer_primary_email', $data['email'])->get()->result_array();
		if (count($st) > 0) {
			echo json_encode(array("msg_type" => "error", "message" => "Email already exist in Database"));
			exit;
		} else {
		$this->db->trans_begin();

			// echo "coming"; exit;

			$customer_detail = array(
				'business_id'   => $data['business_id'],
				'customer_prefix'     => $data['customer_prefix'],
				'customer_first_name' => $data['first_name'],
				'customer_last_name'  => $data['last_name'],
				'customer_primary_email' => $data['email'],
				'customer_primary_contact_no' => $data['contact'],
				'customer_whatsapp'   => $data['whatsapp_number'],
				'customer_address1' => $data['customer_address1'],
				'customer_city'     => $data['city'],
				'customer_state'    => $data['state'],
				'customer_zipcode'  => $data['zipcode'],
				'tax_status'      => $data['tax_status'],
				'tax_id'          => $data['tax_id']
			);

			$this->db->insert('customers', $customer_detail);
			$customer_id = $this->db->insert_id();

			$contacts = array();
			$i = 0;
			foreach ($data['peron'] as $row) {
				$contacts[] = array(
					'customer_id'       => $customer_id,
					'contact_type_id'   => $data['contact_type'][$i],
					'person_name'       => $row,
					'person_email'      => $data['other_email'][$i],
					'person_contact_no' => $data['other_contact'][$i],
				);
				$i++;
			}

			$this->db->insert_batch('customer_contacts', $contacts);

			$shipment = array(
				'customer_id'         => $customer_id,
				'person_name'         => $data['shipment_person_name'],
				'c_shipment_address1' => $data['shipment_address1'],
				'c_shipment_address2' => $data['shipment_address2'],
				'c_shipment_city'     => $data['shipment_zipcode'],
				'c_shipment_state'    => $data['shipment_city'],
				'c_shipment_zipcode'  => $data['shipment_state']
			);
			$this->db->insert('customer_shipment_address', $shipment);

			//CREATE BUSINESS USER
			$item = array(
				'name'        => $data['name'],
				'email'       => $data['email'],
				'password'    => md5(sha1($data['password'])),
				'business_id' => 1,
				'user_id' => $customer_id,
				'status'      => $data['user_status'],
				'role'        => '1',
				'hash'        => md5(sha1($data['email'])),
				'added_by'    => $this->session->userdata['id']
			);
			$this->db->insert('users', $item);

			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
			}
			else
			{
				$this->db->trans_commit();
			}

			
			return $customer_id;
		}
	}

	/*========= GET ALL CUSTOMERS ===========*/
	public function get_all_customers()
	{
		return $this->db->select('*')->from('customers')
		->where('is_delete','0')
		->get()->result_array();
	}

	/*========= ADD CUSTOMER ADDITIONAL CONTACTS ==========*/
	public function additional_contacts($data)
	{
		$additional_contact = array(
			'c_customer_id' =>   $data['customer_id'],
			'c_type'       =>   $data['c_type'],
			'c_name'       =>   $data['c_name'],
			'c_address'    =>   $data['c_address'],
			'c_city'       =>   $data['c_city'],
			'c_state'      =>   $data['c_state'],
			'c_zip'        =>   $data['c_zip'],
			'c_email'      =>   $data['c_email'],
			'c_contact_no' =>   $data['c_contact_no']
		);
		$this->db->insert('customer_additional_contact_info', $additional_contact);
	}

	/*========= EDIT ADDITIONAL CONTACT =========*/
	public function edit_additional_contacts($data, $contact_info_id)
	{
		$additional_contact = array(
			// 'c_customer_id' =>   $data['customer_id'],
			'c_type'       =>   $data['c_type'],
			'c_name'       =>   $data['c_name'],
			'c_address'    =>   $data['c_address'],
			'c_city'       =>   $data['c_city'],
			'c_state'      =>   $data['c_state'],
			'c_zip'        =>   $data['c_zip'],
			'c_email'      =>   $data['c_email'],
			'c_contact_no' =>   $data['c_contact_no']
		);
		$this->db->where('c_additional_contact_info_id', $contact_info_id)->update('customer_additional_contact_info', $additional_contact);
	}

	/*========= GET ALL CUSTOMER ADDITIONAL CONTACTS ==========*/
	public function all_additional_contacts($customer_id)
	{
		return $this->db->select('i.*, t.customer_contact_type')
			->from('customer_additional_contact_info as i')
			->join('customer_contact_types as t', 'i.c_type = t.customer_contact_type_id', 'left')
			->where('c_customer_id', $customer_id)
			->where('i.is_delete', '0')
			->get()
			->result_array();
	}


	/*========= GET PERTICULER CUSTOMER ADDITIONAL CONTACTS ==========*/
	public function get_additional_contact_by_id($customer_id, $contact_id)
	{
		return $this->db->select('i.*, t.customer_contact_type')
			->from('customer_additional_contact_info as i')
			->join('customer_contact_types as t', 'i.c_type = t.customer_contact_type_id', 'left')
			->where('c_customer_id', $customer_id)
			->where('c_additional_contact_info_id', $contact_id)
			->where('i.is_delete', '0')
			->get()
			->result_array();
	}

	/*========= DELETE ADDITIONAL CONTACT ==========*/
	public function delete_additional_contact($contact_info_id)
	{
		$delete = array(
			'is_delete'  => '1'
		);
		$this->db->where('c_additional_contact_info_id', $contact_info_id)->update('customer_additional_contact_info', $delete);
		return true;
	}

	/*======== GET CUSTOMER DETAIL =========*/
	public function get_customer_detail($customer_id)
	{
		$query = $this->db->select('*')->from('customers')->where('customer_id', $customer_id)->get()->result_array();
		return $query;
	}

	/*========= GET CUSTOMER CONTACTS ===========*/
	public function get_customer_contacts($customer_id)
	{
		$query = $this->db->select('cc.*,cct.contact_type')
			->from('customer_contacts as cc')
			->join('contact_types as cct','cct.contact_type_id = cc.contact_type_id ' , 'left')
			->where('customer_id', $customer_id)->get()->result_array();
		return $query;
	}

	/*========= GET CUSTOMER SHIPMENT DETAILS =========*/
	public function customer_shipment_details($customer_id)
	{
		$query = $this->db->select('*')->from('customer_shipment_address')->where('customer_id', $customer_id)->get()->result();
		return $query[0];
	}


	/*======= ADD NOTE ========*/
	public function add_customer_note($data)
	{
		$note = array(
			'customer_id'  => $data['customer_id'],
			'note_type'        => $data['customRadio'],
			'note_description' => $data['admin_note'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('customer_notes', $note);
	}

	/*======= GET ALL NOTES BY Customer ID =========*/
	public function get_customer_notes($customer_id)
	{
		return $this->db->select('n.*, u.name as added_by')
			->from('customer_notes as n')
			->join('users as u', 'n.added_by = u.id', 'left')
			->where('n.customer_id', $customer_id)
			->order_by('n.customer_note_id', 'desc')
			->get()
			->result();
	}

	/*======== DELETE NOTE =========*/
	public function delete_customer_note($note_id)
	{
		$this->db->where("customer_note_id", $note_id)->delete("customer_notes");
		return true;
	}

	public function get_all_package()
	{
		$query = $this->db->select('*')->from('packages')->get()->result_array();
		return $query;
	}

		// UPLOAD DOCUMENT
	public function upload_doc($data)
	{
		$configUpload['upload_path'] = './uploads/customer_documents';
		$configUpload['allowed_types'] = 'jpg|png|jpeg|PNG|pdf';
		$configUpload['max_size'] = '2048';
		$configUpload['encrypt_name'] = true;
		$this->load->library('upload', $configUpload);
		$this->upload->initialize($configUpload);
		if (!$this->upload->do_upload('file')) {
			$uploadedDetails = $this->upload->display_errors();
			echo json_encode(array("msg_type" => "error", "message" => $uploadedDetails));
			die;
		} else {
			$image_name = $this->upload->data('file_name');
			// print_r($image_name); exit;
			$item = array(
				'doc' => $image_name,
				'customer_id' =>$data['customer_id'],
				'doc_title'   => $data['doc_title'],
				'added_by'   => $this->session->userdata['id']
			);
			$this->db->insert('customer_doc',$item);
			// $this->db->where('business_id', $business_id)->update('business', $item);
		}
	}


	public function get_document_by_id($customer_id)
	{
		$query = $this->db->select('*')->from('customer_doc')->where('customer_id',$customer_id)->get()->result_array();
		return $query;
	}


	public function delete_business_doc($doc_id)
	{
		$this->db->where("doc_id", $doc_id)->delete("customer_doc");
		return true;
	}


	public function delete_customer($customer_id)
	{

		$delete = array(
			'is_delete'  => '1'
		);
		$this->db->where('customer_id', $customer_id)->update('customers', $delete);
		return true;

	}

	/*========== UPDATE CUSTOMER ==========*/
	public function update_customer($data, $customer_id)
	{

		
			$customer_detail = array(
				'business_id'   => '1',
				'customer_prefix'     => $data['customer_prefix'],
				'customer_first_name' => $data['first_name'],
				'customer_last_name'  => $data['last_name'],
				'customer_primary_email' => $data['email'],
				'customer_primary_contact_no' => $data['contact'],
				'customer_whatsapp'   => $data['whatsapp_number'],
				'customer_address1' => $data['customer_address1'],
				'customer_city'     => $data['city'],
				'customer_state'    => $data['state'],
				'customer_zipcode'  => $data['zipcode'],
				'tax_status'      => $data['tax_status'],
				'tax_id'          => $data['tax_id']
			);

			$this->db->where('customer_id', $customer_id)->update('customers', $customer_detail);
		
	}

	/*========= GET CUSTOMER CONTACTS ===========*/
	public function get_one_customer_info($customer_contact_id)
	{

		$query = $this->db->select('cc.*,cct.customer_contact_type')
		->from('customer_contacts as cc')
		->join('customer_contact_types as cct','cct.customer_contact_type_id =cc.contact_type_id ' , 'left')
		->where('cc.customer_contact_id', $customer_contact_id)->get()->result_array();
			return $query;
	}
	
	public function update_contact_type_detail($data, $contact_type_id)
	{

		$customer_detail = array(
			'contact_type_id' => $data['contact_type'],
			'person_name'	=> $data['person_title'],
			'person_email'  => $data['person_email'],
			'person_contact_no' => $data['person_contact_no']
		);

		$this->db->where('customer_contact_id', $contact_type_id)->update('customer_contacts', $customer_detail);
	}


	public function delete_customer_contach($customer_contact_id)
	{
		$this->db->where("customer_contact_id", $customer_contact_id)->delete("customer_contacts");
		return true;
	}

}
