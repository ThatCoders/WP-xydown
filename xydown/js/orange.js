function tips() {
	alert("请登陆会员帐号后，刷新页面下载！")
}
$(function() {
	setTimeout(function() {
		0 == $(".diybanner").height() && ($(".diybanner").css({
			"text-align": "center",
			"font-size": "20px",
			padding: "25px 0",
			background: "#FF8D7F",
			color: "#fff"
		}).html("孤狼博客的维护需要很多资金和精力，请不要屏蔽本站广告，以维持我们微薄的收入，谢谢！"), $(".diybox").html('<img src="https://imgs.7585.net.cn/wp-content/themes/begin/diy/img/qrcode/wxgzh.jpg" width="250" height="250" alt="孤狼博客">'), $("#lanyedownfile").css({
			"font-size": "15px",
			color: "#f00"
		}).html("对不起由于您的浏览器开启了广告屏蔽插件，导致下载地址无法显示，请关闭广告屏蔽插件或软件后刷新页面，就会显示下载地址了！"))
	}, 1E3)
});