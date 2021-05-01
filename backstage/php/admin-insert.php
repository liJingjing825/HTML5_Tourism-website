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

    //添加管理员部分代码，注意，当数据库存在该管理员账户时，不允许添加
   
    $uid = $_POST['uid'];
    $userpass = $_POST['userpass'];
	$name = $_POST['name'];
        $sql = "insert into `admin`(uid,userpass,name) values('$uid','$userpass','$name')";
        $res = mysql_query($sql);
        if($res){
            echo "<script>alert('添加管理员成功');location.href='../admin-list.php';</script>";
        }else{
            echo "<script>alert('添加管理员失败');location.href='../admin-list.php';</script>";
        }
    
?>
