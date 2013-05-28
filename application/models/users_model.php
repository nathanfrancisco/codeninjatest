<?php

	class Users_model extends CI_Model {
	
		public function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			
			$this->load->library( 'form_validation' );
		}
		
		public function validateData()
		{
			$this->form_validation->set_rules( 'first_name', 'First Name', 'trim|required|max_length[30]|xss_clean' );
			$this->form_validation->set_rules( 'last_name', 'Last Name', 'trim|required|max_length[30]|xss_clean' );
			$this->form_validation->set_rules( 'username', 'User Name', 'trim|required|max_length[20]|xss_clean' );
			$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[6]|max_length[30]|xss_clean' );
			$this->form_validation->set_rules( 'email', 'Email', 'trim|required|valid_email|xss_clean' );
			$this->form_validation->set_rules( 'phone', 'Phone', 'trim|required|max_length[30]|xss_clean' );
			
			$result = $this->form_validation->run();
			
			if( $result === FALSE ) {
				return array( 'result' => 'failed', 'errors' => validation_errors( '<div>', '</div>' ) );
			}
			else {
				$this->saveData();
				return array( 'result' => 'success' );
			}
		}
		
		public function saveData()
		{
			$data = array(
			   'first_name' => $this->input->post( 'first_name' , TRUE ),
			   'last_name' 	=> $this->input->post( 'last_name' , TRUE ),
			   'username' 	=> $this->input->post( 'username' , TRUE ),
			   'password' 	=> $this->input->post( 'password' , TRUE ),
			   'email' 		=> $this->input->post( 'email' , TRUE ),
			   'phone' 		=> $this->input->post( 'phone' , TRUE )
			);

			$this->db->insert( 'users' , $data ); 
		}
		
	}
	
	