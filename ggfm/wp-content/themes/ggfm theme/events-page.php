<?php 
/* Template Name: Events  */ 
?>
<?php
	get_header();
?>


<?php
$args = array(
	'orderby' => 'title',
	'order' => 'ASC',
);
$query = new WP_Query( $args );
?>

<div class = "events-wrapper">
    <div class = "events-filter">Latest
    <img class = "btndropdown" src = "<?php bloginfo('template_directory');?>/assets/icons/2x/baseline_keyboard_arrow_down_white_24dp.png" />
    </div>
    <div class = "dropdown">
       <div class = "item">Filter</div>
         <div class = "item">Filter</div>   
         <div class = "item">Filter</div>   
    </div>

    <div class="slider events-carousel demo">
    <?php if( $query->have_posts() ):
            while( $query->have_posts() ): $query->the_post();?>
      <div class = "event-wrapper">
        <div class = "event-overlay">
          <div><h2><?php echo the_title(); ?></h2><p><?php echo the_excerpt(); ?></p></div>
        </div>
        <img src= <?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?> />
    </div>
    <?php   
        endwhile;
    endif;
    ?>
    </div>
</div>
<?php
	get_footer();
?>