<?php 
/* Template Name: About */ 
?>
<?php get_header();?>

<div class="about-f1 part">
        <!-- Mini Carousel -->
        <div class="carousel-mini">
            <?php the_field('slider');?>
        </div>

        <!-- Text -->
        <div class="about-f2">
                <span class="about-main">Green Giant FM</span>
                <br>
                <!-- <span class="about-desc">De La Salle University-Manila’s Official Radio Station, located at Br. Bloemen Hall. Green Giant FM broadcasts live on Tuesdays and Thursdays from 7:30 AM to 9:15 PM, and on Wednesdays and Fridays from 7:30 AM to 4:00 PM. </span> -->
                <h2 class="about-desc"><?php the_field('ggfm_about');?></h2>
        </div>
    </div>
</div>

<!-- Second page (Vision Mission) -->
<div class="about-vm part">
    <div class="vision">
        <div class="content">
            <span class="about-main">Vision</span>
            <br>
            <h2 class="about-desc"><?php the_field('vision');?></h2>
        </div>
    </div>
    <div class="mission">
        <div class="content">
            <span class="about-main">Mission</span>
            <br>
            <h2 class="about-desc"><?php the_field('mission');?></h2>
        </div>
    </div>
</div>

<!-- Third page (EB) -->
<div class="about-eb part">
    <div class="f-header">
        <h1 class="f-title">
            EXECUTIVE BOARD
        </h1>
        <h2 class="f-description"><?php the_field('executive_board_description');?></h2>
    </div>

    <!-- Cards -->
    <div class="eb-cards">
        
        <?php
        // President
        $president = get_field('eb_president');	
        if( $president ): ?>
            <div class="card">
                <img class="card-pic" src="<?php echo $president['image']['url'];?>" alt="<?php echo $president['image']['alt']; ?>"/>
                <div class="c-name">
                    <h1><?php echo $president['name']; ?></h1>
                    <h2>President</h2>
                </div>
                <div class="c-desc">
                    <p><?php echo $president['description']; ?></p>
                </div>
                <div class="c-links">
                    <a href="<?php echo $president['facebook']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\fb.svg" alt="facebook" class="sm2-icon"></a>
                    <a href="<?php echo $president['instagram']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\insta.svg" alt="instagram" class="sm2-icon"></a>
                    <a href="<?php echo $president['twitter']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\twitter.svg" alt="twitter" class="sm2-icon"></a>
                    <a href="<?php echo $president['spotify']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\spotify.svg" alt="spotify" class="sm2-icon"></a>
                </div>
            </div>
        <?php endif; ?>

        <?php
        // Internal
        $internal = get_field('eb_internal');	
        if( $internal ): ?>
            <div class="card">
                <img class="card-pic" src="<?php echo $internal['image']['url'];?>" alt="<?php echo $internal['image']['alt']; ?>"/>
                <div class="c-name">
                    <h1><?php echo $internal['name']; ?></h1>
                    <h2>VP for Internal Affairs</h2>
                </div>
                <div class="c-desc">
                    <p><?php echo $internal['description']; ?></p>
                </div>
                <div class="c-links">
                    <a href="<?php echo $internal['facebook']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\fb.svg" alt="facebook" class="sm2-icon"></a>
                    <a href="<?php echo $internal['instagram']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\insta.svg" alt="instagram" class="sm2-icon"></a>
                    <a href="<?php echo $internal['twitter']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\twitter.svg" alt="twitter" class="sm2-icon"></a>
                    <a href="<?php echo $internal['spotify']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\spotify.svg" alt="spotify" class="sm2-icon"></a>
                </div>
            </div>
        <?php endif; ?>

        <?php
        // External
        $external = get_field('eb_external');	
        if( $external ): ?>
            <div class="card">
                <img class="card-pic" src="<?php echo $external['image']['url'];?>" alt="<?php echo $external['image']['alt']; ?>"/>
                <div class="c-name">
                    <h1><?php echo $external['name']; ?></h1>
                    <h2>VP for External Affairs</h2>
                </div>
                <div class="c-desc">
                    <p><?php echo $external['description']; ?></p>
                </div>
                <div class="c-links">
                    <a href="<?php echo $external['facebook']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\fb.svg" alt="facebook" class="sm2-icon"></a>
                    <a href="<?php echo $external['instagram']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\insta.svg" alt="instagram" class="sm2-icon"></a>
                    <a href="<?php echo $external['twitter']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\twitter.svg" alt="twitter" class="sm2-icon"></a>
                    <a href="<?php echo $external['spotify']; ?>"><img src="<?php bloginfo('template_directory');?>/assets\icons\social media svg\spotify.svg" alt="spotify" class="sm2-icon"></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Fourth page (pools) -->
<div class="about-pools part">
    <div class="f-header">
        <h1 class="f-title">
            POOLS
        </h1>
        <h2 class="f-description"><?php the_field('pool_description');?></h2>
    </div>

    <div class="pool-wrapper">
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\audio.svg" alt="Audio Pool" class="pool-img">
            <div class="pool-title">
                <h1>Audio</h1>
            </div>
            <div class="pool-desc">
                <p>The Audio Pool is behind your listening experience when you tune in to DLSU Radio: Green Giant FM. Making sure that you listen to the hottest tracks with some quirky commercials in between, we guarantee that there is never a dull moment available on air.</p>
            </div>
        </div>
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\logistics.svg" alt="Logistics Pool" class="pool-img">
            <div class="pool-title">
                <h1>Logistics</h1>
            </div>
            <div class="pool-desc">
                <p>The Documentations and Logistics Pool serves as the office managers of DLSU Radio: Green Giant FM. Keeping track of the documents, the studios, and the members of the station themselves, we are considered as the backbone of the organization.</p>
            </div>
        </div>
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\marketing.svg" alt="Marketing Pool" class="pool-img">
            <div class="pool-title">
                <h1>Marketing</h1>
            </div>
            <div class="pool-desc">
                <p>DLSU Radio: Green Giant FM may have the music that people love and the shows to entertain, but it's the Marketing Pool that makes sure it gets out there! From branding to partnerships, we ensure that Green Giant FM is known to the world. </p>
            </div>
        </div>
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\public_relations.svg" alt="Public Relations Pool" class="pool-img">
            <div class="pool-title">
                <h1>Public Relations</h1>
            </div>
            <div class="pool-desc">
                <p>The Public Relations Pool is in charge of working with clients inside and outside De La Salle University to help promote and build up their events. From on-air promotion to providing talents for different events, we make certain that our services are what our clients want and more. </p>
            </div>
        </div>
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\publicity.svg" alt="Publicity and Productions Pool" class="pool-img">
            <div class="pool-title">
                <h1>Publicity & Productions</h1>
            </div>
            <div class="pool-desc">
                <p>From camera work to graphic design, the Publicity and Productions Pool is responsible for all the creative visual needs produced by the station. Members of the pool also make up the Press Team, who provide photo and video coverage for events inside and outside De La Salle University. </p>
            </div>
        </div>
        <div class="pool-container">
            <img src="<?php bloginfo('template_directory');?>/assets\icons\pool svg\radio-talent.svg" alt="Radio Talent Pool" class="pool-img">
            <div class="pool-title">
                <h1>Radio Talent</h1>
            </div>
            <div class="pool-desc">
                <p>The Radio Talent Pool consists of the voices and faces of DLSU Radio: Green Giant FM. The DJs control the music you listen to and talk about various topics you didn’t think you needed to hear. Not only do we work our magic on air, but we also bring out our personality and wit in different hosting events inside and outside De La Salle University. </p>
            </div>
        </div>
        
    </div>
</div>
    
<!-- Audio Player -->
<?php get_footer(); ?>
