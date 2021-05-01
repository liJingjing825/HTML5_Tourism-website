<?php
 	header("Content-Type:text/html; charset=utf8");
 	//session_start();
 	
		//获取用户提交的数据
		$usertel =$_POST['usertel'];
		$password =$_POST['password'];
		$passwordq=$_POST['passwordq'];
		if (($usertel == '') ||($password== '')||($passwordq=='')){
 			header('refresh: 3; url=../login-register.html');
 			echo "该用户名或者密码不能为空,3秒后跳转到登录页面";
 			exit;
		}else if  ($password!=$passwordq){
 			//用户名或密码错误
 			header('refresh: 3; url=../login-register.html');
 			echo "密码不一致";
 		}else{
			$conn= mysqli_connect('localhost','root','root','www.yhgc.com');
			$sql_select="insert into user(usertel,password) values('$usertel','$password')";
			$ret =mysqli_query($conn,$sql_select);
			
			if($ret){
				
				
				header('refresh:1;url=../login-register.html');	
				echo '注册成功！请登录！';
			}else{
				
				header('refresh:1;url=../login-register.html');	
				echo '手机号已存在，请重新输入！';
			}
		} 
	
?>

