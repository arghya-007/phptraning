<?php
session_start()
if ($_SESSION['username']=="admin") {
	session_unset();
	echo "logged out";
	echo $_SESSION['username'];
	
}
else
{
	echo "user not loged out";
}