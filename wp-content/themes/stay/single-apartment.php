<?php get_header(); ?>

<main role="main" class="main-content">


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="post-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="txt-title">Apartment Title</h1>
                    <h2 class="txt-subtitle">Apartment Subtitle</h2>
                </div>
            </div>
        </div>
        </section>
        <section class="post-intro">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
						<?php if( have_rows('galery') ): ?>
						
                        <div class="images-slider">

                            <?php	while ( have_rows('galery') ) : the_row(); ?>                           
							<div class="images-slider__item backgrounded" style="background-image:url( <?php the_sub_field('image'); ?>)"></div>	
							<?php endwhile; ?>
						</div>
							<?php else : endif; ?>

						<?php if( have_rows('galery') ): ?>
						
                        <div class="dots-slider">

                            <?php	while ( have_rows('galery') ) : the_row(); ?>                           
							<div class="dots-slider__item backgrounded" style="background-image:url( <?php the_sub_field('image'); ?>)"></div>	
							<?php endwhile; ?>
						</div>
							<?php else : endif; ?>
                    </div>
                    <div class="col-xl-3">
						<div class="map-box">
								<iframe class="map-box__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.7704513169597!2d19.940099015460948!3d50.053131279422445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b6b0c7c18d7%3A0x5b1ba9d7c4f9a7cc!2sDietla+48%2C+33-332+Krak%C3%B3w!5e0!3m2!1sen!2spl!4v1561317518871!5m2!1sen!2spl"frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="content">
                            <header class="content__header">
                                <h2 class="txt-title">Description</h2>
                            </header>
                            <main class="content__body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat luctus lorem, sed suscipit nulla vestibulum ac. Vestibulum ut facilisis metus. Ut a bibendum massa. Etiam eleifend, nisl ac vehicula egestas, erat dui aliquam orci, sed cursus orci purus sed sem. Nam ut magna non nisl bibendum fringilla eget vel dui. Duis eu lorem tempor, elementum mi quis, laoreet nisi. Sed pharetra nibh ac odio viverra viverra. Donec interdum semper massa in varius. In egestas dictum auctor.
                                                <br>
                                Duis volutpat posuere iaculis. Mauris luctus eros sed arcu sagittis mollis. Nunc at rutrum diam. Curabitur fermentum pulvinar orci, in scelerisque neque elementum fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum et lorem nec sapien porttitor vulputate non ut erat. Suspendisse lacinia erat quis enim porta ornare. Cras mollis tincidunt ultrices. Sed mollis congue felis, id ornare dolor fringilla a. Morbi vitae lacinia lacus. Nulla facilisi. Nulla sagittis iaculis urna. Aenean posuere nulla in blandit laoreet. Vivamus tristique quam felis, sed malesuada felis pellentesque sed. Nam porttitor elit risus, nec rutrum erat porta ac.
                            </main>
                        </div>
                        <div class="content">
                         <header class="content__header">                                
                                <h2 class="txt-title">Amenities</h2>
                            </header>
                            <main class="content__body">
                                <ul class="list-cols">
                                    <li>Duis volutpat</li>
                                    <li>Duis iaculis</li>
                                    <li>Duis iaculis</li>
                                    <li>Duis volutpat</li>
                                    <li>Duis posuere</li>
                                    <li>Duis</li>
                                    <li>Duis volutpat</li>
                                    <li>Duis volutpat</li>
                                    <li>Duis volutpat</li>
                                    <li>Duis volutpat</li>
                                </ul>
                            </main>
                        </div>                            
                    </div>
                    <div class="col-xl-3">
                        <div class="side-form">
                            <header class="side-form__header">
                                Send booking request
                            </header>
                            <main class="side-form__body">
                                <?php echo do_shortcode( '[contact-form-7 id="76" title="Booking form"]' ); ?>
                            </main>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </article>
    <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

    <!-- article -->
    <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

    </article>
    <!-- /article -->

    <?php endif; ?>


</main>


<?php get_footer(); ?>