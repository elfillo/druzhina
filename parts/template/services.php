<?php
$uri = $_SERVER['REQUEST_URI'];
$formatUri = substr(substr($uri, 0, -1), 1);
$category = $formatUri;
?>
<div class="services">
    <?php if (have_posts()): query_posts('category_name='.$category); while (have_posts()): the_post(); ?>
        <div class="service">
            <div class="service__img">
                <?php the_post_thumbnail(array()); ?>
            </div>
            <div class="service__text">
                <div class="title">
                    <?php the_title();?>
                </div>
                <p>
                    <?php the_content();?>
                </p>
                <div class="btn btn--modal btn--small btn--orange change_border change_color">Заказать</div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>