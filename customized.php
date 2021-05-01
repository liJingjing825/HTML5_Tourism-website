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
		   			<li><a href="customized.php"class="active">创意路线</a>
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
	    <div><img src="images/banner_line.png" alt=""></div>	   
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="home-page.php">首页 </a> > <span class="active">创意路线</span>
	</div>
		<div class="feedback_con">
		    <div class="top_qie">
				<a href="customized.php" class="active">私人定制</a>
		   		<a href="classic_route.php">经典路线</a>
		   		<a href="subject_line.php">主题路线</a>
			
			</div>
			<div class="top_tit">
				<span class="span1"><a href="customized.php">私人定制</a></span><br />
				<span class="con_span">请填写定制需求CUSTOMIZED</span>
				<span class="con_span">我们将第一时间与您联系</span>
			</div>
			<form class="form form-horizontal" id="form-feedback" action="php/customized_insert.php" method="post" enctype="multipart/form-data">
			<ul class="liu_ul">
			    <li class="clearfix">
				 <label><img src="images/p.png" width="30" height="30"></label>
				 <label>联系人信息（必填）</label>
				</li>
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>姓名</span><input type="text" name="uname"/>
					</p>
					<p class="p2">
						<span><i>*</i>电话号码</span><input type="text" readonly="readonly" value="<?php if(!session_id()) session_start(); 	echo $_SESSION['usertel'];?> " placeholder=""  name="usertel"/></p>
					</p>
				</li>
				<li class="clearfix">
					<p>
						<span><i>*</i>电子邮箱</span><input type="email" name="uemail" placeholder="请填写真实邮箱，以便于收到回复" />
					</p>
				</li>
				<hr style=" height:1px;border:none;border-top:1px dotted #7FA648;" />
				<li class="clearfix">
				 <label><img src="images/atten.png" width="30" height="30"></label>
				 <label>基本信息（必填）</label>
				</li>
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>出发时间</span><input type="date" name="udate"/>
					</p>
					<p class="p2">
						<span><i>*</i>游玩天数</span><input type="text" name="udays"/></p>
					</p>
				</li>
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>出行人数</span><input type="text" name="unum"/>
					</p>
					<p class="p2">
						<span><i>*</i>人均预算</span><input type="text" name="budget"/></p>
					</p>
				</li>
				<hr style=" height:1px;border:none;border-top:1px dotted #7FA648;" />
				<li class="clearfix">
				 <label><img src="images/c.png" width="30" height="30"></label>
				 <label>特色定制（必填）</label>
				</li>
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>旅游主题</span><input list="subject"class="input-text"  name="subject_matter" placeholder="请选择" />
					    <datalist id="subject">
						 <option value="不限">
					     <option value="亲子">
						 <option value="好友">
						 <option value="长辈">
					   
	                    </datalist>
					</p>
					<p class="p2">
						<span><i>*</i>行程安排</span><input list="arr"class="input-text"  name="arrangement" placeholder="请选择"/>
					    <datalist id="arr">
						 <option value="不限"  >
					     <option value="紧凑">
						 <option value="适中">
						 <option value="宽松">
					   
	                    </datalist>
					</p>
				</li>
				<li class="clearfix yan_li">
				<p class="p2">
						<span><i>*</i>出行方式</span><input list="type"class="input-text"  name="type" placeholder="请选择"/>
					    <datalist id="type">
						 <option value="不限">
					     <option value="自驾">
						 <option value="高铁">
						 <option value="飞机">
						 <option value="长途大巴">
					   
	                    </datalist>
					</p>
				</li>
				<li>
					
						<span class="span_nei"><i>*</i>我的要求</span>
						<textarea name="demands" rows="7" cols=""></textarea>
						
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

    <!--footer  start-->
    <footer class="footer">
       <div class="footer_con">
       		<div class="con">
       			<div class="nei">
       				<div class="">
       					<ul class="di_nav clearfix">
			   			<li><a href="scenic_overview.php">大美古城</a></li>
			   			<li><a href="customized.php">创意路线</a></li>
			   			<li><a href="town_cuisine">玩转古城</a></li>
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
