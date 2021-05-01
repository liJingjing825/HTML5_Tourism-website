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
      <style>
     
      #canvas {
        vertical-align: middle;
        box-sizing: border-box;
        border: 1px solid #ddd;
        /*cursor: pointer：光标呈现为指示链接的指针（一只手）*/
        cursor: pointer;
      }
    #submit{
		
                display: inline-block;
                padding:14px 90px;
                background: #e4e4e4;
                font-size: 15px;
                color: #666666;
                border-radius: 5px;
                margin-right: 5%;
                font-weight: bold;
                .action{
                    background: #81a849;
                    color: #fff;
                }
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
		   			<li><a href="court_travel.php" >创意路线</a>
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
                 <li><a href="feedback.php" class="active">留言中心</a></li>
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
	    <div><img src="images/1111.jpg" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="home-page.php">首页 </a> > <span class="active">留言中心</span>
	</div>
		<div class="feedback_con">
			<div class="top_tit">
				<span class="span1"><a href="feedback.php">留言中心</a></span><br />
				<span class="con_span">您好，对运河古城有任何疑问都可以给我们留言，我们会尽快回复！</span>
			</div>
			<form class="form form-horizontal" id="form-feedback" action="php/feedback_insert.php" method="post" enctype="multipart/form-data">
			<ul class="liu_ul">
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>标题</span><input type="text" name="title"/>
					</p>
					<p>
						<span><i>*</i>电话</span><input type="text" readonly="readonly" value="<?php if(!session_id()) session_start(); 	echo $_SESSION['usertel'];?> " placeholder=""  name="usertel"/></p>
					</p>
				</li>
				<li>
					
						<span class="span_nei"><i>*</i>内容</span>
						<textarea name="content" rows="7" cols=""></textarea>
						
				</li>
				<li class="clearfix yan_li">
				 <span><i>*</i>验证码</span><input type="text" value="" placeholder="请输入验证码（不区分大小写）" class="input-val" />
				<canvas id="canvas" width="100" height="30"></canvas>
				</li>
				<li class="btn">
					<input id="submit" type="submit" value="提交" >
					<input id="submit" type="reset" value="重置" >
				</li>
			</ul>
			</form>
				
		</div>

	
	<div class="home_news">
		<div class="news_con">
			<div class="top_tit">
				<span class="span1"><a href="news.php">留言区</span></a><br />
				<span class="span2">FEEDBACK</span>
			</div>
			<ul>
				<?php
date_default_timezone_set("PRC");
   $currentpage = 1;
if(isset($_GET['page']))
  $currentpage = $_GET['page'];

  $link=mysql_connect("localhost","root","root");//连接数据库
           mysql_select_db("www.yhgc.com");
$sql ="SELECT count(*) as 'count' from feedback";//查询记录的sql语句
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
           $sql1="select * from `feedback`order by time desc limit $start,$pagesize";
           $rs=mysql_query($sql1);
           while($row=mysql_fetch_assoc($rs)){
			   $i=1;
			   $i++;
?>
				<li class="clearfix">
					<div class="news_left">
						<p><img src="images/answer.png" width="26" height="23"><?php  echo $row['title']."</br>"; ?>
						<p><?php echo $row['content']."</br>"; ?>
						<hr>
						<p><img src="images/fb.png" width="26" height="23"><?php echo $row['answer']."</br>"; ?>
						</p>
					</div>
					<div class="news_right">
						<span><?php echo gmdate("m.d", strtotime($row['time'])); ?></span>
						<time><?php echo gmdate("Y", strtotime($row['time'])); ?></time>
					</div>
				</li>
				<?php
}
?>
			</ul>
			
	</div>
<!--换页-->
		
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
	</div>

	
 
    <!--footer  start-->
    <footer class="footer">
       <div class="footer_con">
       		<div class="con">
       			<div class="nei">
       				<div class="">
       					<ul class="di_nav clearfix">
			   			<li><a href="scenic_overview.php">大美古城</a></li>
			   			<li><a href="court_travel.html">创意路线</a></li>
			   			<li><a href="comfortable.html">玩转古城</a></li>
			   			<li><a href="news.html">旅游动态</a></li>
			   			<li><a href="feedback.html">预订服务</a></li>
			   			<li><a href="contact.html">留言中心</a></li>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function(){
        var show_num = [];
        draw(show_num);

        $("#canvas").on('click',function(){
            draw(show_num);
        })
        $(".btn").on('click',function(){
            var val = $(".input-val").val().toLowerCase();
            var num = show_num.join("");
            if(val==''){
                alert('请输入验证码！');
            }else if(val == num){
               // alert('提交成功！');
                $(".input-val").val('');
                // draw(show_num);

            }else{
                alert('验证码错误！请重新输入！');
                $(".input-val").val('');
                // draw(show_num);
            }
        })
    })

    //生成并渲染出验证码图形
    function draw(show_num) {
        var canvas_width=$('#canvas').width();
        var canvas_height=$('#canvas').height();
        var canvas = document.getElementById("canvas");//获取到canvas的对象，演员
        var context = canvas.getContext("2d");//获取到canvas画图的环境，演员表演的舞台
        canvas.width = canvas_width;
        canvas.height = canvas_height;
        var sCode = "a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,s,t,u,v,w,x,y,z,A,B,C,E,F,G,H,J,K,L,M,N,P,Q,R,S,T,W,X,Y,Z,1,2,3,4,5,6,7,8,9,0";
        var aCode = sCode.split(",");
        var aLength = aCode.length;//获取到数组的长度
        
        for (var i = 0; i < 4; i++) {  //这里的for循环可以控制验证码位数（如果想显示6位数，4改成6即可）
            var j = Math.floor(Math.random() * aLength);//获取到随机的索引值
            // var deg = Math.random() * 30 * Math.PI / 180;//产生0~30之间的随机弧度
            var deg = Math.random() - 0.5; //产生一个随机弧度
            var txt = aCode[j];//得到随机的一个内容
            show_num[i] = txt.toLowerCase();
            var x = 10 + i * 20;//文字在canvas上的x坐标
            var y = 20 + Math.random() * 8;//文字在canvas上的y坐标
            context.font = "bold 23px 微软雅黑";

            // 他是制造一个画图环境，先translate画布的坐标系，然后旋转画布，在原点处写上输出txt（达到在指定位置旋转字体的效果），然后将画布返回原来的初始位置，但是txt位置仍在想要的位置。如果画布没有按照原先的路径返回，那么会影响下一个txt的显示位置

            context.translate(x, y);
            context.rotate(deg);

            context.fillStyle = randomColor();
            context.fillText(txt, 0, 0);

            context.rotate(-deg);
            context.translate(-x, -y);
        }
        for (var i = 0; i <= 5; i++) { //验证码上显示线条
        	// 线条的颜色
            context.strokeStyle = randomColor();
            // 开始一条路径
            context.beginPath();
            // 线段的起始点
            context.moveTo(Math.random() * canvas_width, Math.random() * canvas_height);
            // 线段的结束点
            context.lineTo(Math.random() * canvas_width, Math.random() * canvas_height);
            // 填充路径内部区域
            context.stroke();
        }
        for (var i = 0; i <= 30; i++) { //验证码上显示小点
            context.strokeStyle = randomColor();
            context.beginPath();
            var x = Math.random() * canvas_width;
            var y = Math.random() * canvas_height;
            context.moveTo(x, y);
            context.lineTo(x + 1, y + 1);
            context.stroke();
        }
    }

    //得到随机的颜色值
    function randomColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        return "rgb(" + r + "," + g + "," + b + ")";
    }

</script>
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
