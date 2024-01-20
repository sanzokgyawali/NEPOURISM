<?php 
class event extends common
{
	function allevent()
	{
		$sql="select * from tbl_event order by event_id desc";
		return $this->select($sql);
	}
	function getDestinationEvent($name)
	{
		$sql="select * from tbl_event where destination='".$name."'";
		
		return $this->select($sql);
	}
	function getSpecificEvent($id)
	{
		$sql="select * from tbl_event where event_id=".$id;
		return $this->select($sql);
	}
}

 ?>