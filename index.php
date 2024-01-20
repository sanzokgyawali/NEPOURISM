<?php
require_once 'config/config.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
//require_once 'session/session.class.php';
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
	}
	else if($url[0]=="destlist")
	{

		$homecontroller->destlist();
	}
	else if($url[0]=="travelcheck")
	{
		$homecontroller->travelcheck();
	}else if($url[0]=="join")
	{
		$homecontroller->join();
	}else if($url[0]=="submitdonate")
	{
		$homecontroller->submitdonate();
	}
	else if($url[0]=="submitcomment")
	{
		$homecontroller->submitcomment();
	}
	else if($url[0]=="details")
	{
		$homecontroller->details();
	}
	else if($url[0]=="message")
	{
		$homecontroller->message();
	}
	else if($url[0]=="learnmore")
	{
		$homecontroller->learnmore();
	}
	else
	{
		require_once "view/404/404.php";
	}
}

?>