<?php 
	namespace App\Http\Utilities;

	class Day {
		protected static $days = [
			 "Saturday"      => "saturday",
			 "Sunday"    	  => "sunday",
			 "Monday"	      => "monday",
			 "Tuesday"        => "tuesday",
			 "Wednesday"      => "wednesday",
			 "Thursday"       => "thursday",
			 "Friday"         => "friday"
		];

		public static function all(){
			return static::$days;
		}
	}
?>