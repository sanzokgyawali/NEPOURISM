<?php 
class sessionhelper
{
   static function init()
	{
		@session_start();
	}

	static function set($var,$value)
	{
		self::init();
		$_SESSION[$var] = $value;
	}

	static function get($var)
	{
		self::init();
		return $_SESSION[$var];
	}

	static function checklogin()
	{
		self::init();
		if(!isset($_SESSION['super']))
		{
			header('location:index');
			
		}
	}
	static function loginpagecontroll()
	{
		self::init();
		//echo "<script>alert('".$_SESSION['super']."')</script>";
		if(isset($_SESSION['super']) && isset($_SESSION['type']))
		{
			echo "<script>alert('yes')</script>";
			header('location:dashboard');
		}
		// else
		// {
		// 	echo "<script>alert('yes')</script>";
		// }
	}

	static function end()
	{
		self::init();
		session_destroy();
		header('location:index.php');
	}
 }

 ?>
