<?php
class route extends common
{
	public $dest_name,$start_name,$route_desc,$adv_routes,$des_routes,$other_places;
	function insertroute()
	{
		$sql="insert into tbl_route(dest_name,start_name,route_desc,adv_routes,des_routes,other_places) values('$this->dest_name','$this->start_name','$this->route_desc','$this->adv_routes','$this->des_routes','$this->other_places')";
		echo $sql;
		return $this->insert($sql);

	}
	function routelist()
	{
		$sql="select * from tbl_route";
		return $this->select($sql);	
			
	}
	function fulldetails($id)
	{
			$sql="select * from tbl_route where id=$id";
			return $this->select($sql);
	}
	function deleteroute($id)
	{
		$sql="delete from tbl_route where id=$id";
		$sql1="delete from tbl_gallery where route_id=$id";
		$this->delete($sql);
		return $this->delete($sql1);
	}
}
?>