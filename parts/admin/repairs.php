<?php
function register_repairs() {
    register_post_type('repairs', array(
        'label'  => 'repairs',
        'labels' => array(
            'name'               => 'Наши работы',
            'singular_name'      => 'Наша работа',
            'add_new'            => 'Добавить работу',
            'add_new_item'       => 'Новая работа',
            'edit_item'          => 'Редактировать запись',
            'new_item'           => 'Новая работа',
            'view_item'          => 'Смотреть работы',
            'search_items'       => 'Найти работу',
            'not_found'          => 'Работа не найдена',
            'not_found_in_trash' => 'Работа не найдена в корзине',
            'menu_name'          => 'Наши работы',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-multisite',
        'hierarchical' => false,
        'supports' => array(
            'title', 'editor', 'comments',
        ),
    ));
}

add_action('init', 'register_repairs', 2);

//init box in admin
function repairs_metabox_callback($post) {

    $repairsType = get_post_meta($post->ID, 'type', true);
    $repairsArea= get_post_meta($post->ID, 'area', true);
    $repairsTime = get_post_meta($post->ID, 'time', true);
    $repairsDescription = get_post_meta($post->ID, 'description', true);


    /*location for map*/
    echo '<span>Тип ремонта:</span>';
    echo '<br />';
    echo '<input type="text" style="width: 100%" name="type" required value="'.($repairsType ? $repairsType : "").'" />';

    echo '<span>Площадь:</span>';
    echo '<br />';
    echo '<input type="text" style="width: 100%" name="area" required value="'.($repairsArea ? $repairsArea : "").'" />';

    echo '<span>Сроки работ:</span>';
    echo '<br />';
    echo '<input type="text" style="width: 100%" name="time" required value="'.($repairsTime ? $repairsTime : "").'" />';

    echo '<span>Описание</span>';
    echo '<br />';
    echo '<textarea style="width: 100%" rows="8" name="description" required value="'.($repairsDescription ? $repairsDescription : "").'" />'

        . $repairsDescription.'</textarea>';

}

function init_repairs_metabox() {
    add_meta_box(
        'repairs-meta',
        'Описание ремонта',
        'repairs_metabox_callback',
        ['repairs'],
        'advanced',
        'high'
    );
}

add_action('add_meta_boxes', 'init_repairs_metabox');

// Save action
function repairs_save($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return;}
    if (!current_user_can('edit_post', $post_id)) {return;}

    $repairsType = $_POST['type'];
    $repairsArea = $_POST['area'];

    $repairsTime = $_POST['time'];
    $repairsDescription = $_POST['description'];

    $forHash = trim(mb_strtolower($_POST['title'].$_POST['type'].$_POST['area'], 'UTF-8'));
    $repairsHash = hash('md5', $forHash);

    update_post_meta($post_id, 'type', $repairsType);
    update_post_meta($post_id, 'area', $repairsArea);
    update_post_meta($post_id, 'time', $repairsTime);
    update_post_meta($post_id, 'description', $repairsDescription);

    $post = get_post($post_id);

}

add_action('save_post', 'repairs_save');
?>