function tips() {
	alert("技术松鼠 学习，让视野更宽阔！")
}
$(function() {
	setTimeout(function() {
		0 == $(".diybanner").height() && ($(".diybanner").css({
			"text-align": "center",
			"font-size": "18px",
			padding: "25px 0",
//			background-linear-gradient:(to bottom right,#8A2BE2, #4169E1,#1E90FF),
			background: "#4169E1",
			color: "#fff"
		}).html("网站维护不易，您可以通过公众号赞赏/点微信推文底部广告表示支持，谢谢！"), $(".diybox").html('<img src=https://ae01.alicdn.com/kf/Ucfc5fe8c99b541c88ff0a25877b8cc648.jpg" width="250" height="250" alt="技术松鼠>'), $("#lanyedownfile").css({
			"font-size": "15px",
			color: "#f00"
		}).html("技术松鼠"))
	}, 1E3)
});