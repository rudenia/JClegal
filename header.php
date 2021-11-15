<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JClegal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <!-- Подключение svg -->
    <div class="svg-placeholder" style="display: none;"></div>
    <script>document.querySelector('.svg-placeholder').innerHTML = SVG_SPRITE;</script>
</head>

<body <?php body_class() ?>>
<?php
    $class_header     = '';
    $style_for_header = '';
    if (is_page_template('template-home.php')) {
        $class_header = 'header-home';
        $style_for_header = 'style="background: #fff url('.get_template_directory_uri().'/assets/img/bg.jpg) no-repeat center top/ cover;"';
    } else {
        $class_header     = 'header-inner';
        $style_for_header = '';
    }
?>

<!-- Header -->
    <header class="header <?php echo esc_attr($class_header);?>" <?php echo $style_for_header;?> >

        <div class="heading">
            <ul class="social">
                <li class="social__item">
                    <span>Vk</span>
                    <a class="social__icon social__icon_vk" href="#">
                        <svg  width="21" height="18">
                            <use xlink:href="#vk"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <span>Fb</span>
                    <a class="social__icon social__icon_fb" href="#">
                        <svg  width="14" height="17">
                            <use xlink:href="#facebook"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <span>Tw</span>
                    <a class="social__icon social__icon_tw" href="#">
                        <svg  width="18" height="15">
                            <use xlink:href="#twitter"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a class="social__icon social__icon_inst" href="#">
                        <svg   width="16" height="16">
                            <use xlink:href="#instagram"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="heading__block">
                <a href="cart.html" class="heading__bag">
                    <svg width="17" height="20">
                        <use xlink:href="#bag"/>
                    </svg>
                </a>
                <div class="language">
                    <ul>
                        <li class="lang-item active">
                            <a href="#">Ru</a>
                        </li>
                        <li class="lang-item">
                            <a href="#">En</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="control">
                <a href="#enter" class="control__enter popup-link-1">
                    <svg class="control__icon" width="19" height="17">
                        <use xlink:href="#login"/>
                    </svg>
                    Вход
                </a>
                <a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
                    <svg class="control__icon" width="16" height="16">
                        <use xlink:href="#use/>
                            </svg>
                            Личный кабинет
                        </a>
                        <a href="#reg" class="control__reg noise popup-link-2">Регистрация</a>
            </div>
        </div>

        <div class="navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo noise">
                <p class="logo__icon"><?php bloginfo( 'name' ); ?></p>
                <p class="logo__desc"><?php bloginfo( 'description' ); ?></p>
            </a>

            <div class="navigation__wrap">
                <a href="#call" class="call popup-link-1">
                    <div class="call__icon btn">
                        <svg width="22" height="22">
                            <use xlink:href="#phone-solid"/>
                        </svg>
                    </div>
                    <div class="call__block">
                        <p class="call__text">Заказать звонок</p>
                        <p class="call__number">+ 7 (495) 567-28-15</p>
                    </div>
                </a>

                <!-- Main menu -->
                <nav id="nav-wrap" class="menu">
                    <a class="mobile-btn" href="#nav-wrap" title="<?php esc_html_e('Show navigation','jclegal') ?>"><?php esc_html_e('Show navigation','jclegal') ?> </a>
                    <a class="mobile-btn" href="#" title="<?php esc_html_e('Hide navigation','jclegal') ?>"><?php esc_html_e('Hide navigation','jclegal') ?></a>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-header',
                            'menu_id'        => 'nav',
                            'menu_class'     => 'menu__list',
                            'container'        => ''
                        )
                    );
                    ?>
                </nav><!-- End main menu -->

                <div class="widget widget_search">
                    <?php echo get_search_form(); ?>
                </div>
            </div>

        </div>
        <?php if(is_page_template('template-home.php')) { ?>
        <div class="offer">
            <div class="wrapper">
                <div class="offer__slider">
                    <div class="offer__slide">
                        <p class="offer__text">Вы хотите изменить мир.</p>
                        <h1 class="offer__title">Мы хотим вам помочь.</h1>
                        <p class="offer__descr">Мы современная Юридическая фирма,<br> помогающая перспективным стартапам, фрилансерам и малому бизнесу.</p>
                        <a href=contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
                    </div>
                    <div class="offer__slide">
                        <p class="offer__text">Вы хотите изменить мир.</p>
                        <h1 class="offer__title">Мы хотим вам помочь.</h1>
                        <p class="offer__descr">Юристы JC проведут вас и вашу компанию через многочисленные юридические проблемы, стоящие перед компаниями Москвы сегодня.</p>
                        <a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
                    </div>
                    <div class="offer__slide">
                        <p class="offer__text">Вы хотите изменить мир.</p>
                        <h1 class="offer__title">Мы хотим вам помочь.</h1>
                        <p class="offer__descr">Мы предпочитаем обсуждать проблемы и решения, а не участвовать в теоретических юридических дебатах, которые никогда не заканчиваются.</p>
                        <a href="contacts.html#callback" class="offer__btn btn">Бесплатная консультация</a>
                    </div>
                </div>

                <a class="offer__video popup-with-zoom-anim popup-youtube" href="https://www.youtube.com/watch?v=FWxRRbnwRf0" rel="nofollow" >
                    <p class="offer__time">1:30</p>
                    <div class="offer__play"></div>
                    <p class="offer__watch">Посмотрите короткое видео о нашей компании</p>
                </a>
            </div>
        </div>
        <?php } else { ?>
            <div class="caption">
                <div class="wrapper">
                    <h1 class="caption__title">Заголовок страницы</h1>
                    <div class="caption__bc">
						<span>
							<a href="index.html">Главная</a>
						</span>
                        <span class="sep">/</span>
                        <span class="current">Контакты</span>
                    </div>
                </div>
            </div>
        <?php } ?>

    </header><!-- End header -->
