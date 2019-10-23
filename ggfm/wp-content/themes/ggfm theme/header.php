
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<nav class = "nav-resp nav-mobile-container" for="burger">	
	<div class="close-icon">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40">
      <line x1="15" y1="15" x2="25" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
      <line x1="25" y1="15" x2="15" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>    
      <circle class="circle" cx="20" cy="20" r="19" opacity="0" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></circle>
      <path d="M20 1c10.45 0 19 8.55 19 19s-8.55 19-19 19-19-8.55-19-19 8.55-19 19-19z" class="progress" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></path>
    </svg>
	</div>
			<?php wp_nav_menu( array('theme_location' =>  'header' ) ); ?>
			<!-- <div class = "nav-stream nav-icon">
				<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/outline_cast_white_24dp.png" />
			</div> -->
</nav>
<div class = "bg-overlay"></div>
	<header for="burger" class="n-h">
		
		<div id="burger-div">
			<div class="mobile-checkbox">
				<input type="checkbox" class="header-input" id="burger" />
				<label class="label header-burger" for="burger">
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>
			<div class = "nav-logo nav-logo-mobile">
				<img src="<?php bloginfo('template_directory');?>/assets/GGFM%20Photos/Logos/PNGs/GGFM%20Logo_Dark.png" />
			</div>	
			<div class = "mobile-search nav-search nav-icon">
				<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/baseline_search_white_24dp.png" />
			</div>
		</div>
		
		<div id="left-nav">
			
			<nav class = "nav-list">
					<?php wp_nav_menu( array('theme_location' =>  'header' ) ); ?>
					<!-- <div class = "nav-stream nav-icon">
						<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/outline_cast_white_24dp.png" />
					</div> -->
					<div class = "nav-search nav-icon">
						<img src="<?php bloginfo('template_directory');?>/assets/icons/2x/baseline_search_white_24dp.png" />
					</div>
			</nav>
		</div>		
	</header>



<body <?php body_class();?>>


