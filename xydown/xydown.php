<?php
/*
Plugin Name: xydown独立下载页面
Plugin URI:www.7585.net.cn
Description: 实现wordpress独立下载页面的一款插件
Author:孤狼博客
*/
/*本插件由模板兔早期开发，孤狼博客后期作了补充调整。
 * 优化了下载页面及信息框UI。新增了蓝奏云、360网盘密码等功能。
 * 2019年5月31日12:37:23
*/
global $wpdb;
define("xydown", plugin_dir_path(__FILE__));
function xydown_style() {
    	echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/blue.css" type="text/css" />';
    //	echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/orange.css" type="text/css" />';
}
add_action('wp_head', 'xydown_style');
function xydown_show_down($content) {
    if (is_single()) {
        $xydown_start = get_post_meta(get_the_ID() , 'xydown_start', true);
        $xydown_name = get_post_meta(get_the_ID() , 'xydown_name', true);
        $xydown_size = get_post_meta(get_the_ID() , 'xydown_size', true);
        $xydown_date = get_post_meta(get_the_ID() , 'xydown_date', true);
        $xydown_version = get_post_meta(get_the_ID() , 'xydown_version', true);
        $xydown_author = get_post_meta(get_the_ID() , 'xydown_author', true);
        $xydown_downurl1 = get_post_meta(get_the_ID() , 'xydown_downurl1', true);
        $xydown_downurl2 = get_post_meta(get_the_ID() , 'xydown_downurl2', true);
        $xydown_downurl3 = get_post_meta(get_the_ID() , 'xydown_downurl3', true);
        $xydown_yanshi = get_post_meta(get_the_ID() , 'xydown_yanshi', true);
        ////资源名称、资源大小、更新时间、适用版本、作者信息
        if ($xydown_yanshi) {
            $yanshi_content.= '<strong><a class="yanshibtn" rel="external nofollow"   href="' . site_url() . '/demo.php?id=' . get_the_ID() . '" target="_blank" title="' . $xydown_name . ' ">查看演示</a></strong>';
        }
        if ($xydown_start) {
            $content.= '<br />';
            $content.= '
			<div class="paydown" id="paydown"><div class="down-title"><br>附<br>件<br>下<br>载</div>
			<div class="down-detail">
				<p class="down-price">文件名称：<span>' . $xydown_name . '</span></p>
				<p class="down-ordinary">更新日期：' . $xydown_date . '</p>
			<p class="down-vip">文件大小：' . $xydown_size . '</p>
			<p class="down-tip"><font color=#F80007>提</font><font color=#F1000E>示</font><font color=#EA0015>：</font><font color=#E3001C>如</font><font color=#DC0023>遇</font><font color=#D5002A>问</font><font color=#CE0031>题</font><font color=#C70038>或</font><font color=#C0003F>者</font><font color=#B90046>链</font><font color=#B2004D>接</font><font color=#AB0054>失</font><font color=#A4005B>效</font><font color=#9D0062>请</font><font color=#960069>联</font><font color=#8F0070>系</font><font color=#880077>站</font><font color=#81007E>长</font><font color=#7A0085>，</font><font color=#73008C>欢</font><font color=#6C0093>迎</font><font color=#65009A>捐</font><font color=#5E00A1>赠</font><font color=#5700A8>本</font><font color=#5000AF>站</font><font color=#4900B6>以</font><font color=#4200BD>及</font><font color=#3B00C4>广</font><font color=#3400CB>告</font><font color=#2D00D2>合</font><font color=#2600D9>作</font><font color=#1F00E0>！</font></p>
			<p class="down-tip"><strong>
				<a class="downbtn" style="border-radius:15px; " rel="external nofollow" title="' . $xydown_name . '" href="' . site_url() . '/download.php?id=' . get_the_ID() . '"  target="_blank">点击下载</a></strong> </p></div><div class="clear"></div></div>			
				</strong> ' . $yanshi_content . '</p><p></p> ';
        }
    }
    return $content;
}
add_action('the_content', 'xydown_show_down');
?>
<?php
include ('meta-box.php'); ?>
