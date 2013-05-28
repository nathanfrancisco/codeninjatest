<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Answer extends CI_Controller {

		public function index( $action = '' )
		{
			$this->one( $action );
		}
		
		public function one( $action = '' )
		{
			if( $action == 'validate' ) {
				
				$this->load->model( 'date_model' );
				$input_date = $this->input->post('input_date');
				$dates = $this->date_model->getLastDates( $input_date );				
				
				$this->load->view( 'answer/one/result' , array(
					'date' => $input_date,
					'result' => $dates
				));
				
			}
			else 
				$this->load->view( 'answer/one/index' );
		}
		
		public function two( $action = '' )
		{
			if( $action == 'validate' ) {
				
				$this->load->model( 'string_model' );
				$input_string = $this->input->post('input_string');
				$palindrome = $this->string_model->isPalindrome( $input_string );				
				
				$this->load->view( 'answer/two/result' , array(
					'string' => $input_string,
					'result' => $palindrome
				));
				
			}
			else 
				$this->load->view( 'answer/two/index' );
		}
		
		public function three( $action = '' )
		{
			if( $action == 'validate' ) {
				
				$this->load->model( 'string_model' );
				$input_string = $this->input->post('input_string');
				$numeric = $this->string_model->returnNumeric( $input_string );				
				
				$this->load->view( 'answer/three/result' , array(
					'string' => $input_string,
					'result' => $numeric
				));
				
			}
			else 
				$this->load->view( 'answer/three/index' );
		}
		
		public function four( $action = '' )
		{
			if( $action == 'validate' ) {
				
				$this->load->model( 'numeric_model' );
				$input_string = $this->input->post('input_string');
				$numeric = $this->numeric_model->fibonacci( $input_string );				
				
				$this->load->view( 'answer/four/result' , array(
					'string' => $input_string,
					'result' => $numeric
				));
				
			}
			else 
				$this->load->view( 'answer/four/index' );
		}
		
		public function five( $action = '' )
		{
			if( $action == 'validate' ) {
				
				$this->load->model( 'numeric_model' );
				$input_string = $this->input->post('input_string');
				$numeric = $this->numeric_model->factorial( $input_string );				
				
				$this->load->view( 'answer/five/result' , array(
					'string' => $input_string,
					'result' => $numeric
				));
				
			}
			else 
				$this->load->view( 'answer/five/index' );
		}
		
		public function six( $action = '' )
		{
			if( $action == 'validate' ) {
				$this->load->model( 'users_model' );
				$result = $this->users_model->validateData();
				echo json_encode( $result );
			}
			else 
				$this->load->view( 'answer/six/index' );
		}
		
		public function seven()
		{
			$this->load->view( 'answer/seven/index' );
		}
		
	}
