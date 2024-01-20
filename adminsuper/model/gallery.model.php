<?php 	
class gallery extends common
{
	public $photo,$title,$route_id;
	function insertimage($id)
	{
		$sql="insert into tbl_gallery(title,photo,route_id) values('$this->title','$this->photo','$id')";
		echo $sql;
		return $this->insert($sql);
		
	}
	function fulldetails($id)
	{
			$sql="select * from tbl_gallery where route_id=$id";
			return $this->select($sql);
	}

}
 ?>
