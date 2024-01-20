<?php 
class comment extends common
{
	public function list()
	{
		$sql="select * from tbl_comment";
		return $this->select($sql);
	}
	public function deletecom($id)
	{
		$sql="delete from tbl_comment where id='$id'";
		return $this->delete($sql);
		
	}
}
 ?>
