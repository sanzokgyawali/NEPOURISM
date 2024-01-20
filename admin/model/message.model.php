<?php 
class message extends common
{
	public $rec,$sen,$message,$message_datetime;
	function allmessage()
	{
		$sql="select * from tbl_message where sen='$this->sen' order by id desc";
		//echo $sql;
		return $this->select($sql);

	}
	function recievemessage()
	{
		$sql="select * from tbl_message where rec='$this->rec' order by id desc";
		return $this->select($sql);
	}
	function outmessage($id)
	{
		$sql="select * from tbl_message where id='$id' ";
		return $this->select($sql);
		
	}
	function replypost()
	{
		$sql="insert into tbl_message(rec,sen,message,message_datetime) values('$this->rec','$this->sen','$this->message','$this->message_datetime')";
		return $this->insert($sql);
	}
}
?>