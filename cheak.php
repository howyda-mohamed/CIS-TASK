<?php
if(isset($_POST['sub']))
{
	if($_POST['nickname'] != null)
	{
		session_start();
		$_SESSION['nickname']=$_POST['nickname'];
		//include_once 'chat.php';
		header("location:chat.php");
	}
	else
	{
		echo "error please enter your nickname"."<br>";
		include_once 'login.html';
	}
}
else
{
	include_once 'login.html';
}