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

    //管理员回复留言部分代码
   
    $id=$_GET['id'];
	$answer = $_POST['answer'];
	
        $sql="update feedback set answer='$answer' where id ='$id'";
        $res = mysql_query($sql);
        if($res){
            echo "<script>alert('留言回复成功');location.href='../feedback_list.php';</script>";
        }else{
            echo "<script>alert('留言回复失败');location.href='../feedback_list.php';</script>";
        }
    
?>
