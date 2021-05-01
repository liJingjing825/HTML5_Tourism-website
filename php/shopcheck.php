<?php
date_default_timezone_set("PRC");
header("Content-Type: text/html;charset=utf-8");

session_start();
$id=$_GET["id"];
$link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
           $sql="select * from ticket where id='$id'";
           $rs=mysql_query($sql);

           while($row=mysql_fetch_assoc($rs)){

$name=$row["tname"];
$id=$row["id"];
$pic=$row["pic"];
$price=$row["price"];

		   }	
		 
		  
$conn= mysqli_connect('localhost','root','root','www.yhgc.com');
            $time=date('Y-m-d H:m:s') ;

			$sql_select="insert into order1(id,name,price,number,pic,time) values($id,'$name',$price,1,'$pic','$time')";
			$ret =mysqli_query($conn,$sql_select);
			if($ret){
				header('refresh: 0; url=../ticket.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"添加成功\");\r\n";
                echo "</script>";
				exit;
		
            }else{
	    $sql_select="update order1 set number=number+1 where id='$id'";
		$ret =mysqli_query($conn,$sql_select);
			if($ret){
				//header('refresh: 0; url=../ticket.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"添加一张\");\r\n";
                echo "</script>";
				exit;
			}else{
				header('refresh: 0; url=../ticket.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"添加失败\");\r\n";
                echo "</script>";
				exit;
				
			} 
            }


?>