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
<title>文章</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 文章<span class="c-gray en">&gt;</span> 文章管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;background-color: #84A76C" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action='article_search_list.php' method='post'>
	<div class="text-c"> 
	<form action="article_search_list.php" method="post">
		<input type="text" class="input-text" style="width:250px" placeholder="输入标题" id="" name="keywords">
		<button type="submit" class="btn btn-success" id=""style="background-color: #84A76C;"><i class="Hui-iconfont">&#xe665;</i>搜文章</button>
	</form> 
	</div>
 </form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
	<span class="l">
	  <a style="background-color: #84A76C;" class="btn btn-primary radius" data-title="添加文章" href="article-add.php"  href="javascript:;">
	  <i class="Hui-iconfont">&#xe600;</i> 添加文章</a></span>  </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="20"><input type="checkbox" name="" value=""></th>
					<th width="120">文章标题</th>
					<th width="50">文章分类</th>
					<th width="20">发布者</th>
					<th width="240">文章内容</th>
					<th width="70">发布时间</th>
					<th width="100">图片</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			 
          <?php
date_default_timezone_set("PRC");
   $currentpage = 1;
if(isset($_GET['page']))
  $currentpage = $_GET['page'];

  $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");
$sql ="SELECT count(*) as 'count' from article";//查询记录的sql语句
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
$count = $arr['count'];
$pagesize = 5;
$pages = ceil($count/$pagesize);//共多少页
$prepage = $currentpage -1;
if($prepage<=0)
  $prepage=1;
$nextpage = $currentpage+1;
if($nextpage >= $pages){
 $nextpage = $pages;
}
$start =($currentpage-1) * $pagesize;//起始位置


//选择库
           $sql1="select * from `article`  order by time desc limit $start,$pagesize";
           $rs=mysql_query($sql1);
           while($row=mysql_fetch_assoc($rs)){
			   $i=1;
			   $i++;
?>
	        <tr>
	         
			  <td><?php echo $row['id']; ?></td>
			  <td><?php echo $row['title']; ?></td>
	          <td><?php echo $row['class'] ;?></td>
			   <td><?php echo $row['uid']; ?></td>
			   <td><p class="p1"><?php echo $row['content']; ?></p></td>
			     <td><?php echo $row['time']; ?></td>
			   <td width='100'><img src="<?php echo $row['pic']; ?>"  width='100' height='100' border='0'></td>
			  <td style="vertical-align: middle; text-align: center; ">
			   
			  <a href="article-del.php?id=<?php echo $row['id']?>">
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
	<div class="page">
			<script type="text/javascript">
var strcookie = document.cookie;
var arrcookie = strcookie.split(";");
for ( var i = 0; i < arrcookie.length; i++) {
var arr = arrcookie[i].split("=");
if (arr[0] =='amount'){
number=arr[1];}
}
var xh=1;
while(xh<=number){
    var ob=document.getElementById(xh.toString());
  ob.xh=xh;
  ob.onclick=function(){document.cookie="rowid="+this.xh;}
  xh++;
}
</script> 

 <a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$prepage; ?>" rel="external nofollow" >上一页</a>  <a href="<?php echo $_SERVER['PHP_SELF'].'?page='.$nextpage; ?>" rel="external nofollow" >下一页</a>
		</div>
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