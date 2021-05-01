<!DOCTYPE HTML>
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
<title>用户列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户<span class="c-gray en">&gt;</span> 用户<a class="btn btn-success radius r" style="line-height:1.6em ;margin-top:3px;background-color: #84A76C" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container"> 
  <form action='member-search-list.php' method='post'>
	<div class="text-c"> 
	</div>
 </form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
  </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">用户</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="100">手机号</th>
				<th width="100">密码</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			 <?php $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
           $keywords=$_POST['keywords'];
           $sql="select * from `user` where usertel like '%$keywords%'";
           $rs=mysql_query($sql);
           while($row=mysql_fetch_assoc($rs)){
	       ?>
	        <tr>
	          <td><?php echo $row['id']; ?></td>
			  <td><?php echo $row['usertel']; ?></td>
			  <td><?php echo $row['password']; ?></td>
			  <td style="vertical-align: middle; text-align: center; "><a href="member_del.php?id=<?php echo $row['id']?>">
			  <button type="button" class="btn"  style="background-color: #84A76C;color: #FFFFFF;border-radius:5px">
               删除
              </button></a>
			  </td> 
		      </tr>
		  <?php
		  }?>
		</tbody>
	</table>
</div>

</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
</script>
</body>
</html>