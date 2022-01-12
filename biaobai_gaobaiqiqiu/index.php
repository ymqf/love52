﻿<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php include("../plugin/config2.php"); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>告白气球_<?php echo htmlspecialchars(urldecode($title)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，爱心表白在线制作，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
<meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
<!-- Animate.css -->
<link rel="stylesheet" href="../css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="../css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="../css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="../css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="../css/bootstrap.css">
<!-- Bootstrap Date 
<link href="http://cdn.bootcss.com/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="../css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="../css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="logo.png" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <?php include("../header2.php"); ?>
  <!-- #fh5co-header -->

  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(../images/nav-biaobai.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">告白气球表白网页</h2>
            <h3 class="animate-box"><a href="../web.php?id=ZbnxwxQ" style="color:#FFF" target="_blank">点击预览</a></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">填入网页信息</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
<section id="fh5co-projects">
    <div class="container animate-box">
    <div class="row">
    <form method="post" action="../../result.php">
      <div class="col-md-12">
        <div class="form-group">
          <input type="button" class="btn btn-outline btn-block" onclick="shuru()" value="使用默认文字">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input id="con1" name="con1" type="text" class="form-control" placeholder="请输入网页标题">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con2" name="con2" type="text" class="form-control" placeholder="送给谁的~">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con3" name="con3" type="text" class="form-control textarea" placeholder="想对她说的情话1">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <div id="fh5co-subscribe">
          <input id="con4" name="con4" type="text" class="form-control" placeholder="请输入图片URL地址一【他/她的照片哦~】">
            <input type="button" value="上传图片" class="btn btn-primary" onclick="window.open('../tupian.php','_blank')">
          </div>
		  </div>
      </div>
	  	   <div class="col-md-12">
        <div class="form-group">
          <div id="fh5co-subscribe">
          <input id="con6" name="con6" type="text" class="form-control" placeholder="请输入背景音乐URL地址">
            <input type="button" value="获取音乐" class="btn btn-primary" onclick="window.open('../yinyue.php','_blank')">
        </div>
      </div>
	  </div>

	  <div class="col-md-12">
        <div class="form-group">
          <input id="con5" name="con5" type="text" class="form-control textarea" placeholder="一句话~">
        </div>
      </div> 
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con7" name="con7" type="text" class="form-control textarea" placeholder="想对她说的情话2">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con8" name="con8" type="text" class="form-control textarea" placeholder="点滴回忆~">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con9" name="con9" type="text" class="form-control textarea" placeholder="爱情两三事1【五个字】">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con10" name="con10" type="text" class="form-control textarea" placeholder="爱情两三事2【五个字】">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con11" name="con11" type="text" class="form-control textarea" placeholder="爱情两三事3【五个字】">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con12" name="con12" type="text" class="form-control textarea" placeholder="对她/他的小承诺~">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con13" name="con13" type="text" class="form-control textarea" placeholder="吐露心声~~~">
        </div>
      </div>
	 
      <div class="col-md-12">
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="立即制作">
          </div>
      </div>
      </form>
    </div>
	</div>
  </section>
	<script>
        function shuru(){
            var con1=document.getElementById('con1');
            var con2=document.getElementById('con2');
			var con3=document.getElementById('con3');
			var con4=document.getElementById('con4');
			var con5=document.getElementById('con5');
			var con6=document.getElementById('con6');
			var con7=document.getElementById('con7');
			var con8=document.getElementById('con8');
			var con9=document.getElementById('con9');
			var con10=document.getElementById('con10');
			var con11=document.getElementById('con11');
			var con12=document.getElementById('con12');
			var con13=document.getElementById('con13');
            con1.value='告白气球';
            con2.value='此页面送给我最爱的猪宝宝';
            con3.value='世界60多亿人口,我们相遇的概率小到忽略不计.在有生之年遇见你,花光了我所有的运气.猪宝宝，三生有幸遇到你。';
            con4.value='https://s2.ax1x.com/2019/05/16/EHxznA.jpg';
            con5.value='猪宝宝，这辈子最幸运的事就是遇到了你';
            con6.value='http://t.448521.com/?gbqq';
            con7.value='自从遇到你之后，我就认定你是我一生的伴。虽然我现在可能什么都没有,但我有一颗真诚的心 和给你未来幸福的坚实承诺！！';
            con8.value='难以忘记初次见你的感觉，我被一种神奇的东西吸引.那时我的心七上八下的，我相信这就是一见钟情!！';
            con9.value='第一次牵手';
            con10.value='第一次拥抱';
            con11.value='第一次接吻';
            con12.value='以后的日子里 无论阳光 无论泥泞，我都会一直陪在你的身边。不让你受一点委屈。我比谁都明白你的重要性，在我的心里我已认定，你就是我的新娘！！';
            con13.value='自从看到我送给你的礼物了吧，也许不是那么的奢华与珍贵，但我希望你喜欢.我会努力让你成为世界上第二幸福的人,因为爱上你，是我最大的幸福！！';
        }
    </script> 

	 <!-- END #fh5co-projects -->
  <div id="fh5co-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="fh5co-lead animate-box"><?php echo htmlspecialchars(urldecode($tsbt)); ?></h2>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext1)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext2)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext3)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext4)); ?></p>
          
        </div>
      </div>
    </div>
  </div>
  <!-- END #fh5co-info --> <?php include("../footer.php"); ?>
  <!-- END #fh5co-footer --> 
</div>
<!-- END #fh5co-page --> 

<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="../js/vip.js"></script>
<!-- jQuery --> 
<script src="../js/jquery.min.js"></script> 
<!-- Bootstrap Date  -->
<script src="../js/bootstrap-datetimepicker.js"></script> 
<script src="../js/bootstrap-datetimepicker.zh-CN.js"></script> 
<script type="text/javascript">
 $(".form_datetime").datetimepicker({
      　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    })
</script> 

<!-- jQuery Easing --> 
<script src="../js/jquery.easing.1.3.js"></script> 
<!-- Bootstrap --> 
<script src="../js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="../js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="../js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="../js/jquery.magnific-popup.min.js"></script> 
<script src="../js/magnific-popup-options.js"></script> 

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="../js/jquery.style.switcher.js"></script> 


<!-- Main JS (Do not remove) --> 
<script src="../js/main.js"></script> 

<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	--> 
<script src="../js/jquery.cookie.js"></script> 
<script>
		$(function(){

			if ( $.cookie('layoutCookie') != '' ) {
				$('body').addClass($.cookie('layoutCookie'));
			}

			$('a[data-layout="boxed"]').click(function(event){
				event.preventDefault();
				$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
				$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
			});

			$('a[data-layout="wide"]').click(function(event){
				event.preventDefault();
				$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
				$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
			});
		});
	</script>
<!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog"> 
    <div class="modal-content logintc"> 
     <ul id="myTab" class="nav nav-tabs"> 
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
      <li class="active"> <a href="#gblogin" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>贵宾登录</a> </li> 
      <li><a href="#update" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>修改密码</a></li> 
     </ul> 
     <div id="myTabContent" class="tab-content"> 
      <div class="tab-pane fade in active" id="gblogin"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="login" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入登录账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入登录密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
			<label class="baoliu">
			<input type="checkbox" name="loginbl">登入保留一星期 
			</label>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="button" class="btn btn-default" onclick="window.open('../zhuce.php','_blank')" value="注册账户" /> 
            <input type="submit" class="btn btn-primary" value="立即登录" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
      <div class="tab-pane fade" id="update"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="update" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入旧密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="请输入新密码" maxlength="30" required /> 
			<span class="help-block text-center">（小提示：密码忘记将无法找回，请慎重设置。）</span>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="submit" class="btn btn-primary" value="立即修改" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button> 
     </div> 
    </div> 
   </div> 
  </div>
</body>
</html>
