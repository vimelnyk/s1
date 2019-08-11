<?php
/* Template Name: Home */
get_header(); ?>


<section class="intro-section">
    <div class="container text-center intro-in">
        <h1 class="intro-title color-white uppercase"><?php echo the_field('title'); ?></h1>
    </div>
    <i class="pseudo pseudo-1 backgrounded" style="background-image:url(<?php echo the_field('image'); ?>);"></i>
    <i class="pseudo pseudo-2 background-white">
        <span class="pseudo pseudo-in background-blue"></span>
    </i>
    <i class="pseudo pseudo-3 background-white">
        <span class="pseudo pseudo-in background-green"></span>
    </i>
</section>

<main class="general-listing">
    <header class="container ">
        <div class="row">
            <div class="col text-center general-listing__head ">
                <h1 class="txt-title">Our apartments</h1>
            </div>
        </div>
    </header>

    <div class="container general-listing__body">
        <div class="row">
            <?php
    
                $args = array(
                    'posts_per_page'	=> -1,
                    'post_type' => 'apartment',							
                    'publish' => true,    
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );  
    
                $the_query = new WP_Query( $args ); ?>

            <?php	if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


            <a href="<?php the_permalink();?>" class="col-md-4 image-item">
                <div class="col-12 image-wrap">

                    <?php
    
    
    if( have_rows('galery') ):  
          $i = 0;
        while (( have_rows('galery') )&& ($i<3)) : the_row(); ?>
                    <div class="backgrounded image image-<?php echo $i+1; ?>"
                        style="background-image:url(<?php the_sub_field('image');?>)"></div>
                    <?php $i++; endwhile;
    else : endif;
    
    ?>
                </div>
                <div class="text-wrap col-12 ">
                    <h3 class="txt-pretitle color-blue"><?php if( get_field('type') == 'room' ): ?>
	Room with own bathroom
<?php else : ?>
	Apartment
<?php endif; ?>

</h3>
                    <h2 class="txt-title color-black"> <?php the_title() ?></h2>
                    <div class="price-title color-black">from <span> 100PLN</span>per/night</div>
                </div>

            </a>

            <?php endwhile; else: endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</main>




<?php get_footer(); ?>