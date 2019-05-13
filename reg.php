<?php
	error_reporting(E_WAENINGS);
	$domain=$_REQUEST["mainDomain"];
	$name=$_REQUEST["name"];
	$password=$_REQUEST["password"];
	$cfm_pwd=$_REQUEST["mainConfirmPassword"];
	$mobile=$_REQUEST["mobile"];

	echo $name."@".$domain;


	// $user=
	// include("conc.php");

	// $sql="insert into mails(user_name,pwd,mobile) values(?,?,?)";
	// $stmt=mysqli_prepare($conn,$sql);
	// mysqli_stmt_bind_param($stmt,"sss",$name,$pwd,$mobile);//完成参数绑定
	// mysqli_stmt_execute($stmt);
	// if(mysqli_affected_rows($conn)>0){
	// 	//发送注册成功邮件

	// 	//提示信息并返回注册页
	// 	echo "<script>";
	// 	echo "alert('注册成功！);";
	// 	echo "window.location='index.html';";
	// 	echo "</script>";
	// }
	// else{
	// 	//提示失败信息并返回注册页
	// 	echo "<script>";
	// 	echo "alert('注册失败！);";
	// 	echo "window.location='index.html';";
	// 	echo "</script>";
	// }
 
 ?>