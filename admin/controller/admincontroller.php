<?php
class admincontroller extends controller
{

	function __construct()
	{
		$this->admin=$this->loadmodel("admin");
		$this->route=$this->loadmodel("route");
		$this->place=$this->loadmodel("place");
		$this->available=$this->loadmodel("available");
		$this->message=$this->loadmodel("message");
		

	}
	function index()
	{
		$this->loadview('login',false,false);
	}
	function dashboard()
	{
		sessionhelper::checklogin();
		$this->loadview("dashboard");
	}
	function addroutes()
	{
		sessionhelper::checklogin();
		$this->output=$this->place->availableroute();
		$this->loadview("addroute");
	}
	function addroutespost()
	{
		sessionhelper::checklogin();
		$this->output=$this->route->allroute($_POST['dest_name']);
		$this->loadview("route");
	}
	function addroutepostagain()
	{
		sessionhelper::checklogin();
		$sn=$_POST['id'];
		//echo "hh";
		for($i=1;$i<=$sn;$i++)
		{
			if(isset($_POST['cb'.$i]))
			{
				$this->available->route_id=$_POST['cb'.$i];
				$this->available->admin_email=sessionhelper::get('admin');
				$this->output=$this->available->addavailable();

			}
		}
		header("location:addroutes");
	}
	function remove()
	{
		
		$this->available->admin_email=sessionhelper::get('admin');
		$this->available->deleteme($_GET['id']);
		header("location:availableroute");
	}
	function availableroute()
	{
		sessionhelper::checklogin();
		$this->available->admin_email=sessionhelper::get('admin');
		$this->output1=$this->available->availablerouteadmin();
		//$this->output=$this->route->allroutes();
		$this->loadview("availableroutes");
		//$this->output=$this->

	}
	function recievemessage()
	{
		sessionhelper::checklogin();
		$this->message->rec=sessionhelper::get('admin');
		$this->output=$this->message->recievemessage();
		$this->loadview('recievemessage');
	}
	function reply()
	{
		sessionhelper::checklogin();
		$this->output=$this->message->outmessage($_GET['id']);
		$this->loadview("recmes");

	}
	function logout()
	{
		@session_start();
		session_destroy();
		header("location:index.php");
	}
	function recpost()
	{
		$this->message->rec=$_POST['from'];
		$this->message->sen=sessionhelper::get('admin');
		$this->message->message_datetime=date('Y-m-d H:i:s');
		$this->message->message=$_POST['reply'];
		$this->message->replypost();
		header("location:sentmessage");
	}
	function sentmessage()
	{
		sessionhelper::checklogin();
		$this->message->sen=sessionhelper::get('admin');
		//echo $this->message->sen;
		$this->output=$this->message->allmessage();
		$this->loadview("sentmessage");
	}
	function login()
	{
		if(isset($_POST['email']) && !empty($_POST['email']))
		{
			if(isset($_POST['password']) && !empty($_POST['password']))
		{
			$email=$this->admin->escapestring($_POST['email']);
			$password=$this->admin->escapestring($_POST['password']);
			$output=$this->admin->findemail($email);
			if($output)
			{
				$dpassword=$output[0]->admin_password;
				$salt=$output[0]->salt;
				$npassword=sha1($salt.$password);
				if($dpassword==$npassword)
				{
					$type=$output[0]->admin_type;
					
						sessionhelper::set("admin",$output[0]->admin_email);
						sessionhelper::set("type",$output[0]->admin_type);
						echo "<script>window.location='dashboard'</script>";
					
				}else
					{
						echo "<script>alert('Your password is incorrect')</script>";
						echo "<script>window.location='index'</script>";
					}
			}else
					{
						echo "<script>alert('Your username is incorrect')</script>";
						echo "<script>window.location='index'</script>";
					}

		}else
					{
						echo "<script>alert('Password cannot be null')</script>";
						echo "<script>window.location='index'</script>";
					}
		}else
					{
						echo "<script>alert('Email cannot be null')</script>";
						echo "<script>window.location='index'</script>";
					}
				}
			}
	
?>