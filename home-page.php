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
		  	 	
		  	 		<h5>欢迎<?php if(!session_id()) session_start(); 	echo $_SESSION['usertel'];?></h5>	
		  	 		<li><a href="backstage/admin.html">后台登录</a></li>	
		  	 </div>
       </div>
	   </div>
	</header>	
	<!--banner  start-->
	<section class="banner">
	    <div><a href="home-page.php"><img src="images/banner1.jpg" alt=""></a></div>
	    <div><a href="home-page.php"><img src="images/banner2.jpg" alt=""></a></div>
	    <div><a href="home-page.php"><img src="images/banner3.jpg" alt=""></a></div>
</section>
	<!--banner end-->
	<div class="jqgk">
		<div class="contai">
			<div class="top_tit">
				<span class="span1"><a href="scenic_overview.php">大美古城</a></span><br />
				<span class="span2">SCENIC OVERVIEW</span>
			</div>
			<p class="wow bounceIn">
				台儿庄运河古城位于世界文化遗产--京杭大运河的中心点，
				有"中国最美水乡"之誉，国家5A级旅游景区，坐落于山东省枣庄市台儿庄区、
				鲁苏豫皖四省交界地带,是一座可以舟楫摇曳、遍游全城的东方水城，中国第一座、世界第三座二战纪念城市。
				台儿庄运河古城既是民族精神的象征、历史的丰碑，也是运河文化的承载体，至今仍保留有不少的遗存，被世界旅游组织誉为"活着的古运河"、"京杭运河仅存的遗产村庄"。
				修缮台儿庄运河古城，是几代台儿庄人民的梦想。
				古河道，古码头，中华古水城，二战纪念城市，大陆首家海峡两岸交流基地。
				修缮后的台儿庄运河古城，与华沙同属世界上仅有的两座因二战炮火毁坏而作为世界文化遗产重建的城市。
				古城致力于打造成为集“运河文化”和“大战文化”为一城，融“齐鲁豪情”和“江南韵致”为一域，极具人文魅力的旅游目的地，成为沿运独有、世界知名的旅游度假休闲区，成为世界文化遗产中的一颗明珠、一块瑰宝。

			</p>
			<div class="xia_x">
				<!--<span class="img"><a href="scenic_overview.php"></a></span>-->
			</div>
		</div>	
	</div>
	<div class="wyzl">
		<div class="top_tit">
			<span class="span1"><a href="customized.php">创意路线</a></span><br />
			<span class="span2">CREATIVE ROUTE</span> 
		</div>
		<ul class="clearfix"> 
			<li class="wow bounceIn">
				<a href="customized.php"><img src="images/travel1.jpg" alt="" class="vcenter" /><i></i></a>
				<a href="customized.php">私人定制</a>
			</li>
			<li class="wow bounceIn">
				<a href="classic_route.php"><img src="images/travel2.jpg" alt="" class="vcenter" /><i></i></a>
				<a href="classic_route.php">经典路线</a>
			</li>
			<li class="wow bounceIn">
				<a href="subject_line.php"><img src="images/travel3.jpg" alt="" class="vcenter" /><i></i></a>
				<a href="subject_line.php">主题路线</a>
			</li>
		</ul>
	</div>
	<!--wyzl end-->
	<div class="syzz">
		<div class="top_tit">
        	<span class="span1"><a href="scenic_overview.html">玩转古城</a></span><br />
			<span class="span2">PLAY THE OLD TOWN</span>  
		</div>
		<div class="syzz_con  clearfix">
			<div class="left">
				<div><a href="town_cuisine.php"><img src="images/cui.jpg" alt="" / class="vcenter"> <i></i></a></div>
				<div><a href="town_lodging.php"><img src="images/log.jpg" alt="" /  class="vcenter"> <i></i></a></div>
				<div><a href="town_stroll.php"><img src="images/str.jpg" alt="" /  class="vcenter"> <i></i></a></div>
				<div><a href="town_shopping.php"><img src="images/shop.jpg" alt="" /  class="vcenter"> <i></i></a></div>
			</div>
			<div class="right">
				<img src="images/gucheng.png" alt="" />
				<div class="fang_t">
					<span>玩 |</span>
					<span>转 |</span>
					<span>古 |</span>
					<span>城 |</span>
				</div>
				<div class="fang_c">
				   中华古水城  英雄台儿庄 中国最美水乡  一个寻梦的地方 中国首座二战纪念城市 运河文化活化石 中国民居建筑博物馆 
				</div>
				<div class="pr_ne clearfix">
					<span class="pr">
					
						上一个
					</span>
					<span class="ne">
						下一个
					</span>
				</div>
			</div>
		</div>
		<div class="xia_x">
				<!--<span class="img"></span>-->
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
