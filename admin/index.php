<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'session/session.class.php';
$url=[];
if(isset($_GET['p'])){
$url=explode('/',$_GET['p']);
}
else
{
	$url[0]='index';
}
$count=count($url);
if ($count==1) {
	require_once "controller/admincontroller.php";
	$admin=new admincontroller;
	if($url[0]=='index')
	{
		$admin->index();
	}
	else if($url[0]=='post.login')
	{
		$admin->login();
	}
	else if($url[0]=="dashboard")
	{
		$admin->dashboard();
	}
	else if($url[0]=="availableroute")
	{
		$admin->availableroute();
	}
	else if($url[0]=="addroutes")
	{
		$admin->addroutes();
	}
else if($url[0]=="addroutepost")
{
	$admin->addroutespost();
}
else if($url[0]=="addroutepostagain")
{

	$admin->addroutepostagain();
}
else if($url[0]=="availableroute")
{
	$admin->availableroute();
}
else if($url[0]=="remove")
{
	$admin->remove();
}
else if($url[0]=="sentmessage")
{
	$admin->sentmessage();
}
else if($url[0]=="recievemessage")
{
	$admin->recievemessage();
}
else if($url[0]=="reply")
{
	$admin->reply();
}
else if($url[0]=="recpost")
{
	$admin->recpost();
}
else if($url[0]=="logout")
{
	$admin->logout();
}
	else
	{
		require_once "view/404/404.php";
	}
}

?>