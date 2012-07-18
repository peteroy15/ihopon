<?php
class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('profile_model');
	}

	public function index()
	{
		$data['profile'] = $this->profile_model->get_profile();
		$data['title'] = 'Dashboard';
	
		$this->load->view('templates/header', $data);
		$this->load->view('profile/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
			$data['title'] = 'Create a ride';
		
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/create');
			$this->load->view('templates/footer');
	}
	
	public function search()
	{
			$data['title'] = 'Search for a ride';
		
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/search');
			$this->load->view('templates/footer');
	}

	public function viewRide($id)
	{
		$data['ride_item'] = $this->profile_model->get_profile($id);
	
		if (empty($data['ride_item']))
		{
			show_404();
		}
	
		$data['title'] = 'View Ride';
	
		$this->load->view('templates/header', $data);
		$this->load->view('profile/viewRide', $data);
		$this->load->view('templates/footer');
	}
	
	public function editRide($id)
	{
		$data['ride_item'] = $this->profile_model->get_profile($id);
	
		if (empty($data['ride_item']))
		{
			show_404();
		}
	
		$data['title'] = 'Edit ride';
	
		$this->load->view('templates/header', $data);
		$this->load->view('profile/editRide', $data);
		$this->load->view('templates/footer');
	}
	
	public function createStepOne()
	{
		$this->form_validation->set_rules('from', 'FROM', 'required');
		$this->form_validation->set_rules('to', 'TO', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'Create a ride - Step one';
			
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/create');
			$this->load->view('templates/footer');		
		}
	
		else
		{
			$data['ride_item'] = array(
			'user' => $this->input->post('user'),
			'role' => $this->input->post('role'),
			'from' => $this->input->post('from'),
			'fromLat' => $this->input->post('fromLat'),
			'fromLong' => $this->input->post('fromLong'),
			'to' => $this->input->post('to'),
			'toLat' => $this->input->post('toLat'),
			'toLong' => $this->input->post('toLong'),
			'type' => $this->input->post('type')
		);
			$data['title'] = 'Create a ride - Step two';
		
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/create', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function createStepTwo()
	{
		$data['ride_item'] = array(
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
		'type' => $this->input->post('type')
		);
		$data['title'] = 'Create a ride - Step three';
	
		$this->load->view('templates/header', $data);	
		$this->load->view('profile/create', $data);
		$this->load->view('templates/footer');
	}
	
	public function createRide()
	{
			$data['title'] = 'Ride created';
			$data['success'] = 'create';
		
			$this->profile_model->set_ride();
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/success', $data);
			$this->load->view('templates/footer');
	}
	
	public function deleteRide($id)
	{	
		if((int)$id > 0)
		{
			  $this->profile_model->deleteRide($id);
		}

		$data['title'] = 'Ride deleted';
		$data['success'] = 'delete';
		
		$this->load->view('templates/header', $data);	
		$this->load->view('profile/success', $data);
		$this->load->view('templates/footer');    
	 }
	 
	public function updateRide()
	{	
		$this->form_validation->set_rules('from', 'FROM', 'required');
		$this->form_validation->set_rules('to', 'TO', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$id = $this->input->post('id');
			$data['ride_item'] = $this->profile_model->get_profile($id);
			$data['title'] = 'Edit Ride';
			
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/editRide', $data);
			$this->load->view('templates/footer');		
		}
		
		else
		{
			$data['title'] = 'Ride Updated';
			$data['success'] = 'update';
		
			$this->profile_model->updateRide();
			$this->load->view('templates/header', $data);	
			$this->load->view('profile/success', $data);
			$this->load->view('templates/footer');
		}   
	}
	
	public function searchRide(){
	
	}
	 
}