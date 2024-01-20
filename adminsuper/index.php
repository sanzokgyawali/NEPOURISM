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
	require_once 'controller/homecontroller.php';
		$homecontroller = new homecontroller;
	if($url[0]=='index')
	{
		
		$homecontroller->index();
	}else if($url[0]=='post.login')
	{
		$homecontroller->postlogin();
	}
	else if($url[0]=="dashboard")
	{
		$homecontroller->dashboard();
	}else if($url[0]=="logout")
	{
		$homecontroller->logout();
	}else if($url[0]=="register")
	{
		$homecontroller->registerform();
	}
	else if($url[0]=="registerpost")
	{

		$homecontroller->registerpost();
	}
	else if($url[0]=="activehotel")
	{
		$homecontroller->activehotel();
	}else if($url[0]=="inactivehotel")
	{
		$homecontroller->inactivehotel();
	}
	else if($url[0]=="addplace")
	{
		$homecontroller->addplace();
	}
	else if($url[0]=="addplacepost")
	{
		$homecontroller->addplacepost();
	}
	else if($url[0]=="placelist")
	{
		$homecontroller->placelist();
	}
	else if($url[0]=="addstart")
	{
		$homecontroller->addstart();
	}
	else if($url[0]=="addstartpost")
	{
		$homecontroller->addstartpost();
	}
	else if($url[0]=="startlist")
	{
		$homecontroller->palcestartlist();
	}
	else if($url[0]=="guiderlist")
	{
		$homecontroller->guiderlist();
	}
	else if($url[0]=="travellist")
	{
		$homecontroller->travellist();
	}
	else if($url[0]=="deletedest")
	{
		$homecontroller->deletedest();
	}else if($url[0]=="deletestart")
	{
		$homecontroller->deletestart();
	}
	else if($url[0]=="addroute")
	{
		$homecontroller->addroute();
	}
	else if($url[0]=="addroutepost")
	{
		$homecontroller->addroutepost();
	}
	else if($url[0]=="routelist")
	{
		$homecontroller->routelist();
	}else if($url[0]=="addimage")
	{
		$homecontroller->addimage();
	}
	else if($url[0]=="addimagepost")
	{
		$homecontroller->addimagepost();
	}
	else if($url[0]=="fulldetails")
	{
		$homecontroller->fulldetails();
	}
	else if($url[0]=="deleteroute")
	{
		$homecontroller->deleteroute();
	}
	else if($url[0]=="commentlist")
	{
		$homecontroller->commentlist();
	}
	else if($url[0]=="deletecomment")
	{

		$homecontroller->deletecomment();
	}
	else if($url[0]=="addevent")
	{
		$homecontroller->addevent();
	}
	else if($url[0]=="addeventpost")
	{
		$homecontroller->addeventpost();
	}
	else if($url[0]=="eventlist")
	{
		$homecontroller->eventlist();
	}
	else if($url[0]=="deletevent")
	{
		$homecontroller->deletevent();
	}
	else if($url[0]=="donate")
	{
		$homecontroller->donate();
	}
	else
	{
		require_once "view/404/404.php";
	}
}

?>