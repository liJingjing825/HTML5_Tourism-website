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

    //添加
    $uname = $_POST['uname'];//姓名
	$usertel= $_POST['usertel'];//电话
    $uemail = $_POST['uemail'];//邮箱
	$udate = $_POST['udate'];//出行日期
	$udays = $_POST['udays'];//出行天数
	$unum = $_POST['unum'];//出行人数	
	$budget = $_POST['budget'];//预算
	$subject_matter = $_POST['subject_matter'];//主题
	$arrangement = $_POST['arrangement'];//安排
	$type = $_POST['type'];//类型
	$demands = $_POST['demands'];//需求
	$time=date('Y-m-d') ;//提交时间
    $sql = "insert into `customized`(uname,usertel,uemail,udate,udays,unum,budget,subject_matter,arrangement,type,demands,time)values('$uname','$usertel','$uemail','$udate','$udays','$unum','$budget','$subject_matter','$arrangement','$type','$demands','$time')";
    $data = mysql_query($sql);

        if($data){
            echo "<script>alert('需求提交成功');window.location.href='../customized.php';</script>";
        } else{
            echo "<script>alert('需求提交失败');window.location.href='../customized.php';</script>";
        } 
    
?>
