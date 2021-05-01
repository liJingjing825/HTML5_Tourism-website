<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>运河古城</title>
	<meta name="keywords" content="运河古城">
	<meta name="description" content="运河古城">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="images/yhgc.png">
	
	<!-- include main css -->
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="font-awesome-4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' media="all" />
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	
	<!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
<div>
	<!--header-->
	<header class="header_zi">
	   <div class="container">
		   <div class="logo">
	   	   		<a href="home-page.php"><img src="images/logo.png" alt="" /></a>
		   </div>
		   <a href="#mmenu" class="phone-nav"><i class="fa fa-list"></i></a>
		  <div class="logo_right">
		  	 <nav class="nav">
		   		<ul>    
		   			<li><a href="index.html">首页</a></li>
		   			<li><a href="scenic_overview.php">大美古城</a></li>
		   			<li><a href="court_travel.html">创意路线</a>
		   				<ul>
		   					<li><a href="court_travel.html">私人定制</a></li>  
		   					<li><a href="court_travel.html">经典路线</a></li>
		   					<li><a href="court_travel.html">主题路线</a></li>
		   				</ul>
		   			</li>
		   			<li><a href="comfortable.html">玩转古城</a>
						<ul>
		   					<li><a href="court_travel.html">古城味道</a></li>  
		   					<li><a href="court_travel.html">古城住宿</a></li>
		   					<li><a href="court_travel.html">古城漫游</a></li>
		   					<li><a href="court_travel.html">古城购物</a></li>
		   				</ul>
					</li>
		   			<li><a href="news.php" class="active">旅游动态</a>
		   				<ul>
		   					<li><a href="news.php">实时公告</a></li>
		   					<li><a href="news.php">古城资讯</a></li>
		   				</ul>
		   			</li>
					<li><a href="news.html">预定服务</a>
		   				<ul>
		   					<li><a href="news.html">预定场馆</a></li>
		   					<li><a href="news.html">预订门票</a></li>
		   				</ul>
		   			</li>
                 <li><a href="feedback.php" >留言中心</a></li>
		   		
		  	 </nav>
			 <div class="search">
		  	 	
		  	 				  	 	 <?php
 session_start();
 if (isset($_POST['login'])){
 echo' <p ><a  href="login-register.html">登录/注册</a></p>';
 }else{
 echo @$_SESSION['usertel'];
 if(@$_SESSION['usertel']!=''){
 echo'<form action="" method="post">';
 echo '<input name="lo" type="submit" class="btn"  value="注销" />';
  echo'</form>';
  }
 }
 if(isset($_POST['lo'])||(@$_SESSION['usertel']=='')){
	  echo' <a href="login-register.html">登录/注册</a>';
	 session_destroy();
	 
 }

?>
		  	 </div>
		  </div>
	   	
	   </div>
	</header>
			
	<!--banner  start-->
	<section class="banner_zi">
	    <div><img src="images/banner_new.png" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
	 <?php $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");//选择库
		   $title= $_GET['title'];
		  
           $sql="select * from `article` where title= '$title' ";
           $rs=mysql_query($sql);
           $row=mysql_fetch_assoc($rs);
	       ?>
		<span>位置：</span><a href="index.php">首页 </a> > <a href="news.php">旅游动态</a> > <span class="active"><?php echo $row['title']."</br>"; ?></span>
	</div>
	<div class="news_show">
		<span class="show_t"><?php echo $row['title']."</br>"; ?></span>
		<span class="fa_time">来源：<?php echo $row['uid']."</br>"; ?>   &nbsp;&nbsp;    发布时间：<?php echo $row['time']."</br>"; ?></span>
		<p>
			<?php echo $row['content']."</br>"; ?>
		</p>
		<div class="s_img clearfix">
			<div class="pic">
			<img src="<?php echo 'backstage/'.$row['pic']; ?>" alt="" class="vcenter" width='100%' height='100%' border='0' />
			
				<i></i>
			</div>
			<div class="pic">
			<img src="<?php echo 'backstage/'.$row['pic']; ?>" alt="" class="vcenter" width='100%' height='100%' border='0' />
				<i></i>
			</div>	
		</div>
		<p>
			同时，为客户准备了微景观制作DIY活动，亲手制作微景观故事瓶，
			把清新的绿色带回家，让广大青少年在亲手制作绿植微景观的过程中
			锻炼动手能力，培养想象力，创造力和审美能力，同时，增强绿化意
			识、环保意识和生态意识。暑期近在眼前，还在犹豫带孩子去哪儿玩
			吗？炎热的夏天，一颗躁动的心，背上收拾好的背包，
			走遍大好河山，感受大千世界，还不如隐居室外桃源桃花苑天地精品。少一些城市的喧嚣，回归大自然的清新脱俗，来一场说走就走的夏日之旅吧。
		</p>
		<p>
			
同时，为客户准备了微景观制作DIY活动，亲手制作微景观故事瓶，把清新的
绿色带回家，让广大青少年在亲手制作绿植微景观的过程中
锻炼动手能力，培养想象力，创造力和审美能力，同时，增强绿化意识、环保意识和生态意识
		</p>
		<div class="s_x clearfix">
		
			<a href="" class="s_prev">上一篇：这是我们想去的地方</a>
			<a href="" class="x_next">下一篇：花落流水春又去</a>
		</div>
	</div>

 
    <!--footer  start-->
     <footer class="footer">
       <div class="footer_con">
       		<div class="con">
       			<div class="nei">
       				<div class="">
       					<ul class="di_nav clearfix">
			   			<li><a href="scenic_overview.html">大美古城</a></li>
			   			<li><a href="court_travel.html">创意路线</a></li>
			   			<li><a href="comfortable.html">玩转古城</a></li>
			   			<li><a href="news.php">旅游动态</a></li>
			   			<li><a href="feedback.html">预订服务</a></li>
			   			<li><a href="contact.php">留言中心</a></li>
	       				</ul>
	       				<div class="links">友情链接
	       					<ul>
	       						<li><a href="https://www.sdta.cn/">好客山东网</a></li>
					   			<li><a href="http://tezgcgwh.zaozhuang.gov.cn/">古城管委会</a></li>
					   			<li><a href="http://www.baidu.com">百度一下</a></li>
	       					</ul>
	       				</div>
       				</div>
       				<div class="clear"></div>
       				<div class="lian">
       					手机：<a href="tel:178 6327 5886">178 6327 5886</a><br />
						邮箱：<a href="mailto:lijingjing825@163.com">lijingjing825@163.com</a><br />
						地址：枣庄学院信息科学与工程学院<br />
						<a href="map.html">景区地图</a><br />
						<span> 
							<a href="#" target="_blank">
								<img src="images/yu.png" alt="" />
							</a>
							
							<span class="er_a">
								<img src="images/er.png" alt="" class="one_img"/> 
								运河古城公众号
								<img src="images/erwei.png" alt="" class="er_img"/>
							</span>
							
						</span> 	
       				</div>
       				
       			</div>
       		</div>
       		
       </div>
       <div class="copy">Copyright© 2020 版权所有：16软件开发1班李静静 </div>
	</footer>
    <!--footer  end-->

	
		
</div>

<!--Include Js-->
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<!--移动端导航-->
<script src="js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>

<script src="js/public.js" type="text/javascript" charset="utf-8"></script>

<!--slick-->
<script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/wow.js" type="text/javascript" charset="utf-8"></script>

<!--placeholder-->
<script src="js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){ $('input, textarea').placeholder(); });
</script>

<!--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</body>
</html>
