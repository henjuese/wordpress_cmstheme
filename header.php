<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <?php include('includes/seo.php'); ?>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/highlight.css" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/semantic.css" />

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
    <?php if ( is_singular() ){ ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
    <?php } ?>
</head>
<body>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lovnvns.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.js"></script>
    <SCRIPT src="<?php bloginfo('template_url'); ?>/js/mobanwang.js" type=text/javascript></SCRIPT>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/semantic.min.js"></script>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("img").not(".notlazy").lazyload({
            placeholder : "<?php bloginfo('template_url'); ?>/images/grey.gif",
            effect      : "fadeIn"                      
        });
        //首页固定浮动框
        $(".side ul li").hover(function(){
            $(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"});    
        }, function(){
            $(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"});   
        });
        $(".nx-pop-weixin").click(function() {
            $('.weixin.ui.modal').modal('show');
        });
    });

</script>
    <div id="nav">
        <div class="wrap">
            <ul id="navleft">
               <!--  <li>
                    <a href="<?php bloginfo('siteurl'); ?>
                        /">
                        <span class="leadBg">首 页</span>
                    </a>
                </li>
                <?php wp_list_pages('title_li='); ?> -->
            </ul>
            <div id="navright" class="m-r-8">
                <ul>
                    <?php
                          global $user_ID, $user_identity, $user_email, $user_login;
                          get_currentuserinfo();
                          if (!$user_ID) {
                        ?>
                    <li class="toploginbg">
                        <form id="loginform" action="<?php echo get_settings('siteurl'); ?>
                            /wp-login.php" method="post" target="_blank">用户名：
                            <input class="toplogin_input" type="text" name="log" id="log" />
                            密码：
                            <input class="toplogin_input" type="password" name="pwd" id="pwd" />
                        </li>
                        <li class="but_login">
                            <input type="submit" class="but_loginlogin" value="" name="submit" target="_blank" />
                        </form>
                    </li>
                    <!-- <li>
                        <div class="topline"></div>
                    </li> -->
                   <!--  <li>
                        <a href="<?php if(get_option('lovnvns_weibo')!="") echo get_option('lovnvns_weibo'); ?>
                            " target="_blank" class="tqq" title="关注我的微博" rel="external nofollow">微博
                        </a>
                    </li> -->
                   <!--  <li>
                        <div class="topline"></div>
                    </li> -->
                   <!--  <li>
                        <a href="mailto:<?php if(get_option('lovnvns_email')!="") echo get_option('lovnvns_email'); ?>
                            " target="_blank" class="rssmail" title="给我发邮件" rel="external nofollow">邮箱
                        </a>
                    </li> -->
                    <!-- <li>
                        <div class="topline"></div>
                    </li> -->
                    <!-- <li>
                        <a href="<?php if(get_option('lovnvns_rss')!="") echo get_option('lovnvns_rss'); ?>" target="_blank" class="help" title="订阅我的文章">RSS</a>
                    </li> -->
                    <?php } 
else { ?>
                    <div id="navrightr" class="m-r-8">
                        <div class="navrightlogin">
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url') ?>/wp-admin/" target="_blank">控制面板</a>
                                </li>
                                <li>
                                    <div class="topline"></div>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url') ?>/wp-admin/post-new.php" target="_blank">撰写文章</a>
                                </li>
                                <li>
                                    <div class="topline"></div>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php" target="_blank">评论管理</a>
                                </li>
                                <li>
                                    <div class="topline"></div>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url') ?>
                                        /wp-login.php?action=logout&amp;redirect_to=
                                        <?php echo urlencode($_SERVER['REQUEST_URI']) ?>">注销</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?></ul>
            </div>
        </div>
    </div>
    <!-- <div id="search_bg">
    <div id="search_main">
        <div class="logo">
            <h1>
                <a href="<?php bloginfo('siteurl'); ?>
                    /">
                    <?php bloginfo('name'); ?></a>
            </h1>
        </div>

        <div class="searchbarcolor">
            文章总数： <strong><?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish;?></strong>
            篇　评论总数： <strong><?php echo $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments");?></strong>
            条
        </div>
    </div>
</div>
-->

<div id="content">
    <div class="topnav">
        <?php wp_nav_menu( array( 'container' =>
        '','items_wrap' => '
        <ul id="menu" class="menu">%3$s</ul>
        ','fallback_cb'     => '' ) ); ?>
    </div>
</div>