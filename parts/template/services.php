<?php
$uri = $_SERVER['REQUEST_URI'];
$formatUri = explode('/', $uri);
$category = $formatUri[1];
if($uri === '/')
    $category = 'home';
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
                <div class="desc">
                    <?php the_content();?>
                </div>
                <?php if($category != 'czeny-na-remont'):?>
                    <div class="btn btn--modal btn--small btn--orange change_border change_color">Заказать</div>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>