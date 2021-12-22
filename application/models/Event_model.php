<?php

class Event_model extends CI_Model
{
     /*========= CREATE EVENT ==========*/
	public function create_event($data)
	{
		$detail = array(
			'event_type_id'     => $data['event_type'],
			'customer_id'       => $data['customer_id'],
			'event_title'       => $data['event_title'],
			'event_start_date'  => $data['event_date'],
			'vent_start_time'   => $data['event_time'],
			'event_hebrew_date' => $data['hebrew_date'],
			'event_day'         => $data['event_day'],
			'event_end_date'    => $data['event_end_date'],
			'event_end_time'    => $data['event_end_time'],
			'number_of_guests'  => $data['number_of_guest'],
			'referred_by'       => $data['referred_by'],
			'notes'             => $data['referred_by']
		);
		$this->db->insert('events', $detail);
		$event_id = $this->db->insert_id();
		return $event_id;
	}
}
