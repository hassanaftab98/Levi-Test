<?php

Class Task_model extends CI_Model
{

	/*========= CREATE TASK ==========*/
	public function create_task($data)
	{
		$task = array(
			'business_id'   => $data['business_id'],
			'assign_to'     => $data['assign_to'],
			'task_type_id'  => $data['task_type_id'],
			'task_priority' => $data['task_priority'],
			'start_date'    => $data['start_date'],
			'end_date'      => $data['end_date'],
			'task_desc'     => $data['task_desc'],
			'created_by'    => $this->session->userdata['id']
 		);
		$this->db->insert('tasks', $task);
		$task_id  = $this->db->insert_id();
		return $task_id;
	}

}
