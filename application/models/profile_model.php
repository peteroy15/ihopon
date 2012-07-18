<?php
class Profile_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_profile($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('rides');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('rides', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_ride()
	{		
		$data = array(
			'user' => $this->input->post('user'),
			'role' => $this->input->post('role'),
			'from' => $this->input->post('from'),
			'fromLat' => $this->input->post('fromLat'),
			'fromLong' => $this->input->post('fromLong'),
			'to' => $this->input->post('to'),
			'toLat' => $this->input->post('toLat'),
			'toLong' => $this->input->post('toLong'),
			'dateLeave' => $this->input->post('dateLeave'),
			'hourLeave' => $this->input->post('hourLeave'),
			'dateReturn' => $this->input->post('dateReturn'),
			'hourReturn' => $this->input->post('hourReturn'),
			'sunday' => $this->input->post('sunday'),
			'monday' => $this->input->post('monday'),
			'tuesday' => $this->input->post('tuesday'),
			'wednesday' => $this->input->post('wednesday'),
			'thursday' => $this->input->post('thursday'),
			'friday' => $this->input->post('friday'),
			'saturday' => $this->input->post('saturday'),
			'type' => $this->input->post('type'),
			'price' => $this->input->post('price'),
			'seats' => $this->input->post('seats'),
			'comment' => $this->input->post('comment')
		);
		
		return $this->db->insert('rides', $data);
	}
	
	public function updateRide()
	{
		$id = $this->input->post('id');
		$data = array(
            'user' => $this->input->post('user'),
			'role' => $this->input->post('role'),
			'from' => $this->input->post('from'),
			'fromLat' => $this->input->post('fromLat'),
			'fromLong' => $this->input->post('fromLong'),
			'to' => $this->input->post('to'),
			'toLat' => $this->input->post('toLat'),
			'toLong' => $this->input->post('toLong'),
			'dateLeave' => $this->input->post('dateLeave'),
			'hourLeave' => $this->input->post('hourLeave'),
			'dateReturn' => $this->input->post('dateReturn'),
			'hourReturn' => $this->input->post('hourReturn'),
			'sunday' => $this->input->post('sunday'),
			'monday' => $this->input->post('monday'),
			'tuesday' => $this->input->post('tuesday'),
			'wednesday' => $this->input->post('wednesday'),
			'thursday' => $this->input->post('thursday'),
			'friday' => $this->input->post('friday'),
			'saturday' => $this->input->post('saturday'),
			'type' => $this->input->post('type'),
			'price' => $this->input->post('price'),
			'seats' => $this->input->post('seats'),
			'comment' => $this->input->post('comment')
        );

		$this->db->where('id', $id);
		$this->db->update('rides', $data); 
	}
	
	public function deleteRide($id)
	{
		$this->db->delete('rides', array('id' => $id));
	}
}
