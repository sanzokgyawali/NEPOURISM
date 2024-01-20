<?php 
class donate extends common
{
public $donate_name,$ref_code,$email,$contact,$event_id;
function insertdonate()
{
$sql="insert into tbl_donate(donate_name,ref_code,email,contact,event_id) values('$this->donate_name','$this->ref_code','$this->email','$this->contact','$this->event_id')";
return $this->insert($sql);

}

}
