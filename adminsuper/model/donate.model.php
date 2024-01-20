<?php 	
class donate extends common
{
	function donatelist()
	{
		$sql="select * from tbl_donate";
		return $this->select($sql);
		
	}

}
 ?>
