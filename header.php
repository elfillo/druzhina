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
<div class="modal">
    <div class="form">
        <div class="close change_border"><span class="change_fill"></span><span class="change_fill"></span></div>
        <div class="title">Оставьте заявку и вам перезвонит
            менеджер нашей компании</div>
        <input type="text" placeholder="Ваше Имя" class="change_border">
        <input type="text" placeholder="Номер телефона" class="change_border">
        <textarea placeholder="Сообщение" class="change_border"></textarea>
        <input type="submit" class="change_border change_color">
    </div>
</div>
<div class="container">
    <div class="mobile">
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
    <header class="header">
        <div class="logo"></div>
        <nav class="nav">
            <?php wp_nav_menu(array('theme_location'=>'Main', 'menu_class'=>'nav_list') );?>
            <div class="social">
                <a href="https://vk.com/remontirkutsk">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--vk"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/RemontMasterD/?modal=admin_todo_tour">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--fb"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/remont_md/">
                    <svg class="social-svg-icon">
                        <use xlink:href="#icon--inst"></use>
                    </svg>
                </a>
                <a href="https://ok.ru/group/53902393147527">
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
                <div class="btn btn--fill btn--white btn--big change_border change_fill">
                    ЗАКАЗАТЬ СМЕТУ
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="topBlock">
            <div class="topBlock__img">
                <img src="<?php echo get_template_directory_uri() ?>/img/topBlock.png" alt="top">
            </div>
            <div class="topBlock__text">
                При заказе комплексного ремонта
                БЕСПЛАТНЫЙ ДЕМОНТАЖ
            </div>
        </div>
        <div class="services">
            <div class="service">
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/services/service_1.png" alt="service">
                </div>
                <div class="service__text">
                    <div class="title">
                        Профессионально демонтируем старый ремонт
                    </div>
                    <p>
                        Специалисты аккуратно и главное своевременно демонтируют из вашей квартиры или офиса всё лишнее. Почему нужно обращаться к профессионалам? Да потому что, шуметь можно только в строго отведенные часы, мусор вывозим самостоятельно, так что ваши соседи не будут иметь кучу притензий к вашему ремонта, когда вы его еще даже не начали!
                    </p>
                </div>
            </div>
            <div class="service">
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/services/service_2.png" alt="service">
                </div>
                <div class="service__text">
                    <div class="title">
                        Профессионально демонтируем старый ремонт
                    </div>
                    <p>
                        Специалисты аккуратно и главное своевременно демонтируют из вашей квартиры или офиса всё лишнее. Почему нужно обращаться к профессионалам? Да потому что, шуметь можно только в строго отведенные часы, мусор вывозим самостоятельно, так что ваши соседи не будут иметь кучу притензий к вашему ремонта, когда вы его еще даже не начали!
                    </p>
                </div>
            </div>
            <div class="service">
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/services/service_3.png" alt="service">
                </div>
                <div class="service__text">
                    <div class="title">
                        Профессионально демонтируем старый ремонт
                    </div>
                    <p>
                        Специалисты аккуратно и главное своевременно демонтируют из вашей квартиры или офиса всё лишнее. Почему нужно обращаться к профессионалам? Да потому что, шуметь можно только в строго отведенные часы, мусор вывозим самостоятельно, так что ваши соседи не будут иметь кучу притензий к вашему ремонта, когда вы его еще даже не начали!
                    </p>
                </div>
            </div>
        </div>
        <div class="bottomBlock">
            <div class="form">
                <div class="label">Тип ремонта</div>
                <input type="text" class="change_border">
                <div class="label">Площадь</div>
                <input type="text" class="change_border">
                <div class="label">Сроки работ</div>
                <input type="text" class="change_border">
                <div class="label">Сроки работ</div>
                <textarea class="change_border"></textarea>
                <div class="buttons">
                    <div class="btn btn--small btn--black change_border">Калькулятор ремонта</div>
                    <div class="btn btn--small btn--orange change_border change_color">Хочу такой же ремонт!</div>
                </div>
            </div>
            <div class="slider">
                <div class="title change_color">Название обьекта как правило очень длинное
                    из за указание адреса и фронта работа</div>
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/services/service_2.png" alt="service"></div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                        <div class="swiper-slide">Slide 10</div>
                    </div>
                    <!-- Add pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
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
                <!-- Swiper  end-->
            </div>
        </div>

