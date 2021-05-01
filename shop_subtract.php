<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
$id=$_GET["id"];

$link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
           $sql="update order1 set number=number-1 where id='$id'";
           $rs=mysql_query($sql);
			if($rs){
				header('refresh: 0; url=person_center.php');
			
				exit;
		
            }else{
				
	           header('refresh: 0; url=person_center.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"请重试\");\r\n";
                echo "</script>";
				exit;
			
            }


?>