<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дружина</title>
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part('parts/modal'); ?>
<div class="container">
    <div class="mobile">
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
    <header class="header">
        <a href="/">
            <div class="logo"></div>
        </a>
        <nav class="nav">
            <?php wp_nav_menu(array('theme_location'=>'Main', 'menu_class'=>'nav_list') );?>
            <div class="social">
                <a href="https://vk.com/remontirkutsk" target="_blank">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--vk"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/RemontMasterD/?modal=admin_todo_tour" target="_blank">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--fb"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/remont_md/" target="_blank">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--inst"></use>
                    </svg>
                </a>
                <a href="https://ok.ru/group/53902393147527" target="_blank">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--ok"></use>
                    </svg>
                </a>
            </div>
            <div class="call_back">
                <a href="tel:+73952711111">
                    <div class="btn btn--orange btn--big change_border change_color">
                        ЗАКАЗАТЬ РЕМОНТ В ИРКУТСКЕ<br/>
                        +7 (3952) 71-11-11
                    </div>
                </a>
                <div class="btn btn--modal btn--fill btn--white btn--big change_border change_fill">
                    ЗАКАЗАТЬ СМЕТУ
                </div>
            </div>
        </nav>
    </header>
    <div class="content">

