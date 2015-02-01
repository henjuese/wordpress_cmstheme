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
	</div>
</div>
</body>
</html>