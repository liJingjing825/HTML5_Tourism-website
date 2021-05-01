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
		   			<li><a href="news.php">旅游动态</a>
		   				<ul>
		   					<li><a href="news.php">实时公告</a></li>
		   					<li><a href="news.php">古城资讯</a></li>
		   				</ul>
		   			</li>
					<li><a href="ticket.php">门票预定</a></li>
		   			</li>
                 <li><a href="feedback.php">留言中心</a></li>
		   		 <li><a href="person_center.php" class="active">个人中心</a></li>
		   		
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
	    <div><img src="images/11111.jpg" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="home-page.php">首页 </a> > <span class="active"><a href="person_center.php">个人中心 </a></span>
	</div>
	<div class="map_con">
		<div class="top_tit">
			<span class="span1">个人中心</span><br />
		</div>
		<div class="w1004">
			<div class="map">
				<dl>
					<img src="images/yonghu.png" width="100px" height="100px"/>
				</dl>
				<dl>
					<h5><?php echo @$_SESSION['usertel'];?></h5>
				</dl>
	
				<dl>
					<dt><a href="login-register.html">退出</a></dt>
				</dl>
				<dl>
					<dt><a href="contact.php">联系我们</a></dt>
				</dl>
			</div>
			<div class="rmain">
				<div class="rmian-top">
	                <form action="php/order.php" method="POST">
	                  <div class="right">
	                    <button type="submit" name="torder"  style="background-color: #84A76C;color: #FFFFFF;border-radius:5px">提交订单<tton>
	                  </div>
	                </form>
                </div>
                <div class="rmain-main">
					<tr  bgcolor="#FF0000">
						<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1"  style="border-collapse:collapse">
			                <td>序号</td>
							<td>门票</td>
							<td>单价</td>
							<td align="center">数量</td>
							<td>共计</td>
							<td>删除</td>
							<div class="lmain-main">
								<tr>
									<td><hr></td>
									<td><hr></td>
									<td><hr></td>
									<td><hr></td>
									<td><hr></td>
						 			<td><hr></td>
								</tr>
							</div>					  		
        		</div>
        		<?php   
				$sum=0;
				$link=mysql_connect("localhost","root","root");//连接数据库
		           mysql_select_db("www.yhgc.com");//选择库
				    $s="select * from ticket";
				    $result=mysql_query($s);
				   $n=mysql_num_rows($result); 
				   $ss="select * from order1";
				    $re=mysql_query($ss);
				   $nn=mysql_num_rows($re); 

				   for($q=1;$q<=$n;$q++){
		           $sql="select * from order1 where id=$q";
		           $rs=mysql_query($sql);
					while($row=mysql_fetch_assoc($rs)){
					$id=$row["id"];
					$name=$row["name"];
					$price=$row["price"];	
					$number=$row["number"];	
				?>
			 <div class="lmain-main">
				
				<tr>
                    <td><?php echo $id;?></td>
					 <td><?php echo $name;?></td>
					  <td><?php echo $price;?></td>
					   <td align="center">
					 <a href="shop_subtract.php?id=<?php echo $row['id'];?>"> <img src="images/jianhao.png"  width='20px' height='20px' border='0' /></a>
					  <a><input name="tid" value="<?php echo $number;?>" class="id" type="text" style="width:60px" required />
					    <a href="shop_add.php?id=<?php echo $row['id'];?>"> <img src="images/jiahao.png"  width='20px' height='20px' border='0' /></a>
					   </td>
					    <td> <?php $sum=$row['number']*$row['price'];
								echo'&nbsp;';
								 echo "$sum";
								  echo "元";?></td>
						 <td>
						  <form action="shopdelete.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data" >    
								<a href="#"><img src="images/shanchu.png"  width='20px' height='20px' border='0' /><input type="submit" value="" style="width:30px;height:30px;border:none;background:url(images/2shanchu.png) left top no-repeat;"/></a>
							</form>
						 </td>
                  
					</tr>
				
                </div>
                
                <div class="lmain-main">
					  <tr>
					  <td><hr></td>
					   <td><hr></td>
					    <td><hr></td>
						 <td><hr></td>
						  <td><hr></td>
 							<td><hr></td>
					  </tr>
				</div>	
				<?php  }}?>
		   <?php
		   for($t=0;$t<=7-$nn;$t++){
		?>	 <div class="lmain-main">
					  <tr>
                       <td>&nbsp;</td>
					   <td></td>
					   <td></td>
					   <td></td>
					   <td></td>
					   <td></td>
					   </tr>				
			</div>
			<?php	   
		   }
		   ?>
		   <?php
		   if($nn==7){
		   ?>
		   <div class="lmain-main">
					 
</div>					  
		<?php }?> 
			
		</div>
		
			
		</div>
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
