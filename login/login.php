<?php
	$username = $_POST["name"];
	$password = $_POST["pass"];
	 	if ($username == "admin" &&  $password == "123") {
		echo "Login thanh cong";
	}else{
		echo "nhap lai";
	}
		

?>