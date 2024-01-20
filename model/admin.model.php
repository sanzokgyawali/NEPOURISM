<?php 
class admin extends common
{
	public $id;
	function pophotels()
	{
		$sql="select * from tbl_admin where admin_type=2 order by click desc limit 4";
		return $this->select($sql);
		
	}
	function popguiders()
	{
		$sql="select * from tbl_admin where admin_type=3 order by click desc limit 4";
		return $this->select($sql);
	}
	function guider()
	{
		$sql="select * from tbl_admin where admin_type=3";
		$output= $this->select($sql);
		$cnt=0;
		foreach($output as $o)
		{
			$cnt++;
		}
		return $cnt;
	}
	function inclick($id)
 	{
 		$sql="update tbl_admin set click=click+1 where admin_id=$id";
 		return $this->update($sql);
 	}
	function adminemail($id)
	{
		$sql="select * from tbl_admin where admin_id='$id'";
		$output= $this->select($sql);
		return $output[0]->admin_email;
	}
	function hotelcount()
	{
		$sql="select * from tbl_admin where admin_type=2";
		$output= $this->select($sql);
		$cnt=0;
		foreach($output as $o)
		{
			$cnt++;
		}
		return $cnt;
	}
	function findhotelname($admin_email,$type)
	{
		$sql="select * from tbl_admin where admin_email='$admin_email' and admin_type=$type";
		return $this->select($sql);
	}
	function details()
	{
		$sql="select * from tbl_admin where admin_id=$this->id";
		return $this->select($sql);
	}
}
 ?>
