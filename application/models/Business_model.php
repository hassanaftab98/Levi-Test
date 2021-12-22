<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Business_model extends CI_Model
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

		if (!empty($_FILES['image']['name'])) {
			$this->upload_logo($business_id);
		}
		$contact = array();
		$i = 0;
		foreach ($data['person'] as $row) {
			$contact[] = array(
				'b_id' => $business_id,
				'person_title' => $data['title'][$i],
				'person_name' => $row,
				'person_email' => $data['other_email'][$i],
				'person_contact_no' => $data['other_contact'][$i]

			);
			$i++;
		}
		$this->db->insert_batch('business_contacts', $contact);

		// ASSINGING PACKAGE
		$detail = array(
			'business_name_id'        => $business_id,
			'package_type_id'   => $data['package_type'],
			'start_date'  =>  date('Y-m-d', strtotime(($data['start_date']))),
			'end_date' =>  date('Y-m-d', strtotime(($data['end_date']))),
			'status'  =>  $data['status'],
			'added_by'            => $this->session->userdata['id']
		);
		$this->db->insert('subscriptions', $detail);


		//CREATE BUSINESS USER
		$item = array(
			'name'        => $data['name'],
			'email'       => $data['email'],
			'password'    => md5(sha1($data['password'])),
			'business_id' => $business_id,
			'status'      => $data['user_status'],
			'role'        => '1',
			'hash'        => md5(sha1($data['email'])),
			'added_by'    => $this->session->userdata['id']
		);
		$this->db->insert('users', $item);


		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}

		return $business_id;
	}


	/*======= UPLOAD LOGO =========*/
	public function upload_logo($business_id)
	{
		$configUpload['upload_path'] = './uploads/business_logos';
		$configUpload['allowed_types'] = 'jpg|png|jpeg|PNG';
		$configUpload['max_size'] = '2048';
		$configUpload['encrypt_name'] = true;
		$this->load->library('upload', $configUpload);
		$this->upload->initialize($configUpload);
		if (!$this->upload->do_upload('image')) {
			$uploadedDetails = $this->upload->display_errors();
			echo json_encode(array("msg_type" => "error", "message" => $uploadedDetails));
			die;
		} else {
			$image_name = $this->upload->data('file_name');
			// print_r($image_name); exit;
			$item = array(
				'business_logo' => $image_name,
			);
			$this->db->where('business_id', $business_id)->update('business', $item);
		}
	}

	/*======= EDIT BUSINESS ========*/
	public function edit_business()
	{
	}


	/*======== MANAGE BUSINESS =========*/
	public function manage_business()
	{
		$query = $this->db->select('*')->from('business')->where('is_delete', '1')
			->order_by('business_id', 'desc')
			->get()->result_array();
		return $query;
	}

	// BUSINESS DETAIL BY ID
	public function getsingle_business_by_id($business_id)
	{
		$query = $this->db->select('*')->from('business')->where('is_delete', '1')
			->where('business_id', $business_id)
			->order_by('business_id', 'desc')
			->get()->result_array();
		return $query;
		// echo $this->db->last_query();exit;

	}

	// BUSINESS DETAIL BY ID
	public function get_business_by_id($business_id)
	{
		$query = $this->db->select('b.business_id,b.business_name,b.business_email,b.business_contact_no,b.business_zipcode,b.business_city,
		b.business_state,b.business_address,b.business_website,b.business_logo,b.business_tax_status,b.business_tax_id,ts.tax_status,b.business_logo')
			->from('business as b')
			->join('tax_status as ts', 'b.business_tax_status = ts.tax_status_id', 'left')
			->where('b.business_id', $business_id)
			->get()->result_array();
		return $query[0];
		// echo $this->db->last_query();exit;

	}

	public function get_business_contact_by_id($business_id)
	{
		$query = $this->db->select('bc.*')
			->from('business_contacts as bc')
			->join('business as b', 'bc.b_id = b.business_id')
			->where('bc.b_id', $business_id)
			->get()
			->result_array();

		return $query;
	}



	// /============ GET ALL MODULES ============/
	public function get_all_modules()
	{
		return $this->db->select('*')->from('menus')->where('parent', 0)->get()->result_array();
	}

	//========= ADD SUBSCRIPTION PACKAGE ==========/
	public function add_subscription_package($data)
	{
		$this->db->trans_begin();

		$package = array(
			'sub_package'        => $data['name'],
			'sub_package_type'   => $data['type'],
			'sub_package_price'  => $data['price'],
			'sub_package_details' => $data['description'],
			'added_by'            => $this->session->userdata['id']
		);
		$this->db->insert('subscription_packages', $package);
		$package_id = $this->db->insert_id();

		$modules = array();
		foreach ($data['modules'] as $row) {
			$modules[] = array(
				'sub_package_id' => $package_id,
				'module_id'      => $row
			);
		}
		$this->db->insert_batch('subscription_package_modules', $modules);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}
	}


	public function get_all_subscription_packages()
	{
		return $query = $this->db->select('*, spt.type_name')
			->from('subscription_packages as sup')
			->join('subscription_package_types as spt', 'sup.sub_package_type = spt.sub_package_type_id', 'left')
			->where('is_delete', '0')
			->get()
			->result_array();
	}


	public function get_subscription_packages_by_id($package_id)
	{
		$package_detail = array();


		$query = $this->db->select('*, spt.type_name')
			->from('subscription_packages as sup')
			->join('subscription_package_types as spt', 'sup.sub_package_type = spt.sub_package_type_id', 'left')
			->where('sub_package_id', $package_id)
			->get()
			->result_array();

		$query2 = $this->db->select('sum.sub_package_id,sum.module_id, menu.name')
			->from('subscription_package_modules as sum')
			->join('menus as menu', 'sum.module_id = menu.id')
			->where('sub_package_id', $package_id)
			->get()
			->result_array();

		$combine = array($query[0], $query2);

		return $combine;
	}


	//========= UPDATE SUBSCRIPTION PACKAGE ==========/
	public function update_subscription_package($data, $package_id)
	{
		$this->db->trans_begin();

		$package = array(
			'sub_package'        => $data['name'],
			'sub_package_type'   => $data['type'],
			'sub_package_price'  => $data['price'],
			'sub_package_details' => $data['description'],
			'added_by'            => $this->session->userdata['id']
		);
		$this->db->where('sub_package_id', $package_id)->update('subscription_packages', $package);
		$this->db->where('sub_package_id', $package_id)->delete('subscription_package_modules');
		$modules = array();
		foreach ($data['modules'] as $row) {
			$modules[] = array(
				'sub_package_id' => $package_id,
				'module_id'      => $row
			);
		}
		$this->db->insert_batch('subscription_package_modules', $modules);

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}
	}


	/*======= DELETE Subscription ========*/
	public function delete_subcription_package($sub_package_id)
	{
		$deleting = array(
			'is_delete' => '1'
		);
		$this->db->where("sub_package_id", $sub_package_id)->update("subscription_packages", $deleting);
		return true;
	}


	/*======= UPDATE BUSINESS DETAIL========*/
	public function update_business($data, $business_id)
	{

		if (!empty($_FILES['image']['name'])) {
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
				'update_by'            => $this->session->userdata['id']
			);
			$this->db->where('business_id', $business_id)->update('business', $business_details);
			$this->upload_logo($business_id);
		} else {
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
				'update_by'            => $this->session->userdata['id']
			);
			$this->db->where('business_id', $business_id)->update('business', $business_details);
		}
		return $business_id;
	}

	/*======= DELETE Subscription ========*/
	public function delete_business($business_id)
	{
		$deleting = array(
			'is_delete' => '0'
		);
		$this->db->where("business_id", $business_id)->update("business", $deleting);
		return true;
	}


	public function add_subscription($data)
	{


		$st = $this->db->select('*')->from('subscriptions')->WHERE('business_name_id', $data['business_id'])->where('status', 'active')
			->get()->result_array();
		if (count($st) > 0) {
			echo json_encode(array("msg_type" => "error", "message" => "1 Subscription already active"));
			exit;
		} else {

			$detail = array(
				'business_name_id'        => $data['business_id'],
				'package_type_id'   => $data['package_type'],
				'start_date'  =>  date('Y-m-d', strtotime(($data['start_date']))),
				'end_date' =>  date('Y-m-d', strtotime(($data['end_date']))),
				'status'  =>  $data['status'],
				'added_by'            => $this->session->userdata['id']
			);
			$this->db->insert('subscriptions', $detail);
		}
	}

	public function update_subscription_detail($data, $subscription_id)
	{


		// $st = $this->db->select('*')->from('subscriptions')->WHERE('business_name_id', $data['business_id'])->
		// where('status','active')
		// ->get()->result_array();
		// if (count($st) > 0) {
		// 	echo json_encode(array("msg_type" => "error", "message" => "1 Subscription already Active"));
		// 	exit;
		// }

		// else{

		$detail = array(
			'package_type_id'   => $data['package_type'],
			'end_date' =>  date('Y-m-d', strtotime(($data['end_date']))),
			'status'  =>  $data['status'],
			'added_by'   => $this->session->userdata['id']
		);
		$this->db->where('subscription_id', $subscription_id)->update('subscriptions', $detail);



		$note = array(
			'subscription_id' => $data['subscription_id'],
			'business_id'  => $data['business_id'],
			// 'note_type'        => $data['customRadio'],
			'note' => $data['admin_note'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('subscription_notes', $note);

		// }

	}


	public function get_all_subscriptions()
	{
		return $this->db->select('sub.*, sup.sub_package,bu.business_name')
			->from('subscriptions as sub')
			->join('business as bu', 'bu.business_id = sub.business_name_id')
			->join('subscription_packages as sup', 'sup.sub_package_id = sub.package_type_id')
			->where('sub.delete_at', '0')
			->order_by('sub.subscription_id', 'desc')
			->get()
			->result_array();
	}

	public function get_business_subscriptions($business_id)
	{
		return $this->db->select('sub.*, sup.sub_package,bu.business_name,sup.sub_package_id')
			->from('subscriptions as sub')
			->join('business as bu', 'bu.business_id = sub.business_name_id')
			->join('subscription_packages as sup', 'sup.sub_package_id = sub.package_type_id')
			->where('sub.delete_at', '0')
			->where('sub.business_name_id', $business_id)
			->order_by('sub.subscription_id', 'desc')
			->get()
			->result_array();
	}

	public function get_business_subscription($business_id)
	{
		$query = $this->db->select('sub.*, sup.sub_package,bu.business_name')
			->from('subscriptions as sub')
			->join('business as bu', 'bu.business_id = sub.business_name_id')
			->join('subscription_packages as sup', 'sup.sub_package_id = sub.package_type_id')
			->where('sub.delete_at', '0')
			->where('bu.business_id', $business_id)
			->get()
			->result_array();

		return $query[0];
	}

	/*======= ADD NOTE ========*/
	public function add_note($data)
	{
		$note = array(
			'business_id'  => $data['business_id'],
			// 'note_type'        => $data['customRadio'],
			'note_description' => $data['admin_note'],
			'added_by'         => $this->session->userdata['id']
		);
		$this->db->insert('business_notes', $note);
	}

	/*======= GET ALL NOTES BY BUSINESS ID =========*/
	public function get_registration_all_notes($business_id)
	{
		return $this->db->select('n.*, u.name as added_by')
			->from('business_notes as n')
			->join('users as u', 'n.added_by = u.id', 'left')
			->where('n.business_id', $business_id)
			->order_by('n.business_note_id', 'desc')
			->get()
			->result();
	}

	/*======== DELETE NOTE =========*/
	public function delete_note($note_id)
	{
		$this->db->where("business_note_id", $note_id)->delete("business_notes");
		return true;
	}


	public function get_subscription_status_by_id($subscription_id)
	{
		$query = $this->db->select('*')->from('subscriptions')->where('subscription_id', $subscription_id)->get()->result();
		return $query[0];
	}

	public function get_sub_package_types()
	{
		$query = $this->db->select('*')->from('subscription_package_types')->get()->result_array();
		return $query;
	}


	public function get_all_payment_method()
	{
		$query = $this->db->select('*')->from('payment_method')->get()->result_array();
		return $query;
	}

	public function get_invoice_by_id($business_id)
	{
		$query = $this->db->select('*')->from('business_invoice')
			->where('business_id', $business_id)
			->order_by('invoice_id', 'desc')
			->get()->result_array();
		return $query;
	}

	public function  get_paidinvoice_by_id($invoice_id)
	{
		$query = $this->db->select('*, inv.invoice_no, pm.method_name')
			->from('business_invoice_payment as bi')
			->join('business_invoice as inv', 'inv.invoice_id = bi.invoice_id')
			->join('payment_method as pm', 'pm.method_id=payment_method_id')
			->where('bi.invoice_id', $invoice_id)
			->get()
			->result_array();
		return $query;
	}


	public function get_active_subscription($business_id)
	{
		$query = $this->db->select('sub.*,sub_pack.sub_package,sub_pack.sub_package_price, sub_pack.sub_package_id')
			->from('subscriptions as sub')
			->join('subscription_packages as sub_pack', 'sub_pack.sub_package_id = sub.package_type_id')
			->where('sub.status', 'active')->where('sub.business_name_id', $business_id)
			->get()->result_array();

		return $query;
	}

	public function create_invoice($data)
	{

		$amount = explode('$', $data['package_price']);

		$item = array(
			'business_id' => $data['business_id'],
			'due_date'  => date('Y-m-d', strtotime($data['due_date'])),
			'invoice_amount'  => $amount[1],
			'total' => $data['amount'],
			'discount_type'  => $data['discount_type'],
			'discount_value' => $data['discount_value'],
			'sub_package_id' => $data['sub_package_id'],
			'added_by'         => $this->session->userdata['id']
		);


		$this->db->insert('business_invoice', $item);
		$invoice_id = $this->db->insert_id();

		$invoice_no = $invoice_id . date('mY');
		$invoice = array(
			'invoice_no' => $invoice_no
		);
		$this->db->where('invoice_id', $invoice_id)->update('business_invoice', $invoice);
		return $invoice_id;
	}


	public function delete_invoice($invoice_id)
	{
		$ignore = array(1,2);
		// $query =	$this->db->query("select * from business_invoice where status in ('1','2') and invoice_id=" . $invoice_id);

		$query = $this->db->select('*')->from('business_invoice')
			->where('invoice_id', $invoice_id)
			->where_not_in('status', $ignore)
			->get()->result_array();

		// echo "<pre>";
		// print_r(count($query));
		// exit;

		if (count($query) > 0) {
			echo json_encode(array("msg_type" => "error", "message" => "Paid and Partial Invoice Can't Delete"));
			return false;
		} else {

			$this->db->where("invoice_id", $invoice_id)
				->where('status', '0')
				->delete("business_invoice");
			return true;
		}
	}

	public function get_one_invoice($invoice_id)
	{
		$query = $this->db->select('*')->from('business_invoice')
			->where('invoice_id', $invoice_id)
			->get()->result_array();
		return $query;
	}
	public function remaining_invoice_amount($invoice_id)
	{
		$query = $this->db->select('invoice_amount,sum(paid_amount) as paid_amount')
			->from('business_invoice_payment')
			->where('invoice_id', $invoice_id)
			->get()->result_array();
		return $query;
	}

	// 
	public function add_payment($data)
	{
		$query = $this->db->select('sum(paid_amount) as amount')
			->from('business_invoice_payment')
			->where('invoice_id', $data['invoice_id'])
			->get()->result_array();
		//		echo '<pre>'; print_r(empty($query) ); exit;
		$paid_amount = $query[0]['amount'];
		//    	echo '<pre>'; print_r($paid_amount ); exit;
		if ($query[0]['amount'] + $data['amount'] > $data['total']) {
								// echo"if"; exit;

			// if ($query[0]['amount'] + $data['amount'] > $data['total']) {
				$pay = array(
					'payment_method_id' => $data['payment_method'],
					'invoice_amount'    => $data['total'],
					'paid_amount' => $data['amount'],
					'credit'      => ($data['amount'] + $paid_amount) - $data['total'],
					'invoice_id'  => $data['invoice_id'],
					'added_by' => $this->session->userdata['id']
				);
				$this->db->insert('business_invoice_payment', $pay);
				$status = array(
					'status' => '2',
					'credit_amount'      => ($data['amount'] + $paid_amount) - $data['total']
				);
				$this->db->where('invoice_id', $data['invoice_id'])->update('business_invoice', $status);
				// echo json_encode(array("msg_type" => "error", "message" => "Exceding Invoice Limit"));
				// exit;
			// }
		} else {
			//			echo"MF is working"; exit;
			//			print_r($data['total']); exit;
			if ($data['total'] == $data['amount']) {
				//				echo"else"; exit;
				$pay = array(
					'payment_method_id' => $data['payment_method'],
					'invoice_amount'    => $data['total'],
					'paid_amount' => $data['amount'],
					'invoice_id'  => $data['invoice_id'],
					'added_by' => $this->session->userdata['id']
				);
				$this->db->insert('business_invoice_payment', $pay);

				$status = array(
					'status' => '2'
				);
				$this->db->where('invoice_id', $data['invoice_id'])->update('business_invoice', $status);
			} elseif ($data['amount'] < $data['total']) {
								// echo"else if"; exit;

				$pay = array(
					'payment_method_id' => $data['payment_method'],
					'invoice_amount'    => $data['total'],
					'paid_amount' => $data['amount'],
					'invoice_id'  => $data['invoice_id'],
					'added_by' => $this->session->userdata['id']
				);
				$this->db->insert('business_invoice_payment', $pay);

				$status = array(
					'status' => '1'
				);
				$this->db->where('invoice_id', $data['invoice_id'])->update('business_invoice', $status);
			} else {

				//				echo"else"; exit;
				echo json_encode(array("msg_type" => "error", "message" => "Exceding Invoice Limit"));
				exit;
			}
		}

		$query2 = $this->db->select('invoice_amount,sum(paid_amount) as paid_amount')
			->from('business_invoice_payment')
			->where('invoice_id', $data['invoice_id'])
			->get()->result_array();
		if ($query2[0]['invoice_amount'] == $query2[0]['paid_amount']) {
			$status = array(
				'status' => '2'
			);
			$this->db->where('invoice_id', $data['invoice_id'])->update('business_invoice', $status);
		}
	}

	//	FUNCTION FOR RENDREING INVOICE DETAIL
	public function get_invoice($invoice_id)
	{
		$query = $this->db->select('bi.*, bu.business_name, bu.business_address,bu.business_contact_no,users.name, sup.sub_package')
			->from('business_invoice as bi')
			->join('business as bu', 'bi.business_id = bu.business_id')
			->join('users', 'users.id = bi.added_by')
			//			->join('subscriptions as sub', 'sub.business_name_id=bi.business_id')
			->join('subscription_packages as sup', 'sup.sub_package_id= bi.sub_package_id ')
			//			->where('sub.status','active')
			->where('bi.invoice_id', $invoice_id)
			->get()->result_array();
		return $query;
	}

	// UPLOAD DOCUMENT
	public function upload_doc($data)
	{
		$configUpload['upload_path'] = './uploads/business_documents';
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
				'business_id' => $data['business_id'],
				'doc_title'   => $data['doc_title'],
				'added_by'   => $this->session->userdata['id']
			);
			$this->db->insert('business_doc', $item);
			// $this->db->where('business_id', $business_id)->update('business', $item);
		}
	}

	public function get_document_by_id($vendor_id)
	{
		$query = $this->db->select('*')->from('business_doc')->where('business_id', $vendor_id)->get()->result_array();
		return $query;
	}


	public function delete_business_doc($doc_id)
	{
		$this->db->where("doc_id", $doc_id)->delete("business_doc");
		return true;
	}


	public function get_one_business_info($business_contact_id)
	{
		$query = $this->db->select('*')->from('business_contacts')
			->where('bc_id', $business_contact_id)
			->get()->result_array();
		return $query;
	}


	public function update_business_type_detail($data, $business_contact_id)
	{

		$bussines_detail = array(
			'person_title' => $data['person_title'],
			'person_name'	=> $data['person_name'],
			'person_email'  => $data['person_email'],
			'person_contact_no' => $data['person_contact_no']
		);

		$this->db->where('bc_id', $business_contact_id)->update('business_contacts', $bussines_detail);
	}

	public function delete_business_contact($busienss_contact_id)
	{
		$this->db->where("bc_id", $busienss_contact_id)->delete("business_contacts");
		return true;
	}

	public function delete_invoice_payment($payment_id, $invoice_id)
	{

		$query = $this->db->select('credit')->from('business_invoice_payment')
		->where('payment_id', $payment_id)->get()->result_array();
	
		$query2 = $this->db->select('credit_amount')->from('business_invoice')
		->where('invoice_id', $invoice_id)->get()->result_array();	

		$credit = $query[0]['credit'];
		$credit_amount = $query2[0]['credit_amount'];

		$update_credit = $credit_amount - $credit;
		$pay = array(
			'credit_amount' => $update_credit
		);
		$this->db->where('invoice_id', $invoice_id)->update('business_invoice');
		print_r($credit_amount);
		print_r($credit); exit;

	}

}
