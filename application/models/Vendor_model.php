<?php

Class Vendor_model extends CI_Model
{
	/*========= ADD VENDOR ==========*/
	public function add_vendor($data)
	{

		$st = $this->db->select('*')->from('vendors')->WHERE('vendor_primary_email', $data['email'])->get()->result_array();
		if (count($st) > 0) {
			echo json_encode(array("msg_type" => "error", "message" => "Email already exist in Database"));
			exit;
		}
		else {
			$vendor_detail = array(
				'business_id'   => $data['business_id'],
				'vendor_first_name' => $data['first_name'],
				'vendor_last_name'  => $data['last_name'],
				'vendor_primary_email' => $data['email'],
				'vendor_primary_contact_no' => $data['contact'],
				'vendor_address1' => $data['vendor_address1'],
				'vendor_address2' => $data['vendor_address2'],
				'vendor_city'     => $data['city'],
				'vendor_state'    => $data['state'],
				'vendor_zipcode'  => $data['zipcode'],
				'tax_status'      => $data['tax_status'],
				'tax_id'          => $data['tax_id'],
				'vendor_type'   => $data['vendor_type'],
				'whatsapp'   => $data['whatsapp']
			);
			$this->db->insert('vendors', $vendor_detail);
			$vendor_id = $this->db->insert_id();

			$contacts = array();
			$i = 0;
			foreach ($data['person'] as $row)
			{
				$contacts[] = array(
					'vendor_id' => $vendor_id,
					'contact_person_name'  => $row,
					'contact_person_title' => $data['contact_type'][$i],
					'contact_person_email' => $data['other_email'][$i],
					'contact_person_number' => $data['other_contact'][$i]
				);
				$i++;
			}

			$this->db->insert_batch('vendor_contact_info', $contacts);

			$shipment = array(
				'vendor_id'           => $vendor_id,
				'person_name'         => $data['shipment_person_name'],
				'v_shipment_address1' => $data['shipment_address1'],
				'v_shipment_address2' => $data['shipment_address2'],
				'v_shipment_city'     => $data['shipment_zipcode'],
				'v_shipment_state'    => $data['shipment_city'],
				'v_shipment_zipcode'  => $data['shipment_state']
			);
			$this->db->insert('vendor_shipment_address', $shipment);
			return $vendor_id;
		}
	}

	public function get_all_vendor()
	{
		$query = $this->db->select('vn.*,ct.crew_type,tx.tax_status')
			->from('vendors as vn')
			->join('tax_status as tx', 'tx.tax_status_id=vn.tax_status','left')
			->join('crew_types as ct','ct.crew_type_id=vn.vendor_type','left')
			->get()
			->result_array();
		return $query;
	}

	 public function get_single_vendor_by_id($vendor_id)
	 {

		$query = $this->db->select('vn.*,ct.crew_type,tx.tax_status as tax_status_name')
		->from('vendors as vn')
		->join('tax_status as tx', 'tx.tax_status_id=vn.tax_status','left')
		->join('crew_types as ct','ct.crew_type_id=vn.vendor_type','left')
		->where('vn.vendor_id', $vendor_id)
		->get()
		->result_array();
	return $query;

	 }

	public function get_vendor_by_id($vendor_id)
	{
		$query = $this->db->select('vn.*,ct.crew_type,tx.tax_status as tax_status_name')
			->from('vendors as vn')
			->join('tax_status as tx', 'tx.tax_status_id=vn.tax_status','left')
			->join('crew_types as ct','ct.crew_type_id=vn.vendor_type','left')
			->where('vn.vendor_id', $vendor_id)
			->get()
			->result_array();
		return $query[0];
	}


	/*========= GET VENDOR CONTACTS ===========*/
	public function get_vendor_contacts($vendor_id)
	{
		$query = $this->db->select('*, ct.contact_type')
			->from('vendor_contact_info as vci')
			->join('contact_types as ct', 'ct.contact_type_id = vci.contact_person_title')
			->where('vendor_id', $vendor_id)->get()->result_array();
		return $query;
	}

	/*========= GET VENDOR SHIPMENT DETAILS =========*/
	public function vendor_shipment_details($vendor_id)
	{
		$query = $this->db->select('*')->from('vendor_shipment_address')->where('vendor_id', $vendor_id)->get()->result();
		return $query[0];
	}


	/*========= ADD VENDOR ==========*/
	public function update_save_vendor($data, $vendor_id)
	{

			$vendor_detail = array(
				'vendor_first_name' => $data['first_name'],
				'vendor_last_name'  => $data['last_name'],
				'vendor_primary_email' => $data['email'],
				'vendor_primary_contact_no' => $data['contact'],
				'vendor_address1' => $data['vendor_address1'],
				'vendor_address2' => $data['vendor_address2'],
				'vendor_city'     => $data['city'],
				'vendor_state'    => $data['state'],
				'vendor_zipcode'  => $data['zipcode'],
				'tax_status'      => $data['tax_status'],
				'tax_id'          => $data['tax_id'],
				'vendor_type'   => $data['vendor_type'],
				'whatsapp'   => $data['whatsapp']

			);
			$this->db->where('vendor_id',$vendor_id)->update('vendors',$vendor_detail);
			return true;

	}

	/*========= ADD VENDOR CONTACT =========*/
	public function add_vendor_contact($data)
	{
		$contact_details = array(
			'vendor_id'  => $data['vendor_id'],
			'contact_person_name' => $data['contact_person_name'],
			'contact_person_title' => $data['contact_person_title'],
			'contact_person_email' => $data['contact_person_email'],
			'contact_person_number' => $data['contact_person']
		);
	}

	/*========= ADD VENDOR PRICE LIST ==========*/
	public function add_vendor_price($data)
	{
		$check = $this->db->select('*')->from('vendor_price_list')
			->where('item_id', $data['item_id'])
			->where('vendor_id', $data['vendor_id'])
			->get()
			->result_array();
		if(count($check) > 0)
		{
			echo json_encode(array("msg_type" => "error", "message" => "Item already exist in vendor price list"));
			exit;
		}

		else {
			$vendor_price = array(
				'vendor_id'    => $data['vendor_id'],
				'item_id'      => $data['item_id'],
				'price'        => $data['price'],
				'notes'        => $data['admin_note'],
				'added_by'     => $this->session->userdata['id']
			);
			$this->db->insert('vendor_price_list', $vendor_price);
		}
	}

	/*========== GET ALL VENDOR PRICE LIST ===========*/
	public function vendor_price_list($vendor_id)
	{
		return $this->db->select('pl.*, v.vendor_id, v.vendor_first_name, v.vendor_last_name, i.item_name, i.item_description')
			->from('vendor_price_list as pl')
			->join('vendors as v','pl.vendor_id = v.vendor_id', 'left')
			->join('items as i','pl.item_id = i.item_id', 'left')
			->where('pl.vendor_id', $vendor_id)
			->where('is_delete', '1')
			->get()
			->result_array();
	}

	/*========== DELETE VENDOR PRICE ITEM ==========*/
	public function delete_vendor_pitem($price_list_id)
	{
		$delete = array(
			'is_delete' => 0,
			'update_at' => date('Y-m-d h:i:s'),
			'update_by' => $this->session->userdata['id']
		);
		$this->db->where('price_list_id', $price_list_id)->update('vendor_price_list', $delete);
		return true;
	}

	/*========= GET PRICE DATA BY ID =========*/
	public function get_price_by_id($price_list_id)
	{
		$query = $this->db->select('pl.*, i.item_name, i.item_taxable, i.item_description')
			->from('vendor_price_list as pl')
			->join('items as i','pl.item_id = i.item_id')
			->where('pl.price_list_id', $price_list_id)
			->get()
			->result_array();
		return $query[0];
	}

	/*======== UPDATE VENDOR PRICE =========*/
	public function update_vendor_price($price_list_id, $data)
	{
		$price = array(
			'price'      =>  $data['price1'],
			'notes'      =>  $data['admin_note'],
			'update_at' => date('Y-m-d h:i:s'),
			'update_by' => $this->session->userdata['id']
		);
		$this->db->where('price_list_id', $price_list_id)->update('vendor_price_list', $price);
	}


	/*======= ADD NOTE ========*/
	public function add_vendor_note($data)
	{
		$note = array(
			'vendor_id'  => $data['vendor_id'],
			'note_type'        => $data['customRadio'],
			'note_description' => $data['admin_note'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('vendor_notes', $note);

		return $this->db->insert_id();

	}

	/*======= GET ALL NOTES BY BUSINESS ID =========*/
	public function get_vendor_notes($vendor_id)
	{
		return $this->db->select('n.*, u.name as added_by')
			->from('vendor_notes as n')
			->join('users as u','n.added_by = u.id', 'left')
			->where('n.vendor_id', $vendor_id)
			->order_by('n.vendor_note_id','desc')
			->get()
			->result();
	}

	/*======== DELETE NOTE =========*/
	public function delete_vendor_note($note_id)
	{
		$this->db->where("vendor_note_id", $note_id)->delete("vendor_notes");
		return true;
	}


	// NOTE EMAIL

	  /*========== GET NOTE DETAIL ===========*/
	  public function get_note_detail($note_id)
	  {
		  $query = $this->db->select('no.vendor_note_id,no.note_description,ve.vendor_first_name as name,ve.vendor_primary_email as email')
		  	->from('vendors as ve')
			  ->join('vendor_notes as no', 'no.vendor_id = ve.vendor_id')
			  ->where('no.vendor_note_id', $note_id)
			  ->get()
			  ->result();
		  return $query[0];
	  }
}
