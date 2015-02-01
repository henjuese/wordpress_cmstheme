<?php get_header(); ?>
<div id="gongaobox"><div id="gongao">当前位置：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php echo get_category_parents( get_query_var('cat') , true , ' > ' ); ?>文章</div>
<div id="gongaor">建站日期：<strong><?php echo get_option('lovnvns_date');?></strong>　运行天数：<strong><?php echo floor((time()-strtotime(get_option('lovnvns_date')))/86400); ?></strong> 天　最后更新：<strong><?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y-n-j', strtotime($last[0]->MAX_m));echo $last; ?></strong></div>
</div>
<div id="divcom">
<div class="main">
<div id="turn" class="turn">
	<div class="turn-loading"><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" /></div>
	<ul class="turn-pic">
			<?php if(get_option('lovnvns_banner_ad')!="") echo get_option('lovnvns_banner_ad');else echo "<li><a href='http://www.bofaziran.com/112/' target='_blank'><img src='http://www.caidaoke.com/ad/banner-4.jpg' /></a></li><li><a href='http://www.1188sj.com/?Intr=37648' target='_blank'><img src='http://www.caidaoke.com/ad/xsj1.jpg' border='0' /></a></li>
<li><a href='http://www.1188sj.com/?Intr=37648' target='_blank'><img src='http://www.caidaoke.com/ad/xsj2.jpg' border='0' /></a></li>" ?>
		</ul>
	</div><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/banner.js"></script>
<div id="showleft">
<?php 
  global $query_string;
  query_posts($query_string.'&showposts=10&caller_get_posts=1'); ?> 
 
 <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="item"><div class="haibao">
<div class="pic"><a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></div>
<div class="con"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<p><?php the_time('Y年m月d日') ?><br />作者: <?php the_author (); ?><br /><?php comments_popup_link ('0°','+1°','+%°'); ?><br /><?php if(function_exists('the_views')) { print '被围观 '; the_views();  } ?><br /><?php edit_post_link('编辑'); ?></p>
</div></div></div>
<?php endwhile; ?>
<?php endif; ?>
</div> 
<?php pagination($query_string); ?>
</div>
<?php get_sidebar(); ?></div>
<div class="clear"></div>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/masonry.js"></script>  
<script>  
  $(function(){  
    var $container = $('#showleft');  
    $container.imagesLoaded( function(){  
      $container.masonry({  
        itemSelector : '.item'  
      });  
    });  
  });  
</script> 