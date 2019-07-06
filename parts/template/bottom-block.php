<?php
$uri = $_SERVER['REQUEST_URI'];
$query = '';
if($uri == '/nashi-raboty/'){
    $query = 'post_type=repairs';
}else{
    $query = 'post_type=repairs&posts_per_page=1';
}
?>
<?php if (have_posts()): query_posts($query); while (have_posts()): the_post(); ?>
    <?php
    $repair_type = get_post_meta($post->ID, 'type', true);
    $repair_area = get_post_meta($post->ID, 'area', true);
    $repair_time = get_post_meta($post->ID, 'time', true);
    $repair_description = get_post_meta($post->ID, 'description', true);

    $images = $post -> post_content;
    $image_array = explode('/>', $images);
    foreach ($image_array as $image){
        $src = explode('"', explode('src="', $image)[1])[0];
        if(strlen($src) > 0){
            $src_array[] = $src;
        }
    }
    ?>
    <div class="bottomBlock">
        <div class="form">
            <div class="label">Тип ремонта</div>
            <input type="text" class="change_border" value="<?php echo $repair_type?>" disabled>
            <div class="label">Площадь</div>
            <input type="text" class="change_border" value="<?php echo $repair_area?>" disabled>
            <div class="label">Сроки работ</div>
            <input type="text" class="change_border" value="<?php echo $repair_time?>" disabled>
            <div class="label">Сроки работ</div>
            <textarea class="change_border" disabled><?php echo $repair_description?></textarea>
            <div class="buttons">
                <a href="/nashi-raboty/" class="btn btn--small btn--black change_border">
                    Смотреть все работы
                </a>
                <div class="btn btn--modal btn--small btn--orange change_border change_color">Хочу такой же ремонт!</div>
            </div>
        </div>
        <div class="slider">
            <div class="title change_color"><?php the_title();?></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                        foreach ($src_array as $src){
                            echo '<div class="swiper-slide"><img src="'.$src.'" alt="#"></div>';
                        }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next">
                    <svg class="slider-arrow">
                        <use xlink:href="#icon--arrow"></use>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg class="slider-arrow">
                        <use xlink:href="#icon--arrow"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>