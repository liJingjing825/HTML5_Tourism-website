<?php
	

define('HOST','localhost');

define('USERNAME','root');

define('PASSWORD','root');
if(!($con= mysql_connect(HOST, USERNAME, PASSWORD))){

echo mysql_error();

};

if(!(Mysql_select_db('www.yhgc.com'))){

echo mysql_error();

};

//字符集

if(Mysql_query('set names utf8')){

echo mysql_error();

};

$id= $_GET['id'];
$deletesql="delete from `town_stroll` where `id`= '$id'";

if(mysql_query($deletesql)){

echo"<script> alert('景点删除成功');window.location.href='../town_stroll_list.php';</script>";
}else{

echo"<script> alert('景点删除失败');window.location.href='../town_stroll_list.php';</script>";

}

?>