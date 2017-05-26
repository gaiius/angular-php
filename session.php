<?php 
session_start();
include('koneksi.php');
if(isset($_POST['login'])){
	if($_POST['username'] !='' && $_POST['password'] !=''){
	$query=mysql_query("select * from login where username ='".$_POST['username']."' and password='".$_POST['password']."'");
	$data=mysql_fetch_array($query);
	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];
	if($password == $_POST['password']){
		$_SESSION['level'] = $level;
		$_SESSION['nama'] = $username;
		
		header('location:home.php');
	}else{
		header('location:index.php');
	}
	}else{
		header('location:index.php');
	}
	
	
}else{
	header('location:index.php');
}


?>
