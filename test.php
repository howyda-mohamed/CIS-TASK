<?php
session_start();
$file='chating.txt';
$_SESSION['textarea']=$_POST['textarea'];
$data=array(
	"nickname"=>$_SESSION['nickname'],
	"text"=>$_SESSION['textarea']);
if(isset($_SESSION['textarea'])&&$_SESSION['textarea']!=null)
{
	for($i=0; ;$i++)
	{
		$implode=implode("\r\n",$data);
        $old=file_get_contents($file);
        file_put_contents($file,$old.$implode);
        $new=file_get_contents($file);
        echo $old;
        echo "<br />";
		echo $_SESSION['nickname']." ".$_SESSION['textarea']."<br>";
		break;
	}
}
else
{
	echo "sorry enter your massage"."<br>";
	include_once "chat.php";
	//header("location:login.html");
}
echo "<a href=out.php>log out</a>";