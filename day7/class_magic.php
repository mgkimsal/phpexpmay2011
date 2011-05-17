<?php
class dbo {
	public $table = "";

	public function __construct()
	{
		$this->table = strtolower(get_class($this));
	}
	
	public function __call($name, $args)
	{
		if(substr($name,0,9)=="findAllBy")
		{
			return $this->query($name, $args);
		}
	}
	private function query($name, $args)
	{
		$col = substr($name,9);
		// do proper escaping or pass to 
		// db layer to do the query
		// the pass back the results
		$sql = "select * from ".$this->table;
		$sql .= " where $col='".$args[0]."'";
		
		echo $sql;
	}
}
class person extends dbo {}
$p = new person();
$p->findAllByName("mike");
