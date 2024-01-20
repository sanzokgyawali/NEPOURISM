<?php 
class place extends common
{
	function availableroute()
	{
		$sql="select * from tbl_place";
		return $this->select($sql);
		
	}
}
 ?>
