<?php
class place extends common
{
	function alldest()
	{
		$sql="select * from tbl_place";
		return $this->select($sql);
	}
}
?>