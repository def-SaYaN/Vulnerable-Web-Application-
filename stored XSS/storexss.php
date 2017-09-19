<?php

if(isset($_GET['submit']))
{
$db=mysqli_connect('localhost','root','','registration') or die($db);
$message = trim($_GET['comment']);
$name= trim($_GET['username']);
$selected_radio =$_GET['security'];

if($selected_radio=="Low"){
	 
$message=stripslashes($message);
$message=mysqli_real_escape_string($db,$message);
$name=mysqli_real_escape_string($db,$name);

$query="INSERT into storexss(comment,name) value ('$message','$name');";
$result=mysqli_query($db,$query) or die("Error");
}
if($selected_radio=="High")
{
$message=stripslashes($message);
$message=preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i','',$message);
$message=mysqli_real_escape_string($db,$message);
$name=mysqli_real_escape_string($db,$name);

$query="INSERT into storexss(comment,name) value ('$message','$name');";
$result=mysqli_query($db,$query) or die("Error");
}

$query="SELECT * from storexss;";
$result=mysqli_query($db,$query);
while(list($name,$comment)=mysqli_fetch_array($result)){
	echo "$name <br> ".htmlspecialchars($comment);
}

}
?>

