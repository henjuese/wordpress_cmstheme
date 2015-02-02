<div id="footer">
	<div id="bot_main">
		<div id="bot_mainf">
			<p>
				Copyright &copy;
				<a href="<?php bloginfo('siteurl'); ?>
					/"> <strong><?php bloginfo('name');?></strong>
				</a>
				. All Rights Reserved
				<?php echo get_option('lovnvns_Designed'); ?>
				<?php echo get_option('lovnvns_stat'); ?></p>
			<p>
				<?php if(get_option('lovnvns_statistics')!="") echo get_option('lovnvns_statistics'); ?></p>
		</div>
		<!--脚步logo-->
		<!-- <div id="bot_mainr">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo1.gif" /></div> -->
			<div class="side">
				<ul>
					<li><a href="javascript:openWindows();"><div class="sidebox"><img src="<?php bloginfo('template_url'); ?>/images/side/side_icon02.png">关注微信</div></a></li>
					<li><a href="tencent://message/?uin=<?php if(get_option('lovnvns_rss')!="") echo get_option('lovnvns_rss'); ?>&Site=在线QQ&Menu=yes"><div class="sidebox"><img src="<?php bloginfo('template_url'); ?>/images/side/side_icon04.png">QQ客服</div></a></li>
					<li>
						<a href="<?php if(get_option('lovnvns_weibo')!="") echo get_option('lovnvns_weibo'); ?>" target="_blank">
						<div class="sidebox">
							<img src="<?php bloginfo('template_url'); ?>/images/side/side_icon03.png">新浪微博
						</div>
						</a>
                        
					</li>
					<li style="border:none;"><a href="javascript:goTop();" class="sidetop"><img src="<?php bloginfo('template_url'); ?>/images/side/side_icon05.png"></a></li>
				</ul>
			</div>
			<div class="weixin ui modal"  style="width:230px;height:230px;"> <i class="close icon"></i>
				<div class="" >
					<img class="weixin" width="230" height="230" src="<?php if(get_option('lovnvns_sitemap')!="") echo get_option('lovnvns_sitemap'); ?>"></div>
			</div>
	</div>
</div>
</body>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/semantic.css" />
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/semantic.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".side ul li").hover(function(){
		$(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})	
	},function(){
		$(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
	});
});

function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

function openWindows(){
		$('.weixin.ui.modal').modal('show');
		var imgsrc=$("img.weixin").attr('original');
		//$("img.weixin").attr("src",imgsrc); 
	  }
</script>
</html>