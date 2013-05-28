<?php

	class String_model extends CI_Model {
		
		public function __construct()
		{
			// Call the Model constructor
			parent::__construct();
		}
	
		public function isPalindrome( $string = '' )
		{
			$string = (string) $string;
			$strlength = strlen( $string ) - 1;
			$length = ceil( strlen( $string ) / 2 );
			
			for( $i = 0; $i < $length; $i++ ) {
				if( strcmp( $string[ $i ], $string[ $strlength - $i ] ) != 0 )
					return FALSE;
			}
			
			return TRUE;
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