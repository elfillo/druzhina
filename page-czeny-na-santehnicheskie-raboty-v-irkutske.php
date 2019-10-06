<?php get_header(); ?>
    <div class="container">
        <section class="thanks_wrapper" style="flex-direction: column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </section>
        <br />
    </div>
<?php get_footer(); ?>
