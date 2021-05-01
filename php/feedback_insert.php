<?php
 header("Content-Type: text/html;charset=UTF-8");
date_default_timezone_set("PRC");
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

    //添加留言代码，注意，当数据库不存在该账户时，不允许添加
    $title = $_POST['title'];//标题
	$content = $_POST['content'];//内容
	$time=date('Y-m-d') ;//提交时间
	$usertel= $_POST['usertel'];//电话
    $sql = "insert into `feedback`(title,content,time,usertel)values('$title','$content','$time','$usertel')";
    $data = mysql_query($sql);

        if($data){
            echo "<script>alert('留言提交成功');window.location.href='../feedback.php';</script>";
        } else{
            echo "<script>alert('留言提交失败');window.location.href='../feedback.php';</script>";
        } 
    
?>
