<?php

Class Appointment_model extends CI_Model
{
	/*========= CREATE APPOINTMENT ==========*/
	public function create_appointment($data)
	{
		$appointment = array(
			'business_id'      => $data['business_id'],
			'customer_id'      => $data['business_id'],
			'appointment_title' => $data['appointment_title'],
			'appointment_desc' => $data['appointment_desc'],
			'appointment_date' => date('Y-m-d', strtotime($data['appointment_date'])),
			'appointment_time' => date('h:i:s', strtotime($data['appointment_time'])),
			'reminder_date'    => date('Y-m-d', strtotime($data['reminder_date'])),
			'reminder_time'    => date('h:i:s', strtotime($data['reminder_time'])),
			'created_by'       => $this->session->userdata['id']
		);
		$this->db->insert('appointments', $appointment);
		return $this->db->insert_id();
	}

	public function edit_appointment($data, $appointment_id)
	{
		$appointment = array(
			'business_id'      => $data['business_id'],
			'customer_id'      => $data['business_id'],
			'appointment_title' => $data['appointment_title'],
			'appointment_desc' => $data['appointment_desc'],
			'appointment_date' => date('Y-m-d', strtotime($data['appointment_date'])),
			'appointment_time' => date('h:i:s', strtotime($data['appointment_time'])),
			'reminder_date'    => date('Y-m-d', strtotime($data['reminder_date'])),
			'reminder_time'    => date('h:i:s', strtotime($data['reminder_time'])),
			'update_by'        => $this->session->userdata['id'],
			'update_at'        => date('Y-m-d h:i:s')
		);
		$this->db->where('appointment_id', $appointment_id)->update('appointments', $appointment);
	}

	/*========= GET ALL APPOINTMENTS ==========*/
	public function get_all_appointments($business_id)
	{
		return $this->db->select('a.*, c.customer_first_name, c.customer_last_name')
			->from('appointments as a')
			->join('customers as c','a.customer_id = c.customer_id', 'left')
			->where('a.business_id', $business_id)
			->get()
			->result_array();
	}

	/*========= GET APPOINTMENT BY ID =========*/
	public function get_appointment_by_id($appointment_id)
	{
		$query =  $this->db->select('*')->from('appointments')->where('appointment_id', $appointment_id)->get()->result_array();
		return $query[0];
	}
}
