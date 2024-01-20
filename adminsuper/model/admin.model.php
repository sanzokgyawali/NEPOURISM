<?php 
 class admin extends common
 {
 	public $name,$email,$contact,$password,$photo,$type,$salt,$last_login,$status=True;
 	function findemail($email)
 	{
 		$sql="select * from tbl_admin where admin_email='$email'";
 		return $this->select($sql);	
		
 	}
 	function registerpost()
 	{
 	if(!isset($this->photo)){

 		$sql="insert into tbl_admin(admin_name,admin_email,admin_contact,admin_password,salt,last_login,status,admin_type) values('$this->name','$this->email','$this->contact','$this->password','$this->salt','$this->last_login','$this->status','$this->type')";
 	}
 	else{
 		$sql="insert into tbl_admin(admin_name,admin_email,admin_contact,admin_password,salt,last_login,status,admin_profile_photo,admin_type) values('$this->name','$this->email','$this->contact','$this->password','$this->salt','$this->last_login','$this->status','$this->photo','$this->type')";
 	}
 	
 	
 		return $this->insert($sql);

 	}
 	function inclick($id)
 	{
 		$sql="update tbl_admin click=click+1 where admin_id=$id";
 		return $this->update($sql);
 	}
 	function hotellist($status)
 	{
 		$sql="select * from tbl_admin where status='$status' and admin_type='2'";
 		return $this->select($sql);
 	}
 	function guiderlist()
 	{
 		$sql="select * from tbl_admin where admin_type='3'";
 		return $this->select($sql);
 	}
 	function travellist()
 	{
 		$sql="select * from tbl_admin where admin_type='4'";
 		return $this->select($sql);
 	}
 }
 ?>