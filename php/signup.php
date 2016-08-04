<?php
session_start();
$host="localhost";
$username="s3";
$password="shas";
$dbname="users";
$usrfname=$_POST["firstname"];
$usrname=$_POST["username"];
$usremail=$_POST["email"];
$usrpassword=$_POST["password"];
$connection=mysqli_connect($host,$username,$password,$dbname);
$query="INSERT INTO login(fname,username,email,password) VALUES($usrfname,$usrname,$usremail,$usrpassword)";
$res=mysqli_query($connection,$query);
if($res){
	
	echo"<script>
	window.location.href="/index.html"</script>"
}
?>