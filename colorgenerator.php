<?php 
	/*
		MISC CLASS
	*/

	/**
	* 
	*/
	class Misc
	{
		
		public static function randColor(){
			$colorelements = array();
			
			for ($i=0; $i < 6; $i++) { 
				//generate a random number
				$rand = rand(0, 15);

				switch ($rand) {
				case '10': $rand = 'a';
					break;
				case '11': $rand = 'b';
					break;
				case '12': $rand = 'c';
					break;
				case '13': $rand = 'd';
					break;
				case '14': $rand = 'e';
					break;
				case '14': $rand = 'f';
					break;
				}

				$colorelements[] = $rand;
			}
			
			return "#". implode('', $colorelements);
		}
	}
 ?>