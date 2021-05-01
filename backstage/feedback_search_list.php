<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<style type="text/css">
.p1{
overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp:2;
-webkit-box-orient: vertical;
}
</style>
<title>留言</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 留言<span class="c-gray en">&gt;</span> 留言管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;background-color: #84A76C" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="feedback_search_list.php" method="post">
		 <input type="text" name="keywords" id="" placeholder=" 留言标题" style="width:250px" class="input-text">
		 <button name="" id="" class="btn btn-success" type="submit" style="background-color: #84A76C;"><i class="Hui-iconfont">&#xe665;</i>搜留言</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
	<span class="l">
	 
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="20"><input type="checkbox" name="" value=""></th>
					<th width="120">留言标题</th>
					<th width="300">留言内容</th>
					<th width="80">发布手机号</th>
					<th width="80">发布时间</th>
					<th width="300">回复</th>
					<th width="50">操作</th>
				</tr>
			</thead>
			<tbody>
			 
          <?php $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
           $keywords=$_POST['keywords'];
           $sql="select * from `feedback` where title like '%$keywords%'";
           $rs=mysql_query($sql);
           while($row=mysql_fetch_assoc($rs)){
	       ?>

	        <tr>
	         
			  <td><?php echo $row['id']; ?></td>
			  <td><?php echo $row['title']; ?></td>
			   <td><p class="p1"><?php echo $row['content']; ?></p></td>
			  <td><?php echo $row['usertel']; ?></td>
			    <td><?php echo $row['time']; ?></td>
				  <td><?php echo $row['answer']; ?></td>
			  <td style="vertical-align: middle; text-align: center; ">
			   <a href="feedback_answer.php?id=<?php echo $row['id']?>">
			  <button type="button" class="btn"  style="background-color: #84A76C;color: #FFFFFF;border-radius:5px">
             回复
              </button></a>
			 
			  </td>
		      </tr>
		  <?php
		  }?>
			</tbody>
		</table>
	</div>

<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});
</script> 
</body>
</html>