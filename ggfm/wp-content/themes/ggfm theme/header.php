


<body <?php body_class();?>>
<div class = "bg-overlay"></div>
<?php wp_head();?>
<header>
<div class = "nav-logo">
<img src="<?php bloginfo('template_directory');?>/assets/GGFM%20Photos/Logos/PNGs/GGFM%20Logo_Dark.png" />
</div>
<nav class = "nav-list">
        <?php wp_nav_menu( array('theme_location' =>  'header' ) ); ?>
</nav>
<div class = "nav-stream nav-icon">
<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/outline_cast_white_24dp.png" />
</div>
<div class = "nav-search nav-icon">
<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/baseline_search_white_24dp.png" />
</div>
</header>


