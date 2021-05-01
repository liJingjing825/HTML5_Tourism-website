<?php
 	header("Content-Type:textml; charset=utf8");
 	session_start();
 	if (isset($_POST['login'])){
		//获取用户提交的数据
		$usertel = trim($_POST['usertel']);
		$password = trim($_POST['password']);
		
			$conn=mysqli_connect('localhost','root','root','www.yhgc.com');
			mysqli_set_charset($conn,'utf8');
			$sql="select `password` from `user` where `usertel`='$usertel'and `password`='$password'";
			$result=mysqli_query($conn,$sql);
		    
			
			if (!$result) {
              printf("Error: %s\n", mysqli_error($conn));
              exit();
            }
		    
			$data=mysqli_fetch_assoc($result);
			if(!$data){
				//用户名或密码错误
				header('refresh: 3; url=../login-register.html');
				
             echo"<script> alert('用户名或密码错误');window.location.href='../login-register.html';</script>";
//echo "用户名或者密码错误,3秒后跳转到登录页面";
			}else{
				//登录成功,将用户信息保存到session中
				$_SESSION['usertel'] = $usertel; 
				$_SESSION['islogin'] = 1; 
				//跳转到用户首页
				header("Location:../home-page.php");	
		}
	}
?>
