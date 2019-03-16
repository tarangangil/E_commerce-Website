<?php
$conn=mysqli_connect("localhost", "root", "", "store");
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
