<?php

	class Numeric_model extends CI_Model {
		
		public function __construct()
		{
			// Call the Model constructor
			parent::__construct();
		}
	
		public function fibonacci( $number = 0 )
		{
			if( !is_numeric( $number ) || $number <= 0 )
				return '';
		 	elseif( $number == 1 )
				return '1';
			
			$numbers = array();
			
			for( $i = 0; $i < ($number - 1); $i++ ) {
					
				if( $i == 0 ) {
					$numbers[] = 1;
					$prev = 0; 
					$current = 1;
				}
				else {
					$tmpPrev = $current;
					$numbers[] = $current = $prev + $current;
					$prev = $tmpPrev;
				}
			}
			
			return implode( ', ', $numbers );
		}
		
		public function factorial( $number = 0 )
		{
			if( !is_numeric( $number ) )
				return 0;
			
			if( $number <= 1 )
				return 1;
			
			return $number * ( $this->factorial( $number - 1 ) );
		}	
		
		public function returnNumeric( $string = '' )
		{
			$string = (string) $string;
			$strlength = strlen( $string );
			$numeric = '';
			
			for( $i = 0; $i < $strlength; $i++ ) {
				if( is_numeric( $string[ $i ] ) )
					$numeric .= $string[ $i ];
			}
			
			return $numeric;
		}
		
	}
?>