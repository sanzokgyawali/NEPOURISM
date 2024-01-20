<?php 
class gallery extends common
{
	function allimages($route_id)
	{
		$sql="select * from tbl_gallery where route_id='$route_id'";
		return $this->select($sql);
	}
}
 ?>
