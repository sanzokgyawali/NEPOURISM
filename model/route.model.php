<?php 
class route extends common
{
	public $dest,$start;
	function start_pros($dest_id)
	{
		$sql="select * from tbl_route where dest_name='$dest_id'";
		return $this->select($sql);
	}
	function searchroute()
	{
		$sql="select * from tbl_route where dest_name='$this->dest' and start_name='$this->start'";
		return $this->select($sql);
	}
	function locationcount()
	{
		$sql="select * from tbl_route";
		$output=$this->select($sql);
		$cnt=0;
		foreach($output as $o)
		{
			$cnt++;
		}
		return $cnt;
	}
	
}
 ?>
