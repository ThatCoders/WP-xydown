<?php
require dirname(__FILE__) . '/wp-load.php';
$id = $_GET['id'];
$title = get_post($id)->post_title;
$xydown_name = get_post_meta($id, 'xydown_name', true);
$xydown_size = get_post_meta($id, 'xydown_size', true);
$xydown_date = get_post_meta($id, 'xydown_date', true);
$xydown_version = get_post_meta($id, 'xydown_version', true);
$xydown_author = get_post_meta($id, 'xydown_author', true);
$xydown_downurl1 = get_post_meta($id, 'xydown_downurl1', true);
$xydown_downurl2 = get_post_meta($id, 'xydown_downurl2', true);
$xydown_downurl3 = get_post_meta($id, 'xydown_downurl3', true);
$xydown_downurl4 = get_post_meta($id, 'xydown_downurl4', true);
$xydown_downurl5 = get_post_meta($id, 'xydown_downurl5', true);
$xydown_downurl6 = get_post_meta($id, 'xydown_downurl6', true);
$xydown_downurl7 = get_post_meta($id, 'xydown_downurl7', true);
$xydown_baidumima = get_post_meta($id, 'xydown_baidumima', true);
$xydown_360mima = get_post_meta($id, 'xydown_360mima', true);
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-transform " />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php 
echo $xydown_name;
?>-技术松鼠</title>
<meta name="Keywords" content="电脑软件,编程知识,建站源码,效率软件,Office技巧,美工资源,wordprss,网络技术,博客插件" />
<meta name="description" content="技术松鼠(jishusongshu.com) 分享各种高效率电脑软件,编程知识,程序源码,建站经验,网络技术,手机应用,硬件知识,Office 技巧,PS插件,美工资源等各类教程,致力创造一个高质量的技术分享平台.微信公众号【技术松鼠】唯一官方博客." />
<link href="/wp-content/plugins/xydown/css/dlblue.css"	type="text/css" rel="stylesheet" />
<link href="https://apps.bdimg.com/libs/fontawesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://apps.bdimg.com/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/wp-content/plugins/xydown/js/blue.js" type="text/javascript"></script>
<style>
.underl{text-decoration:underline} 
</style>>
</head>
<body>
<div class="topbar">
  <div class="top">
    <div class="top_left">您好，欢迎进入技术松鼠附件下载页面！</div>
    
	<?php 
//echo $_SERVER["QUERY_STRING"]."<br>"; 输出链接?后边的参数，例id=51
//获取当前页面id纯数字
$str = $_SERVER["QUERY_STRING"];//定义str等于上边的id=51
preg_match("/id=(\\d*)/", $str, $matches);//提取当前页面id=
//	echo $matches[1];//输出当前页面id数字
echo '<div class="top_right">';
//顶部返回文章页面PHP拼接实现，需要在download.php第53行处修改成自己网站的文章固定链接即可。
//href="' . site_url() . '/' . $matches[1] . '.html' . '" 
//href="' . site_url() . '/archives/' . $matches[1] . '" 
echo $yanshi_content .= '<a class="yanshibtn" rel="external nofollow"   href="https://www.jishusongshu.com/tools/index.php" target="_blank" title="松鼠工具箱 "><i class="fa
fa-th-large"></i>松鼠工具箱</a>';
echo '<span>|</span><strong><a href="/"><i class="fa fa-home"></i>技术松鼠</a></strong>';
echo '</div>';
echo '</div>';
?>
  </div>
</div>
<div class="wrap">
<div class="diybanner"></div>
<div class="content">
<h2><?php 
echo $xydown_name;
?></h2>
<div class="plus_box">
<div class="plus_l">
  <ul>
    <li>文件名称：<?php 
echo $xydown_name;
?></li>
    <li>文件大小：<?php 
echo $xydown_size;
?></li>
    <li>作者信息 ：<?php 
echo $xydown_author;
?></li>
    <li>百度网盘提取码：<font style="color: #7B68EE;font-weight: bold;"><?php 
echo $xydown_baidumima;
?></font></li>
    <li>蓝奏云盘提取码：<font style="color: #7B68EE;font-weight: bold;"><?php 
echo $xydown_360mima;
?></font>	</li>
    <li>更新时间：<?php 
echo $xydown_date;
?></li>
    <li>推荐级别：<?php
if ($xydown_downurl2=="1") {
  echo " ";
  echo "<span class=\"xing_a\"></span>";
} elseif ($xydown_downurl2=="2") {
  echo " ";
  echo "<span class=\"xing_b\"></span>";
} elseif ($xydown_downurl2=="3") {
  echo " ";
  echo "<span class=\"xing_c\"></span>";
} elseif ($xydown_downurl2=="4") {
  echo " ";
  echo "<span class=\"xing_d\"></span>";
} else {
  echo " ";
  echo "<span class=\"xing_e\"></span>";
}
?></li>
  </ul>
</div>
<div class="plus_r">
	<center>
		<br>
	<img src="https://ae01.alicdn.com/kf/Ucfc5fe8c99b541c88ff0a25877b8cc648.jpg" width="80%" height="auto" >
		<p style="color: 7B68EE;"> <b>微信公众号【技术松鼠】</b></p>
		<p style="color: 7B68EE;" ><b>扫一扫，关注博主不迷路</b></p>
		</center>
			<!--广告联盟-->
	<!--<script type="text/javascript">
    (function() {
        var s = "_" + Math.random().toString(36).slice(2);
        document.write('<div style="" id="' + s + '"></div>');
        (window.slotbydup = window.slotbydup || []).push({
            id: "u99999999",
            container:  s
        });
    })();
</script>-->
<!-- 多条广告如下脚本只需引入一次 -->
<script type="text/javascript" src="//cpro.baidustatic.com/cpro/ui/c.js" async="async" defer="defer" ></script>
</div>
</div>

<div class="banner">
  </div>

<div class="panel">
 <div class="panel-heading">
   <h3>下载地址</h3>
 </div>
 <div class="panel-body">
<?php 
if ($xydown_downurl7) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl7;
    ?>" target="_blank">官方下载</a></span>
    <?php 
}
?>
 		<?php 
if ($xydown_downurl1) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl1;
    ?>" target="_blank">百度网盘</a></span>
    <?php 
}
?>
    <?php 
if ($xydown_downurl4) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl4;
    ?>" target="_blank">蓝奏云盘</a></span>
    <?php 
}
?>
   <?php 
if ($xydown_downurl5) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl5;
    ?>" target="_blank">腾讯微云</a></span>
    <?php 
}
?>    
    <?php 
if ($xydown_downurl6) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl6;
    ?>" target="_blank">其他网盘</a></span>
    <?php 
}
?>
    <?php 
if ($xydown_downurl3) {
    ?><span class="downfile"><a href="<?php 
    echo $xydown_downurl3;
    ?>" target="_blank">普通下载</a></span>
    <?php 
}
?>      
   </div>
</div>
<div class="panel">
 <div class="panel-heading">
      <h3>下载说明</h3>
 </div>
 <div class="panel-body">
  <ul class="help">
    <li>1.技术松鼠所提供的压缩包一般无解压密码，若有则为<em>www.jishusongshu.com</em>;</li>
    <li>2.下载后文件若为压缩包格式，推荐使用 <a class="underl" href="https://zhuanlan.zhihu.com/p/91042087" target="_blank">Bandizip</a> 进行解压;</li>
	<li>3.文件比较大的时候，建议使用下载工具进行下载，浏览器下载可能下载错误;</li>
	<li>4.资源下载链接若失效，请到文章页面留言反馈，以便技术松鼠及时进行更新;</li>
	<li>5.若遇到不可解决的问题，可到公众号私信博主。</li>
  </ul>
 </div>
</div>
<div class="panel">
 <div class="panel-heading">
   <h3>站长声明</h3>
 </div>
 <div class="panel-body">
  <span class="shengming">本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请到原网站购买，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系本站删除，我们将及时处理！</span>
 </div>
</div>
</div>
<div class="footer">
<p>Copyright © 2020 <a href="https://www.jishusongshu.com/" target="_blank">技术松鼠</a> 版权所有.</p>
</div>

</div>
</body>
</html>
<!--这里可以放统计代码-->
<!--这里可以放统计代码-->
<?php 