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

</head>
<body>
	
<div>
	<!--header-->
	<header class="header home_p">
	   <div class="container">
		   <div class="logo">
	   	   		<a href="index.php"><img src="images/logo.png" alt="" /></a>
		   </div>
		   <a href="#mmenu" class="phone-nav"><i class="fa fa-list"></i></a>
		  <div class="logo_right">
		  	 <nav class="nav">
		   		<ul>    
		   			<li><a href="home-page.php" class="active">首页</a></li>
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
		   			<li><a href="news.php">旅游动态</a>
		   				<ul>
		   					<li><a href="news.php">实时公告</a></li>
		   					<li><a href="news.php">古城资讯</a></li>
		   				</ul>
		   			</li>
		   			<li><a href="ticket.php">门票预定</a></li>
		   			</li>
                 <li><a href="feedback.php">留言中心</a></li>
		   		 <li><a href="person_center.php">个人中心</a></li>
		  	 </nav>
			 <div class="search">
		  	 	 <?php
 session_start();
 if (isset($_POST['login'])){
 echo' <span class="l_g" ><a  href="login-register.html">登录/注册</a></span>';
  echo' <p ><a href="backstage/admin.html">后台管理</a></p>';
 }else{
 echo '欢迎'.@$_SESSION['usertel'];
 if(@$_SESSION['usertel']!=''){
 echo'<form action="" method="post">';
 echo '<input name="lo" type="submit"  value="注销" />';
  echo'</form>';
  }
 }
 if(isset($_POST['lo'])||(@$_SESSION['usertel']=='')){
	  echo' <span class="l_g"><a href="login-register.html">登录/注册</a></span>';
	   echo' <a href="backstage/admin.html">后台管理</a>';
	 session_destroy();
	 
 }

?>
		  	 </div>
		  	 
			
        </div>
	   	
	   </div>
	</header>
			
	<!--banner  start-->
	<section class="banner_zi">
	    
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="index.html">首页 </a> > <span class="active">联系我们</span>
	</div>
		<div class="contact_con">
			<div class="top_tit">
				<span class="span1"><a href="contact.html">联系我们</a></span><br />
				<span class="con_span">您好，如您有运河古城的相关问题，可直接联系我们！</span>
			</div>
			<div class="nei clearfix">
				<div class="left">
					<a href="mailto:Eason.wang@71360.com"><img src="images/email.png" alt="" />lijingjing825@163.com</a>
					<a href="tel:189 1610 1908"><img src="images/shouji.png" alt="" />178 6327 5886</a>
					<span > <img src="images/weizhi.png" alt="" />枣庄学院 信息科学与工程学院</span>
				<a href="http://map.baidu.com/?newmap" target="_blank" class="ditu"><i class="fa fa-search"></i>查看地图</a>
				</div>
				<div class="right"></div>
			</div>
		</div>
     <!--footer  start-->
    <footer class="footer">
       <div class="footer_con">
       		<div class="con">
       			<div class="nei">
       				<div class="">
       					<ul class="di_nav clearfix">
			   			<li><a href="scenic_overview.php">大美古城</a></li>
			   			<li><a href="costomized.php">创意路线</a></li>
			   			<li><a href="town_cuisine.php">玩转古城</a></li>
			   			<li><a href="news.php">旅游动态</a></li>
			   			<li><a href="feedback.html">预订服务</a></li>
			   			<li><a href="feedback.php">留言中心</a></li>
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
			
			<li><a href="home-page.php" class="active">首页</a></li>
   			<li><a href="scenic_overview.php">大美古城</a></li>
   			<li><a href="costomized.php">创意路线</a>
            	<ul>
                    <li><a href="costomized.php">私人定制</a></li>  
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



<!--slick-->
<script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/wow.js" type="text/javascript" charset="utf-8"></script>

<!--placeholder-->
<script src="js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){ $('input, textarea').placeholder(); });
</script>
<script src="js/public.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</body>
</html>