<?php get_header(); ?>

<body>
    <!-- Showcase -->
    <div class="showcase">
        <div class="container">
            <div class="row">
                <div class="span12">
                            <div id="tagline1">
                                <h2>WRKTG</h2>
                            </div>
                            <div id="tagline2">
                                <h2>A Make Together AGENCY</h2>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Strip -->
    <section class="strip">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3> Let's Make Together! Shoot us a line! <a class="btn" href="#"> Contact Us <i class="icon-caret-right"></i></a></h3>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
    </div>
<?php get_footer(); ?>
</body>