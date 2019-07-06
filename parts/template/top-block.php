<?php
$uri = $_SERVER['REQUEST_URI'];
$formatUri = substr(substr($uri, 0, -1), 1);
$category = $formatUri . '-top';
if($uri === '/')
    $category = 'home-top';
?>
<?php if (have_posts()): query_posts('posts_per_page=1&category_name='.$category); while (have_posts()): the_post(); ?>
    <div class="topBlock">
        <div class="topBlock__img">
            <?php the_post_thumbnail(array()); ?>
        </div>
        <div class="topBlock__text">
            <?php the_content();?>
        </div>
    </div>
<?php endwhile; endif; ?>

