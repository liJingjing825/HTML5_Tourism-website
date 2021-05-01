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
	<style type="text/css">
.p1{
overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp:5;
-webkit-box-orient: vertical;
}
</style>

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
		   			<li><a href="home-page.php">首页</a></li>
		   			<li><a href="scenic_overview.php">大美古城</a></li>
		   			<li><a href="customized.php" >创意路线</a>
		   				<ul>
		   				     <li><a href="customized.php">私人定制</a></li>  
		   					<li><a href="classic_route.php">经典路线</a></li>
		   					<li><a href="subject_line.php">主题路线</a></li>
		   				</ul>
		   			</li>
		   			<li><a href="town_cuisine.php">玩转古城</a>
						<ul>
		   					    <li><a href="town_cuisine.php">古城味道</a></li>  
								<li><a href="town_lodging.php">古城住宿</a></li>
								<li><a href="town_stroll.php">古城漫游</a></li>
								<li><a href="town_shopping.php">古城购物</a></li>
		   				</ul>
					</li>
		   			<li><a href="news.php" >旅游动态</a>
		   				<ul>
		   					<li><a href="news.php">实时公告</a></li>
		   					<li><a href="news.php">古城资讯</a></li>
		   				</ul>
		   			</li>
					<li><a href="ticket.php" class="active">门票预定</a></li>
                 <li><a href="feedback.php">留言中心</a></li>
		   		 <li><a href="person_center.php">个人中心</a></li>
		   		
		  	 </nav>
			<div class="search">
		  	 	
		  	 		<h5>欢迎<?php if(!session_id()) session_start(); 	echo $_SESSION['usertel'];?></h5>	
		  	 		<li><a href="backstage/admin.html">后台登录</a></li>	
		  	 </div>
		  </div>
	   	
	   </div>
	</header>
			
	<!--banner  start-->
	<section class="banner_zi">
	    <div><img src="images/1.jpg" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="home-page.php">首页 </a> > <span class="active">门票预定</span>
	</div>
		
	<div class="news_zi">
		<div class="top_qie">
		    <a href="#information" >门票信息</a>
			<a href="notice.php" >预定须知</a>
		</div>
		
		 
		<!--门票信息-->
		<div id="information"> 
		
		<ul class="news_zi_ul" >
		<?php
date_default_timezone_set("PRC");
  
  $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");

           $sql1="select * from `ticket` ";
           $rs=mysql_query($sql1);
           while($row=mysql_fetch_assoc($rs)){
			   $i=1;
			   $i++;
?>
			<li class="clearfix">
				<div class="news_left clearfix">
					<div class="pic">
						 <img src="<?php echo 'backstage/'.$row['pic']; ?>"  width='100px' height='100px' border='0' />
						<i></i>
					</div>
					<div class="txt">
						<h3><?php echo $row['tname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥".$row['price']?></h3>
						门票日期：<input type="date" name="date"/>
						<p class="p1">
							<?php echo $row['tnotice']."</br>"; ?>
						</p>
						
					</div>
				</div>
				<div class="news_right">
					 <form action="php/shopcheck.php?id=<?php echo $row['id'];?>" method="POST" >    
						<input type="submit" value="" style="width:55px;height:50px;border:none;background:url(images/gouwuche.png) left top no-repeat;"/>
					</form>
				</div>
			</li>
			
			<?php
           }
       ?>
		</ul>
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

	<!--移动端  Mmenu-->
	<nav id="mmenu">
		
		<ul>
			
			<li><a href="index.html" class="active">首页</a></li>
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
   			<li><a href="news.php">旅游动态</a>
   				<ul>
   					<li><a href="news.php">实时公告</a></li>
   					<li><a href="news.php">古城资讯</a></li>
   				</ul>
   			</li>
			<li><a href="contact.html">预订服务</a></li>
   			<li><a href="feedback.php">留言中心</a></li>
   			
			 
		</ul>
	</nav>	
		
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
