<?php  
class admin extends common
{
function findemail($email)
 	{
 		$sql="select * from tbl_admin where admin_email='$email'";
 		return $this->select($sql);	
		
 	}
 }