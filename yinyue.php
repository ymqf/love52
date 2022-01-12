<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php include("plugin/config.php");?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>音乐外链工具_<?php echo htmlspecialchars(urldecode($title)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
<meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
</head>


<?php
session_start();
error_reporting(0);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
	if( empty($_POST['ip'])){
		$_POST['ip']='暧昧/薛之谦';
		}
	
	$str = htmlspecialchars($_POST['ip']);
	function myTrim($str)//清楚所有空号 换行符
	{
		 $search = array(" ","　","\n","\r","\t");
		 $replace = array("","","","","");
		 return str_replace($search, $replace, $str);
	}
	$ip =  myTrim($str);
	if ($ip) {
		$url = "http://s.music.163.com/search/get/?type=1&s=". $ip ."&limit=20";
		$li = file_get_contents($url);
		$lis = json_decode($li,true);
		if ($lis['code'] == '500') {
			echo '<h1>暂无数据</h1>';
			sleep(3);
			header("Location:./index.php");
			die;
		} else {
			$arr = array();
			foreach ($lis as $key => $value) {
				$arr[] = $value['songs'];
			}
			$ba = array();
			foreach ($arr[0] as $k => $v) {
				$ba[$k]['name'] = $v['name'];
				$ba[$k]['mice'] = $v['audio'];
				if (!empty($v['artists'][0])) {
					$ba[$k]['zqr'] = $v['artists'][0]['name'];
				} else {
					$ba[$k]['zqr'] = '暂无歌手';
				}
			}
		}
	}
?>
<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="images/nav-meiti.jpg" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
   <?php include("header.php"); ?>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/nav-meiti.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">音乐外链工具</h2>
            <h3 class="animate-box">Music URL tool</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">搜索音乐</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  

  <!-- END #fh5co-hero -->
  <section id="fh5co-projects">
    <div class="container">
由于网络搜索音乐外链时间久了容易失效，本站特意提供一些永久外链音乐，如果非要使用外部链接的话就在下面搜索获取音乐地址！
　<br/>

<b>爱很简单</b>  http://t.448521.com/?ahjd
　　
<b>丑八怪</b>  http://t.448521.com/?cbg
　　<br/>
<b>Traveling Light</b>  http://t.448521.com/?cwt
　　
<b>多幸运</b> http://t.448521.com/?dxy
　　<br/>

　　
<b>确定一定以及肯定</b>  http://t.448521.com/?queding
　　
<b>情非得已</b>  http://t.448521.com/?qfdy
　　　<br/>
<b>专属天使</b>  http://t.448521.com/?tianshi
　　
<b>唯一</b>  http://t.448521.com/?wy
　　　<br/>
<b>the max</b>  http://t.448521.com/?max
　　
<b>我可以</b>  http://t.448521.com/?wky
　　<br/>
<b>我只在乎你</b>  http://t.448521.com/?wzzhn
　　
<b>小手拉大手</b>  http://t.448521.com/?xiaoshou
　　<br/>
<b>洋葱</b>  http://t.448521.com/?yc
　　
<b>Yesterday Once More</b>  http://t.448521.com/?yes
　　<br/>
<b>遇到</b>  http://t.448521.com/?yd
　　
<b>一万个舍不得</b>  http://t.448521.com/?ywgsbd
　　　<br/>
<b>这就是爱</b>  http://t.448521.com/?zjsa
　　
<b>最浪漫的事</b>  http://t.448521.com/?zlmds
　　　<br/>
<b>咱们结婚吧</b> http://t.448521.com/?jiehun
　　
<b>生日快乐</b>  http://t.448521.com/?shengri
　　　<br/>
<b>铃儿响叮当</b>  http://t.448521.com/?dingdang
　　
<b>认真的雪</b>  http://t.448521.com/?rzdx
　　<br/>
<b>the next episode</b>  http://t.448521.com/?geren

    
　<br/>
<b>抽烟time</b>  http://t.448521.com/?time
　<br/>

<b>大金链子bgm</b>  http://t.448521.com/?geren
　<br/>
<b>告白气球</b>  http://t.448521.com/?gbqq
　<br/>

<b>123我爱你</b> http://t.448521.com/?love
　<br/>
<b> 偏爱</b>  http://t.448521.com/?pianai
　<br/>

想自定义音乐的点这里查看教程：<a href="http://www.hunlipic.com/newest/2018/0723/712.html" target="_blank">进入教程1 </a>
或者下面搜索复制第一个地址
<iframe id="mainFrame" name="mainFrame" scrolling="no" src="http://love.448521.com/yinyue/"
            frameborder="0" style="padding: 0px; width: 100%; height: 1000px;"></iframe>


　<br/>


<table class="table table-bordered" >
  <tbody>
    <tr>


    </tbody>
</table>

    </div>
  </section>
  <!-- END #fh5co-projects -->
   <?php include("footer.php"); ?>
  <!-- END #fh5co-footer --> 
</div>
<!-- END #fh5co-page --> 
<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="js/vip.js"></script>
<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- jQuery Easing --> 
<script src="js/jquery.easing.1.3.js"></script> 
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/magnific-popup-options.js"></script> 
<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="js/jquery.style.switcher.js"></script> 
<!-- Main JS (Do not remove) --> 
<script src="js/main.js"></script> 
<script src="js/jquery.cookie.js"></script> 
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
         <form method="post" action="plugin/vip.php"> 
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
            <input type="button" class="btn btn-default" onclick="window.open('zhuce.php','_blank')" value="注册账户" /> 
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
         <form method="post" action="plugin/vip.php"> 
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
