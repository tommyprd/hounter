<?php 
// this template file for home landing page
get_header(); ?>

<section id="hero" class="section">
    <div class="container">
        <div class="intro-box">
            <div>
                <h1><?php _e( 'Find The Place To <br/>Live <span class="outlined-text">Your Dreams</span> <br/>Easily Here', 'hounter' ); ?>
                </h1>
                <p><?php _e( 'Everything you need about finding your place to live will be here, where it will be easier for you', 'hounter' ); ?>
                </p>
            </div>
            <div class="locator">
                <form>
                    <div class="form-fields flex flex-justify-between">
                        <input type="text" name="location" placeholder="<?php _e( 'Search for the location you want!', 'hounter' ); ?>">
                        <button type="submit"><?php _e( 'Search', ''); ?></button>
                    </div>
                </form><!-- end form -->
            </div>
            <div class="our-partners">
                <p><?php _e( 'Our Partnership', 'hounter' ); ?></p>
                <div class="flex flex-align-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_traveloka.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_tiket.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_airbnb.png" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_tripadvisor.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="hero-overlapping-stats">
        <div class="stack-stats">
            <div class="stats house-selling">
                <div class="img"></div>
                <div>
                    <p><b>56 Houses</b></p>
                    <span>Sold Monthly</span>
                </div>
            </div>
            <div class="flex flex-align-center">
                <div class="stats">
                    <div class="people-stacks">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
                    <div>
                        <p><b>1K+ People</b></p>
                        <span>Successfully Getting Home</span>
                    </div>
                </div>
                <div class="stats">
                    <div class="img"></div>
                    <div>
                        <p><b>4K+</b></p>
                        <span>People Looking for New Homes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end #hero -->

<section id="featured-property" class="section">
    <div class="container">
        <div class="section-header">
            <div class="flex flex-align-center flex-justify-between">
                <div>
                    <div class="subtitle title-line"><span><?php _e( 'Our recomendation', 'hounter' ); ?></span></div>
                    <h2><?php _e( 'Featured House', 'hounter' ); ?></h2>
                </div>
                <div class="featured-property-categories">
                    <a class="button">House</a>
                    <a class="button">Villa</a>
                    <a class="button">Apartment</a>
                </div>
                <div class="featured-property-nav">
                    <a href="javascript://" class="button button-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrowl_dark.svg" />
                    </a>
                    <a href="javascript://" class="button button-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrowr_dark.svg" />
                    </a>
                </div>
            </div>
        </div><!-- end .section-header -->
    </div>
</section>

<section id="ready-to-sell" class="section">
    <div class="container">
        <article class="flex flex-align-center">
            <div class="content">
                <header class="post-header">
                    <div class="subtitle title-line"><span><?php _e( 'Our recomendation', 'hounter' ); ?></span></div>
                    <h2><?php _e( 'Let’s tour and see our house!', 'hounter' ); ?></h2>
                </header>
                <div class="post-excerpt">
                    <p>Houses recommended by our partners that have been curated to become the home of your dreams!</p>
                </div>
                <div class="post-meta">
                    <p><b><?php _e( 'House Detail', 'hounter' ); ?></b></p>
                    <ul class="property-attr no-style">
                        <li class="attr-bedroom"><span>4 Bedrooms</span></li>
                        <li class="attr-bathroom"><span>2 Bathrooms</span></li>
                        <li class="attr-carport"><span>1 Carport</span></li>
                        <li class="attr-floor"><span>2 Floors</span></li>
                    </ul>
                </div>
                <footer class="post-footer flex flex-align-center flex-justify-between">
                    <div class="author flex flex-align-center">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 56 ); ?>
                        <div>
                            <p>Dianne Russel</p>
                            <cite>Manager Director</cite>
                        </div>
                    </div><!-- .author -->
                    <a href="#" class="button flex flex-align-center">
                        <img class="icon"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_phone.svg" />
                        <span><?php _e( 'Contact Now', 'hounter' ); ?></span>
                    </a>
                </footer>
            </div>
            <div class="post-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/for_sale_thumbnail.jpg" />
            </div>
        </article>
    </div><!-- end .container -->
</section><!-- end #ready-to-sell -->

<section id="customer-review" class="section">
    <div class="container-full">
        <div class="section-header text-center">
            <div class="subtitle title-top-line"><span><?php _e( 'See our review', 'hounter' ); ?></span></div>
            <h2 class="text-center"><?php _e( 'What Our User Say About Us', 'hounter' ); ?></h2>
        </div><!-- end .section-header -->

        <div class="review-carousel owl-carousel">
            <!-- Slides -->
            <?php 
                $review_args = [
                    'post_type'         => 'review',
                    'posts_per_page'    => 3,
                    'post_status'       => 'publish'
                ];
                $review_query = new WP_Query( $review_args );
                if ( $review_query->have_posts() ) : ?>
            <?php while ( $review_query->have_posts() ) : $review_query->the_post(); ?>
            <article id="review-<?php the_ID(); ?>" <?php post_class( array( 'swiper-slide', 'review-slide' ) ); ?>>
                <div class="review-thumbnail"></div>
                <div class="review-content">
                    <?php the_title( '<h3 class="review-title">', '</h3>' ); ?>
                    <?php the_content(); ?>
                    <div class="review-meta flex flex-align-center flex-justify-between">
                        <div class="author flex flex-align-center">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                            <div>
                                <p>Dianne Russel</p>
                                <cite>Manager Director</cite>
                            </div>
                        </div><!-- .author -->

                        <div class="rating flex flex-align-items">
                            <span class="count">4.9</span>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </div><!-- end .contaienr -->
</section><!-- end #customer-review -->

<section id="recent-posts" class="section">
    <div class="container">
        <div class="section-header text-center">
            <div class="subtitle title-top-line">
                <span><?php _e( 'See tips and trick from our partnership', 'hounter' ); ?></span></div>
            <h2 class="text-center"><?php _e( 'Find out more about <br/>selling and buying homes', 'hounter' ); ?></h2>
            <a href="#" class="button"><?php _e( 'More Article', 'hounter' ); ?></a>
        </div><!-- end .section-header -->

        <div class="blog-loop flex">
            <?php
                $blog_args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 4
                ];
                $blog_query = new WP_Query( $blog_args );
                if ( $blog_query->have_posts() ) : ?>

            <?php $i = 1; while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

            <?php if ( $i == 1 ) : ?>
                <div class="blog-loop-left">
            <?php endif; ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post-thumbnail"></div>

                    <?php if ( $i > 1 ) : ?><div class="post-content"><?php endif; ?>

                    <header class="post-header">
                        <div class="author flex flex-align-center">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                            <span><?php echo get_the_author_meta( 'display_name' ); ?></span>
                        </div>
                        <?php the_title( sprintf( '<h2 class="post-title"><a href="%s" title="%s">', get_permalink(), get_the_title() ), '</a></h2>' ); ?>
                    </header>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                    <div class="post-meta">
                        <div class="meta-minread"><?php printf( __( '%s min read', 'hounter' ), hounter_post_minread( get_the_ID() ) ); ?></div>
                        <div class="meta-date"><?php echo get_the_date( 'j M Y', get_the_ID() ); ?></div>
                    </div>

                    <?php if ( $i > 1 ) : ?></div><?php endif; ?>

                </article><!-- end #post-<?php the_ID(); ?> -->

            <?php if ( $i == 1 ) : ?>
                </div><!-- end .blog-loop-left -->
                <?php if ( $blog_query->found_posts > 1 ) : ?>
                <div class="blog-loop-right">
                <?php endif; ?>
            <?php endif; ?>

                <?php $i++; endwhile; ?>

            <?php if ( $blog_query->found_posts > 1 ) : ?>
                </div><!-- end blog-loop-right -->
            <?php endif; ?>

            <?php endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div><!-- end .blog-loop -->
    </div><!-- end .container -->
</section><!-- end #recent-posts -->

<section id="call-to-action" class="section">
    <div class="container">
        <div class="call-to-action">
            <form>
                <h2><?php _e( 'Subscribe For More Info and update from Hounter', 'hounter' ); ?></h2>
                <div class="form-fields flex flex-justify-between">
                    <input type="email" name="your-email" placeholder="<?php _e( 'Your email here', 'hounter' ); ?>">
                    <button type="submit"><?php _e( 'Subscribe Now', ''); ?></button>
                </div>
            </form><!-- end form -->
        </div>
    </div><!-- end .container -->
</section><!-- end #call-to-action -->

<?php get_footer(); ?>