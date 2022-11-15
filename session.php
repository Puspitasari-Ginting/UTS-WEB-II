<?php
session_start();
require 'login.php';

if( isset($_POST ["user_id"])){

	$username= $_POST["username"];
	$password= $_POST["password"];

	$result=$koneksi->query("SELECT * FROM user WHERE username='$username' ");

//cek username
	if(mysqli_num_rows($result)===1){

//cekk password

	$row - mysqli_fetch_assoc($result);
	if(password_verify($password,$row["password"])){

//set session

	$_SESSION["user_id"] = true;

	header("location:index2.php");
	}
	}

}
?>