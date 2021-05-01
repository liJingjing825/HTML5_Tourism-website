<?php
 	header("Content-Type:textml; charset=utf8");
 	session_start();
 	if (isset($_POST['login'])){
		//获取用户提交的数据
		$uid = trim($_POST['uid']);
		$userpass = trim($_POST['userpass']);
		
			$conn=mysqli_connect('localhost','root','root','www.yhgc.com');
			mysqli_set_charset($conn,'utf8');
			$sql="select `uid` from `admin` where `uid`='$uid' and `userpass`='$userpass'";
			$result=mysqli_query($conn,$sql);
			$data=mysqli_fetch_assoc($result);
		
			if(!$data){
				//用户名或密码错误
				header('refresh: 3; url=../admin.html');
				echo "用户名或者密码错误,3秒后跳转到登录页面";
			}else{
				//登录成功,将用户信息保存到session中
				$_SESSION['uid'] = $uid; 
				
				$_SESSION['islogin'] = 1; 
				//跳转到用户首页
				header("Location:../backstage.php");	
			}
		}
?>