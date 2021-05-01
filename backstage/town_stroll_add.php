<?php
date_default_timezone_set("PRC");
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('www.yhgc.com', $conn);
mysql_query("SET NAMES UTF-8");
header("Content-type: text/html; charset=utf-8");
if ((isset($_GET['action']) == "save")){
  include_once('uploadclass1.php');
    $title=$_POST['title'];//路线名
	$route=$_POST['route'];//路线
	$uid=$_POST['uid'];//发布者
	$time=date('Y-m-d') ;
	$pic1=$uploadfile1;
	$pic2=$uploadfile2;
	$pic3=$uploadfile3;
	$pic4=$uploadfile4;
	$sql="insert into `subject_line`(title,route,uid,pic1,pic2,pic3,pic4,time)values('$title','$route','$uid','$pic1','$pic2','$pic3','$pic4','$time')";
    $result=mysql_query($sql,$conn);
   if($result){
  echo"<Script>window.alert('路线添加成功');location.href='subject_line_list.php'</Script>";
 }else{
	  echo"<Script>window.alert('路线添加失败');location.href='subject_line_add.php'</Script>";
  }
}

?>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />

<title>新增文章 - 文章管理 </title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="?action=save" method="post" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>路线名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>路线：</label>
			
			<textarea name="content" rows="15"  cols="90"></textarea>
			
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>发布者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" readonly="readonly" class="input-text" value="<?php session_start(); 	echo $_SESSION['uid'];?> " placeholder="" id="articletitle" name="uid">
			</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片1：</label>
			<div class="formControls col-xs-8 col-sm-9">
				
              <input name="file" type="file" value="浏览" >
              <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片2：</label>
			<div class="formControls col-xs-8 col-sm-9">
				
              <input name="file" type="file" value="浏览" >
              <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片3：</label>
			<div class="formControls col-xs-8 col-sm-9">
				
              <input name="file" type="file" value="浏览" >
              <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片4：</label>
			<div class="formControls col-xs-8 col-sm-9">
				
              <input name="file" type="file" value="浏览" >
              <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			</div>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				  <input class="note-edit-submit" type="submit" value="提交">
                  <input class="note-edit-cancel" type="reset" value="取消">
			</div>
			
		</div>
	</form>
	
</article>
</body>
</html>