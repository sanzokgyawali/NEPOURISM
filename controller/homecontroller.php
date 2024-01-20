<?php 
class homecontroller extends controller
{
	public function __construct()
	{
		$this->place=$this->loadmodel("place");
		$this->route=$this->loadmodel("route");
		$this->research=$this->loadmodel("research");
		$this->admin=$this->loadmodel("admin");
		$this->available=$this->loadmodel("available");
		$this->event=$this->loadmodel("event");
		$this->donate=$this->loadmodel("donate");
		$this->gallery=$this->loadmodel("gallery");
		$this->comment=$this->loadmodel("comment");
	}
	public function index()
	{
		$this->output=$this->place->alldest();
		$this->output1=$this->admin->pophotels();
		$this->output2=$this->admin->popguiders();
		$this->output3=$this->research->count();
		$this->location=$this->route->locationcount();
		$this->guider=$this->admin->guider();
		$this->hotel=$this->admin->hotelcount();
		$this->loadview("index",false,false);
	}
	function destlist()
	{

		$this->output=$this->route->start_pros($_POST['dest']);
		//$output="<option>yes</option>";
		foreach($this->output as $o)
		{
			$output.="<option value='$o->start_name'>$o->start_name</option>";
		}
		echo $output;
	}
	function travelcheck()
	{
		$this->research->name=$_POST['name'];
		$this->research->insertname();
		$this->route->dest=$_POST['dest'];
		$this->route->start=$_POST['start'];

		$this->output=$this->route->searchroute();
		$this->gal=$this->gallery->allimages($this->output[0]->id);
		$this->programs=$this->event->getDestinationEvent($this->route->dest);
		//var_dump($this->output);
		$this->loadview("route",false,false);

	}
	function message()
	{
		$email=$_POST['email'];
		$message=$_POST['message'];
		$id=$_GET['id'];
		$admin_email=$this->admin->adminemail($id);
		$datetime=date('Y-m-d H:i:s');
		$this->comment->insertmessage($email,$message,$admin_email,$datetime);
		header("location:index");

	}
	function learnmore()
	{
		$id=$_GET['id'];
		$this->output=$this->event->getSpecificEvent($id);
		$this->loadview("learnmore",false,false);
	}
	function details()
	{
		$this->admin->id=$_GET['id'];
		$this->admin->inclick($_GET['id']);
		$this->output=$this->admin->details();
		$this->loadview('profile',false,false);
	}
	function submitcomment()
	{
		$this->comment->name=$_POST['name'];
		$this->comment->email=$_POST['email'];
		$this->comment->comment=$_POST['comment'];
		$this->comment->postcomment();
		header("location:join#testimonials");
	}
	function join()
	{
		$this->output=$this->event->allevent();
		$this->output1=$this->comment->latcom();
		$this->loadview("join",false,false);
	}
	function submitdonate()
	{
		$this->donate->donate_name=$_POST['donate_name'];
		$this->donate->ref_code=$_POST['ref_code'];
		$this->donate->email=$_POST['email'];
		$this->donate->contact=$_POST['contact'];
		$this->donate->event_id=$_POST['id'];
		$this->donate->insertdonate();
		header("location:join");
	}
}
 ?>
