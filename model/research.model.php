<?php 

class research extends common
{
	public $name;
	function insertname()
	{
		$sql="insert into tbl_researcher(traveller_name) values('$this->name')";
		return $this->insert($sql);
	}
	function count()
	{
		$sql="select * from tbl_researcher";
		return $this->select($sql);
	}
}
 ?>
