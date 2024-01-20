<?php
class route extends common
{
	function allroutes()
	{
		$sql="select * from tbl_route";
		return $this->select($sql);
	}
	function allroute($dest_name)
	{
		$sql="select * from tbl_route where dest_name='$dest_name'";
		return $this->select($sql);
	}
	function routedetail($route_id)
	{
		$sql="select * from tbl_route where id='$route_id'";
		//echo $sql;
		return $this->select($sql);
		
	}
}