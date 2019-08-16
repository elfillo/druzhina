<?php
$uri = $_SERVER['REQUEST_URI'];
$formatUri = substr(substr($uri, 0, -1), 1);
$category = $formatUri . '-img';
if($uri === '/')
    $category = 'home';
?>
<section class="services">
    <?php if (have_posts()): query_posts('category_name='.$category); while (have_posts()): the_post(); ?>
        <?php the_content();?>
    <?php endwhile; endif; ?>
</section>