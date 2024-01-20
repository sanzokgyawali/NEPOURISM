<?php
class place extends common
{
	public $place_id, $place_name,$address, $remarks, $venue_photo;
	function register()
	{
		$sql="insert into tbl_place(place_name,address,remarks,venue_photo) values('$this->place_name','$this->address','$this->remarks','$this->venue_photo')";
		return $this->insert($sql);
	}
	function placelist()
	{
		$sql="select * from tbl_place";
		return $this->select($sql);
		
	}
	function deletedest($id)
	{
		$sql="delete from tbl_place where place_id=$id";
		return $this->delete($sql);
	}
}
?>