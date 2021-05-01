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
-webkit-line-clamp:3;
-webkit-box-orient: vertical;
}
.table_list{
	padding:20px ;
	margin：100px;
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
		   			</li>
                 <li><a href="feedback.php">留言中心</a></li>
		   		 <li><a href="person_center.php">个人中心</a></li>
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
	    <div><img src="images/notic.jpg" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="ticket.php">预定门票 </a> > <span class="active">预定须知</span>
	</div>
	  <div id="tabcon-list">
	  <div class="list-txt"> 
	  <p style="white-space: normal;"><strong><span style="font-family: 宋体; font-size: 14px;">预定须知</span></strong></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">&nbsp;</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">温馨提示</span></p><p style="white-space: normal;"><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">【</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">入园</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">须知】</span></p><p style="white-space: normal;"><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">入园需</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">持身份证至景区检票口</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">验证</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">入园，如未持证件，订单无法使用，如需发票，请至任意售票处</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">窗口</span><span style="font-family: 宋体; color: rgb(255, 0, 0); font-size: 14px;">换取。门票对景区内需另行付费项目无效。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">【优免政策】</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">一、半票优惠对象：（仅限挂牌价门票，半票政策不包含个人在景区内餐饮、住宿、车船等自行体验消费项目）</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">60周岁<span style="font-family: Calibri;">-69</span>周岁（含<span style="font-family: Calibri;">69</span>周岁）老年人（凭新版机打老年证、身份证）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">二、免费优惠条件（仅限挂牌价门票，所需证件均为证件原件，免费政策不包含个人在景区内餐饮、住宿、车船等自行体验消费项目）</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">1、<span style="font-family: Calibri;">18</span>周岁（含<span style="font-family: Calibri;">18</span>周岁）以下未成年人（凭身份证、学生证和户口页）。身高<span style="font-family: Calibri;">1.4</span>米（含<span style="font-family: Calibri;">1.4</span>米）以下青少年儿童可直接换取免费门票；身高<span style="font-family: Calibri;">1.2</span>米（含<span style="font-family: Calibri;">1.2</span>米）以下免费儿童需在法定监护人购票陪同下参观游览。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">2、本地居民<span style="font-family: Calibri;">65</span>周岁以上（含<span style="font-family: Calibri;">65</span>周岁），外地居民<span style="font-family: Calibri;">70</span>周岁以上（含<span style="font-family: Calibri;">70</span>周岁）老人（凭新版机打老年证、身份证）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">3、残疾人（凭本人国家颁发的相关残疾证件原件）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">4、现役军人（凭士兵证、军官证或军校学员证）；离退休军人（凭军人离退休证）；</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">5、导游人员（凭国家旅游局颁发的新版电子导游证）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">6、团队大巴车司机（凭驾驶证<span style="font-family: Calibri;">A</span>证、<span style="font-family: Calibri;">B1</span>证，须配合当日带团证明使用）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">7、记者（凭国家新闻出版广电总局颁发并通过年检的记者证）、省级以上摄影家协会会员（凭省级以上（含省级）摄影家协会所颁发的会员证）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">8、全国统招全日制大学生（凭学生证和身份证）。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">【古城入口说明】&nbsp;1.台儿庄古城游客服务中心： 位于运河北岸路，距离景区<span style="font-family: Calibri;">1.5&nbsp;</span>公里，需要购买车船票入园。&nbsp;<span style="font-family: Calibri;">2.</span>台儿庄古城东门： 位于东顺路中段，导航搜索台儿庄古城东门。网络预订票可凭预定时填写的身份证刷证入园，本人身份证本人使用，不可外借。<span style="font-family: Calibri;">3.</span>台儿庄古城南门： 临时关闭，具体开放时间另行通知。&nbsp;<span style="font-family: Calibri;">4.</span>古城西门现在已经常态关闭，只作为员工通道，和二次入园（年卡）通道使用，不售票也不检票。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">【游览须知】</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">一、服务说明</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">1、古城实行实名制购票，一票一证，游客凭本人身份证刷证进行面部识别入园。请在正规窗口或网站进行购票，在非官方或非官方认可的渠道购买门票所造成的损失后果自行承担。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">2、以下项目为有偿服务：住宿、餐饮、购物、电瓶车、摇橹船及画舫、行李寄存、导游讲解等消费服务项目。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">3、展馆、商铺、餐饮、娱乐、演出等相关运营时间均以当日公告为准。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">4、景区门票当日激活有效，票已售出，概不退换，遗失不补，非全价票检票时配合工作人员出示本人有效证件。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">二、服务设施</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">1、游客服务中心：提供景区服务信息咨询、游客失物招领、受理游客投诉及其在景区内遇见的各种问题。<span style="font-family: Calibri;">&nbsp;</span></span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">行李寄存处：提供收费的普通物品寄存服务，贵重物品自行保管。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">轮椅、拐杖及婴儿车服务：免费提供轮椅、婴儿车供适宜人群使用，先到先得，不接受预约，须押借有效证件，并收取相应的押金。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">宠物狗寄存服务：提供免费的宠物狗寄存服务。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">三、温馨提示</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">1、进入景区游览的车辆须进入停车场，服从现场管理人员的指挥，按指定位置停放。车上的贵重物品一律自行保管，如发生丢失，责任自负。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">2、维护环境卫生<span style="font-family: Calibri;">:</span>不随地吐痰，不乱扔废弃物，不在禁烟场所吸烟。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">3、遵守公共安全秩序<span style="font-family: Calibri;">:</span>需购票有序进入景区，遵守检票规定。 遵守游览秩序，请勿攀爬、翻越安全防护栏；严禁闯岗和在景区内行乞、酗酒滋事、打架斗殴。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">4、保护景区资源：严禁破坏景点、文物、游览设施；不踩踏绿地，严禁攀折花木；严禁伤害、捕捉野生动物；严禁捕鱼、游泳等破坏水质的不良行为。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">5、爱护公共设施<span style="font-family: Calibri;">:</span>不损坏景区设施，节约用水用电，不在景物、设施上刻划、涂污、攀爬；拍照、摄像遵守景区规定。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">6、讲究礼仪<span style="font-family: Calibri;">:</span>衣着整洁得体，不在公众场所袒胸赤膊，礼让老幼病残，不讲粗话。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">7、提倡安全健康娱乐<span style="font-family: Calibri;">:</span>严禁携带宠物狗入园（导盲犬除外），严禁携带易燃易爆物品（如鞭炮等）、管制武器、仿真武器等危险品进入景区，严禁在景区内进行烧烤、燃点篝火、燃放烟花爆竹等使用明火的行为，抵制封建迷信活动，拒绝黄、赌、毒等一切违法行为。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">8、为了您的安全，景区内不得穿滑轮鞋、不得使用滑板、不得骑电动车、儿童脚踏车、平衡车。游览途中请注意旅游安全和警示标志，否则出现安全问题责任自负。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">9、游客在景区指定区域内参加各项活动时，要服从工作人员指挥，认真遵守活动规则及有关规定。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">10、游客购票入园请仔细阅读《购票须知》及《游客须知》的相关内容，游客入园视为认可本公司相关规定。</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">11、对景区的旅游服务有意见和建议，欢迎您提出，谢谢合作！</span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px;">12、景区承载量：日最大承载量<span style="font-family: Calibri;">111700</span>人次；瞬时承载量<span style="font-family: Calibri;">37200</span>人次；如达到最大承载量将停止售票。</span></p>
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