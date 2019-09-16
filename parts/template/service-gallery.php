<?php
$uri = $_SERVER['REQUEST_URI'];
$formatUri = explode('/', $uri);
$category = $formatUri[1] . '-img';
if($uri === '/')
    $category = 'home';
?>
<section class="services">
    <?php if (have_posts()): query_posts('category_name='.$category); while (have_posts()): the_post(); ?>
        <?php the_content();?>
    <?php endwhile; endif; ?>
</section>