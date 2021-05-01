<?php
session_start();
$id=$_GET["id"];
header("Content-Type: text/html;charset=utf-8");
$link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
           $sql="delete from order1 where id=$id";
           $rs=mysql_query($sql);
        

			if($rs){
				header('refresh: 0; url=person_center.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"删除成功\");\r\n";
                echo "</script>";
				exit;
		
            }else{
				
	           header('refresh: 0; url=person_center.php');
				echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"请重试\");\r\n";
                echo "</script>";
				exit;
			
            }


?>