<?php 
class comment extends common
{
	public $comment,$email,$name,$route_id=5;
	public function postcomment()
	{
		$sql="insert into tbl_comment(name,email,comment,route_id) values('$this->name','$this->email','$this->comment','$this->route_id')";
		return $this->insert($sql);
		
	}
	public function latcom()
	{
		$sql="select * from tbl_comment order by id desc limit 5";
		return $this->select($sql);
	}
	public function insertmessage($email,$message,$admin_email,$datetime)
	{
		$sql="insert into tbl_message(rec,sen,message,message_datetime) values('$admin_email','$email','$message','$datetime')";
		//echo $sql;
		return $this->insert($sql);
	}
}
 ?>
