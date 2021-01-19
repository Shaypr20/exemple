<?php

	class bd
	{
		
		public $bd = NULL;
		public $vuvod = NULL;
		
		public function __construct()
		{
			$this->bd = mysqli_connect(bd_host, bd_user, bd_pass, bd_base);
			
			mysqli_query($this->bd, 'SET NAMES utf8');
			mysqli_query($this->bd, 'SET CHARACTER SET utf8');
			mysqli_query($this->bd, 'SET COLLATION_CONNECTION="utf8_general_ci"');
		}
		
		public function select($tab, $col='*', $where='', $fil='')
		{
			
			$zap = NULL;
			$this->vuvod = NULL;
			
			
			$zap = $where ? 
			mysqli_query($this->bd, "SELECT ".$col." FROM ".$tab." WHERE ".$where." ".$fil." ") : 
			mysqli_query($this->bd, "SELECT ".$col." FROM ".$tab." ".$fil." ");
			
			while($otv = mysqli_fetch_assoc($zap)){
				$this->vuvod[] = $otv;
			}
			
			return $this->vuvod;
			unset($this->vuvod);
			mysqli_close($this->bd);
		}
		
		public function select_x($x){
			$zap = mysqli_query($this->bd, $x);
			
			while($otv = mysqli_fetch_assoc($zap)){
				$this->vuv[] = $otv;
			}
			
			return $this->vuv;
		}
		
		public function insert($tab, $col, $val)
		{
			mysqli_query($this->bd, "INSERT INTO ".$tab." (".$col.") VALUES (".$val.")");
		}
		
		public function update($tab, $val, $whe)
		{
			if(mysqli_query($this->bd, "UPDATE ".$tab." SET ".$val." WHERE ".$whe."")) {
				return true;
			}
			else{
				return false;
			}
		}		
		
		public function del($tab, $whe = "1")
		{
			mysqli_query($this->bd, "DELETE FROM ".$tab." WHERE ".$whe."");
		}
		
		public function obnul($tab)
		{
			mysqli_query($this->bd, "ALTER TABLE ".$tab." AUTO_INCREMENT=1;");
		}
		
		public function show_tables()
		{
			$this->vuvod = NULL;
			
			$zap = mysqli_query($this->bd, "SHOW TABLES FROM ".bd_base);
			
			while($otv = mysqli_fetch_assoc($zap)){
				$this->vuvod[] = $otv["Tables_in_".bd_base];
			}
			
			return $this->vuvod;
			mysqli_close($this->bd);
		}

		public function show_col($tab)
		{
			$this->vuvod = NULL;
			
			$zap = mysqli_query($this->bd, "SHOW COLUMNS FROM ".$tab." FROM ".bd_base);
			
			while($otv = mysqli_fetch_assoc($zap)){
				$this->vuvod[] = $otv['Field'];
			}
			
			return $this->vuvod;
			mysqli_close($this->bd);
		}
		
	}

?>
