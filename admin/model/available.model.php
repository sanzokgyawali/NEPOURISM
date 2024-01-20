<?php
class available extends common
{
	public $route_id,$admin_email;
	function addavailable()
	{

		$sql="insert into tbl_available(admin_email,route_id) values('$this->admin_email','$this->route_id')";
		echo $sql;
		return $this->insert($sql);
	}
	function availablerouteadmin()
	{
		$sql="select * from tbl_available where admin_email='$this->admin_email'";
		return $this->select($sql);
		
	}
	function deleteme($id)
	{
		$sql="delete from tbl_available where admin_email='$this->admin_email' and route_id='$id'";
		return $this->delete($sql);
	}
}
?>