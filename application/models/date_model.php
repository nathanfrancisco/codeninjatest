<?php

	class Date_model extends CI_Model {
		
		private $_lastDays = array(
			'01' => 31,
			'02' => 28,
			'03' => 31,
			'04' => 30,
			'05' => 31,
			'06' => 30,
			'07' => 31,
			'08' => 31,
			'09' => 30,
			'10' => 31,
			'11' => 30,
			'12' => 31
		);
		
		public function __construct()
		{
			// Call the Model constructor
			parent::__construct();
		}
	
		public function getLastDates( $date = '' )
		{
			// check if valid date
			if( ( $date = strtotime( $date ) ) === FALSE )
				return FALSE;
			
			$dateArray = array();
			
			for( $i = 0; $i < 12; $i++ ) {
				$date = strtotime( '-1 month', $date );
				$month = date( "m", $date );
				$year = date( "Y", $date );
				$dateArray[] = $year . '-' . $month . '-' . $this->_getLastDay( $month, $year );
			}
			
			return $dateArray;
		}
		
		protected function _getLastDay( $month = '', $year = '' )
		{
			// check for leap year on february
			if( $month == 2 && ( $year % 4 == 0 ) )
				return 29;
				
			return $this->_lastDays[ $month ];
		}
		
	}
?>