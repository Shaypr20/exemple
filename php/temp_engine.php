<?php

	class temp_engine
	{
		public $template = NULL;
		
		public function engine($dan = "", $temp){
			
			if($dan){
				foreach($dan as $key => $val){
					$temp = str_replace("[_".$key."_]", $val, $temp);
				}
			}
			
			$this->template = $temp;
			return $this->template;
		}
		
	}

?>