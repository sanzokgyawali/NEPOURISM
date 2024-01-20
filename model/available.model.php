<?php 

class available extends common
{
	function availablelist($id)
	{
		$sql="select * from tbl_available where route_id=$id";
		return $this->select($sql);
		
	}
}
 ?>
