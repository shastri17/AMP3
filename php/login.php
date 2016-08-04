<?php
session_start();
$host='localhost';
$username='s3';
$password='shas';
$dbname='users';
$usrname=_POST["username"];
$connection=mysqli_connect($host,$username,$password,$dbname);
$pusername=$_POST["username"];
$ppassword=$_POST["password"];
$query="SELECT password,fname from login where username='$pusername'";
$res=mysqli_query($connection,$query)
if($res){
	while($row=mysqli_fetch_array($res)){
		if($ppassword==$row["password"]){
			$_SESSION["login"]=true;
			$_SESSION["username"]=$pusername;
			header("Location: /pages/main.html");
		}
	}
	
}
?>