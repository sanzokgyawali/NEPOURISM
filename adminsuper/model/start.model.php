<?php
class start extends common
{
	public $place_id, $place_name,$address, $remarks;
	function register()
	{
		$sql="insert into tbl_start(place_name,address,remarks) values('$this->place_name','$this->address','$this->remarks')";
		return $this->insert($sql);
	}
	function placelist()
	{
		$sql="select * from tbl_start";
		return $this->select($sql);
	}
	function deletestart($id)
	{
		$sql="delete from tbl_start where id=$id";
	//	echo $sql;
		return $this->delete($sql);
		
	}
	
}
?>