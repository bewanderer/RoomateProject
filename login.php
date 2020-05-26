<?php 
include_once 'connect_to_server.php';

if(isset($_POST['username_login'])){
	$user_name=$_POST['username_login'];
	$pass_word=$_POST['password_login'];

	$sql="select * from user login where username='".$user_name."' AND password='".$pass_word."' limit 100 ";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){

		echo " Login Successful";
		exit();
	}
	else{
		echo " Wrong Login Credentials, Try Again!";
		exit();
	}
}


?>