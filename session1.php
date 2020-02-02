<?php
session_start();
$_SESSION["username"]=$_POST['uname'];
$_SESSION["password"]=$_POST['pwd'];
if ($_SESSION["username"] && $_POST['pwd']) 
{
	# code...
	echo "session started";

}
else{
	echo "session not started";
}
