<?php 
/* Template Name: Blogs Page */ 
?>
<?php get_header();?>

<?php
$args = array(
	'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => '1'
);
$query = new WP_Query( $args );
$do_not_duplicate[] = array();
?>
   <?php if( $query->have_posts() ): ?>
     <div class = "blogs-wrapper">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
            <?php $do_not_duplicate[] = get_the_ID();    ?>
            <div class = "blog-main-wrapper">
                   <div class = "blog-overlay">
                                <div></div>
                                <h2><?php the_title() ?></h2>
                                <p><?php the_excerpt() ?></p>
                            </div>
                            <img src= <?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?> />
                </div><!--blogs main wrapper-->
                <div class = "blog-wrapper">
                <?php 
                    $args = array (  
                        'post_type'        =>  'post',  
                        'posts_per_page'   => '2',  
                        'post__not_in'     => $do_not_duplicate  
                    );  
                    $query = new WP_Query($args);  
                ?>
                <?php for($i = 0; $i <2; $i++): ?>
                <?php if($query->have_posts()): $query->the_post(); $do_not_duplicate[] = get_the_ID();  ?>
                
                    <div class = "blog">
                        <div class = "blog-overlay">
                            <div></div>
                            <h2><?php the_title() ?></h2>
                            <p><?php the_excerpt() ?></p>
                        </div><!--blog overlay-->
                        <img src= <?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?> />
                    </div><!--blog-->
                <?php endif ?>
                <?php endfor ?>
                </div>

                <?php 
                    $args = array (  
                        'post_type'        =>  'post',  
                        'posts_per_page'   => '1',  
                        'post__not_in'     => $do_not_duplicate  
                    );  
                    $query = new WP_Query($args);  
                ?>

            <?php  $counter++; ?>

   <?php       
        endwhile;
    endif;
    ?>
    </div>



<!-- <div class = "blogs-wrapper">
    
    <div class = "blog-main-wrapper">
        <div class = "blog-overlay">
            <div></div>
            <h2><?php echo $get_posts->post_title; ?></h2>
            <p>Making a fortune as a blogger is probably a task to figure out when you start blogging and getting a reasonable daily traffic. Music blogging is no different from any other blogging niche but how to money as a music blogger is different from other blogs.</p> 
        </div>
        <img src="<?php bloginfo('template_directory');?>/assets/GGFM%20Photos/WEB_%20Background/GG_BG_C-4.jpg"/>
    </div>

    <div class = "blog-wrapper">
        <div class = "blog">
            <div class = "blog-overlay">
            <div></div>
                <h2>DLSU vs FEU Men’s Basketball (Round 2) </h2>
            <p>DLSU Archers and FEU Tamaraws go head to head today at the Araneta Coliseum. Game begins....</p> 
          </div>
             <div class = "">
                <div> <img src="<?php bloginfo('template_directory');?>/assets/GGFM%20Photos/WEB_%20Background/GG_BG_C-4.jpg"/></div>
            </div>
        </div>
        
        <div class = "blog">
            <div class = "blog-overlay">
                <div></div>
                <h2>Band Practice</h2>
                <p>Get transported back to a time when power chords and crisp cymbals dominated the...</p> 
          </div>
            <img src="<?php bloginfo('template_directory');?>/assets/GGFM%20Photos/WEB_%20Background/GG_BG_C-4.jpg"/></div>
        </div>
    </div>
    </div> -->

         
    <?php get_footer(); ?>