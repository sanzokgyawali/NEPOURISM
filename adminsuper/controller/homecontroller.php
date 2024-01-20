<?php 
class homecontroller extends controller
{
	function __construct()
	{
		$this->admin=$this->loadmodel("admin");
		$this->place=$this->loadmodel("place");
		$this->start=$this->loadmodel("start");
		$this->route=$this->loadmodel("route");
		$this->gallery=$this->loadmodel('gallery');
		$this->comment=$this->loadmodel("comment");
		$this->event=$this->loadmodel("event");
		$this->donate=$this->loadmodel("donate");
	}
	function index()
	{
		sessionhelper::loginpagecontroll();
		$this->loadview("login",false,false);

		
	}
	function dashboard()
	{
		sessionhelper::checklogin();
		$this->loadview('dashboard');
	}
	function logout()
	{
		session_start();
		session_destroy();
		header('location:index');
	}
	function registerform()
	{
		sessionhelper::checklogin();
		$this->loadview('register');
	}
	function placelist()
	{
		sessionhelper::checklogin();
		$this->output=$this->place->placelist();
		$this->loadview('placelist');
	}
	function addplace()
	{
		sessionhelper::checklogin();
		$this->loadview('addplace');
	}
	function guiderlist()
	{
		sessionhelper::checklogin();
		$this->output=$this->admin->guiderlist();
		$this->loadview("guiderlist");
	}
	function travellist()
	{
		sessionhelper::checklogin();
		$this->output=$this->admin->travellist();
		$this->loadview("travellist");
	}

	function addplacepost()
	{
		sessionhelper::checklogin();

		$this->place->place_name=$this->place->escapestring($_POST['place_name']);
		$this->place->address=$this->place->escapestring($_POST['address']);
		$this->place->remarks=$this->place->escapestring($_POST['remarks']);
		if($_FILES['photo']['size']!=0 && $_FILES['photo']['error']==0)
		{
			$tmpname=$_FILES['photo']['name'];
			$e=explode(".",$tmpname);
			foreach ($e as $v) {
				$ext=$v;
				}
				$ext=end($e);
				$name=uniqid();
				move_uploaded_file($_FILES['photo']['tmp_name'], "view/images/".$name.".".$ext);
					
				$this->place->venue_photo=$name.".".$ext;
					
		}
		$output=$this->place->register();
		if($output)
			{
				//echo "no";
				sessionhelper::set("success","Place Added successfully");
			}
			else{
			sessionhelper::set("success","Place Adition failed");
			
		}
			
           echo "<script>window.location='".base_url()."addplace'</script>";
		
	}
	function addstart()
	{
		sessionhelper::checklogin();
		$this->loadview('addstart');
	}
	function palcestartlist()
	{
		sessionhelper::checklogin();
		$this->output=$this->start->placelist();
		$this->loadview('startlist');
	}
	function deletedest()
	{
		sessionhelper::checklogin();
		$this->place->deletedest($_GET['id']);
		header("location:placelist");
	}
	function addroutepost()
	{
		sessionhelper::checklogin();
		$this->route->dest_name=$this->route->escapestring($_POST['dest_name']);
		$this->route->start_name=$this->route->escapestring($_POST['start_name']);
		$this->route->route_desc=$this->route->escapestring($_POST['route_desc']);
		$this->route->adv_routes=$this->route->escapestring($_POST['adv_routes']);
		$this->route->des_routes=$this->route->escapestring($_POST['des_route']);
		$this->route->other_places=$this->route->escapestring($_POST['other_place']);
		$this->output=$this->route->insertroute();
		if($this->output)
		{
			sessionhelper::set("success","Route added successfully");
			header("location:addroute");
		}
		else 
		{
			sessionhelper::set("success","Route addition failed");
			header("location:addroute");
		}
	}
	function addroute()
	{
		sessionhelper::checklogin();
		$this->output=$this->start->placelist();
		$this->output1=$this->place->placelist();
		$this->loadview("addroute");
	}
	function addimagepost()
	{
		sessionhelper::checklogin();
		$num=$_POST['number'];
		$s=0;
		if($num==0)
		{
			$num=1;
		}
		
		for($i=0;$i<$num;$i++)
		{
			$this->gallery->title=$_POST['title'.$i];
				echo "yes";
			if($_FILES['photo'.$i]['size']!=0 && $_FILES['photo'.$i]['error']==0)
			{
				$tmpname=$_FILES['photo'.$i]['name'];
				$e=explode(".",$tmpname);
				
			foreach ($e as $v) {
				$ext=$v;
				}
				$ext=end($e);
				$name=uniqid();
				move_uploaded_file($_FILES['photo'.$i]['tmp_name'], "view/images/".$name.".".$ext);
				$this->gallery->photo=$name.".".$ext;
				$id=$_POST['id'];
				$output=$this->gallery->insertimage($id);
				if(!$output)
				{
					$s=0;
				}else
				{
					$s=1;
				}
			}

		}
		if($s==1)
		sessionhelper::set("success","image inserted successfully");
	else
		sessionhelper::set("success","image insertion failed");
		header("location:addimage?id=".$id);
	}
	function deleteroute()
	{
		$this->route->deleteroute($_GET['id']);
		header("location:routelist");
	}
	
	function fulldetails()
	{
		sessionhelper::checklogin();
		$this->output=$this->route->fulldetails($_GET['id']);
		$this->output1=$this->gallery->fulldetails($_GET['id']);
		$this->loadview("fulldetails");
	}
	function routelist()
	{
		sessionhelper::checklogin();
		$this->output=$this->route->routelist();
		$this->loadview("routelist");
	}
	function addimage()
	{
		sessionhelper::checklogin();
		$this->loadview("addimage");
	}
	function deletestart()
	{
		sessionhelper::checklogin();
		$this->start->deletestart($_GET['id']);
		header("location:startlist");

	}
	function addstartpost()
	{
		$this->start->place_name=$this->place->escapestring($_POST['place_name']);
		$this->start->address=$this->place->escapestring($_POST['address']);
		$this->start->remarks=$this->place->escapestring($_POST['remarks']);
		
		$output=$this->start->register();
		if($output)
			{
				//echo "no";
				sessionhelper::set("success","Place Added successfully");
			}
			else{
			sessionhelper::set("success","Place Adition failed");
			
		}
			
           echo "<script>window.location='".base_url()."addstart'</script>";
	}
	function registerpost()
	{
		//echo "output";
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact']) && !empty($_POST['contact']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['password']) && !empty($_POST['password']))
		{
			//echo "no";
			$this->admin->name=$_POST['name'];
			$this->admin->email=$_POST['email'];
			$this->admin->contact=$_POST['contact'];
			$salt=uniqid();
			$password=$_POST['password'];
			$this->admin->password=sha1($salt.$password);
			$this->admin->salt=$salt;
			$this->admin->type=$_POST['type'];
			
				if($_FILES['photo']['error']==0 && $_FILES['photo']['size']!=0)
				{
					$tmpname=$_FILES['photo']['name'];
					$e=explode(".",$tmpname);
					foreach ($e as $v) {
						$ext=$v;
					}
					$ext=end($e);
					$name=uniqid();
					move_uploaded_file($_FILES['photo']['tmp_name'], "view/images/".$name.".".$ext);
					//move_uploaded_file(filename, destination);
					$this->admin->photo=$name.".".$ext;
					//echo "<script>alert('".$ext."')</script>";

				}
				$this->admin->last_login=date('Y-m-d');
			
			$output=$this->admin->registerpost();
			if($output)
			{
				//echo "no";
				sessionhelper::set("success","Admin registered successfully");
			}
			else{
			sessionhelper::set("success","Admin registered failed");
			
		}
			
           echo "<script>window.location='".base_url()."register'</script>";
		}else
		{
			//echo "no";
			sessionhelper::set("success","Admin registration failed");
			echo "<script>window.location='".base_url()."register'</script>";
			
		}
	}
	function activehotel()
	{
		sessionhelper::checklogin();
		$this->output=$this->admin->hotellist(1);
		//var_dump($output);
		$this->loadview('activehotel');

	}
	function inactivehotel()
	{
		sessionhelper::checklogin();
		$this->output=$this->admin->hotellist(0);
		$this->loadview('inactivehotel');
	}
	function commentlist()
	{
		sessionhelper::checklogin();
		$this->output=$this->comment->list();
		$this->loadview("commentlist");
	}
	function addevent()
	{
		sessionhelper::checklogin();
		$this->output1=$this->place->placelist();
		$this->loadview("addevent");
	}
	function donate()
	{
		sessionhelper::checklogin();
		$this->output=$this->donate->donatelist();
		$this->loadview("donatelist");
	}
	function addeventpost()
	{
		sessionhelper::checklogin();
		$this->event->event_title=$_POST['event_title'];
		$this->event->start_date_time=$_POST['start_date_time'];
		$this->event->end_date_time=$_POST['end_date_time'];
		$this->event->event_description=$_POST['event_description'];
		$this->event->destination_id=$_POST['AddDestination'];
		$this->output=$this->event->addevent();
		if($this->output)
		{
			sessionhelper::set("success","Event Added successfully");
		}else
		{
			sessionhelper::set("success","Event Addition Failed");
		}
		header("location:addevent");
	}
	function deletevent()
	{
		sessionhelper::checklogin();
		$this->event->deletevent($_GET['id']);
		header("location:eventlist");
	}
	function eventlist()
	{
		sessionhelper::checklogin();
		$this->output=$this->event->allevent();
		$this->loadview("eventlist");
	}
	function routeregister()
	{
		
	}
	function deletecomment()
	{
		$this->comment->deletecom($_GET['id']);
		header("location:commentlist");
	}
	function postlogin()
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
					if($type==1)
					{
						sessionhelper::set("super",$output[0]->admin_email);
						sessionhelper::set("type",$output[0]->admin_type);
						echo "<script>window.location='dashboard'</script>";
					}else
					{
						echo "<script>alert('You donot have access to use the file')</script>";
						echo "<script>window.location='index'</script>";
					}
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
