<?php 	
class event extends common
{
	public $event_title,$start_date_time,$end_date_time,$event_description,$destination_id;
public function addevent()
{
$sql="insert into tbl_event(event_title,start_date_time,end_date_time,event_description,destination) values('$this->event_title','$this->start_date_time','$this->end_date_time','$this->event_description','$this->destination_id')";
return $this->insert($sql);

}
function allevent()
{
	$sql="select * from tbl_event";
	return $this->select($sql);
}
function deletevent($id)
{
	$sql="delete from tbl_event where event_id='$id'";
	//echo $sql;
	return $this->delete($sql);
}


}

 



 ?>
