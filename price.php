<?php
/*
Template Name: Прайс-лист
*/
?>
<?php get_header(); ?>
<div class="content">
    <div class="page--price">
        <div class="title"><?php the_title()?></div>
        <?php
        if ( have_posts() ){
            while ( have_posts() ){ the_post();
                echo the_content();
            }
        } else {
            echo wpautop( 'Постов для вывода не найдено.' );
        }
        ?>

    </div>
</div>
<?php get_footer(); ?>