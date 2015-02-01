function copyToClipBoard() {
	var clipBoardContent = "";
	clipBoardContent += this.location.href;
	window.clipboardData.setData("Text", clipBoardContent);
	alert("已成功将原文链接复制到剪切板")
}
jQuery(document).ready(function() {
	jQuery('.zt_con h2,h3 a').click(function() {
		jQuery(this).text('正在加载……');
		window.location = jQuery(this).attr('href')
	})
});
jQuery(document).ready(function() {
	jQuery('h1 a').click(function() {
		jQuery(this).text('正在加载……');
		window.location = jQuery(this).attr('href')
	})
});
jQuery(document).ready(function() {
	jQuery(".topnav ul li").hover(function() {
		jQuery(this).children("ul").show();
		jQuery(this).addClass("li01")
	}, function() {
		jQuery(this).children("ul").hide();
		jQuery(this).removeClass("li01")
	})
});
jQuery(document).ready(function() {
	jQuery('#tab-title span').click(function() {
		jQuery(this).addClass("selected").siblings().removeClass();
		jQuery("#tab-content > ul").slideUp('1500').eq(jQuery('#tab-title span').index(this)).slideDown('1500')
	})
});
jQuery(function() {
	jQuery('.thumbnail img,.pic img').hover(function() {
		jQuery(this).fadeTo("fast", 0.5)
	}, function() {
		jQuery(this).fadeTo("fast", 1)
	})
});
jQuery(document).ready(function() {
	jQuery("a[rel='external'],a[rel='external nofollow']").click(function() {
		window.open(this.href);
		return false
	})
});