<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="wrapper">
        <div class="content">
            <div class="content-blocks">
                <a href="">
                    <div class="logo-block">ID</div>
                </a>

                <nav class="nav">
                    <div class="nav-item is-active" id="123"><a href="">Главная</a></div>
                    <div class="nav-item"><a href="./pages/my-history.html">Моя история</a></div>
                    <div class="nav-item"><a href="./pages/project-title.html">Проекты</a></div>
                    <div class="nav-item"><a href="./pages/case.html">Кейсы</a></div>
                    <div class="nav-item"><a href="./pages/blog.html">Блог</a></div>
                    <div class="nav-item"><a href="./pages/cooperation.html">Сотрудничество</a></div>
                    <div class="nav-item"><a href="./pages/contact.html">Контакты</a></div>
                </nav>

                <div class="burger">
                    <div class="burger-menu">

                        <input id="toggle" type="checkbox">
                        <label class="toggle-button" for="toggle">
                            <span class="lines"></span>
                        </label>

                        <div class="content">
                            <div class="wrapper">
                                <div class="burger-header">
                                    <div class="logo-burger">
                                        <a href="">
                                            <div class="logo-block">ID</div>
                                        </a>
                                    </div>
                                    <div class="burger-nav">
                                        <div class="home-block">
                                            <div class="nav-block" ><a class="nav-item" href="#">Главная</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Моя история</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Проекты</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Кейсы</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Блог</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Сотрудничество</a></div>
                                            <div class="nav-block" ><a class="nav-item" href="#">Контакты</a></div>
                                            <div class="nav-block-contact" ><a class="nav-item" href="mailto:opennewtime@gmail.com">opennewtime@gmail.com</a></div>
                                            <div class="nav-block-contact" ><a class="nav-item" href="tel:+375297516178">+375 29 751 61 78</a></div>
                                            <div class="nav-block-smm" >
                                                <a href="https://www.facebook.com/ilja.davydov/" rel="external">
                                                    <img src="./images/fb.svg" alt="" class="nav-smm-icon">
                                                </a>
                                                <a href="https://www.instagram.com/ilyadavydov/" rel="external">
                                                    <img src="./images/inst.svg" alt="" class="nav-smm-icon">
                                                </a>
                                                <a href="https://t.me/ilaidavy" rel="external">
                                                    <img src="./images/tg.svg" alt="" class="nav-smm-icon">
                                                </a>
                                                <a href="https://vk.com/ildavydov" rel="external">
                                                    <img src="./images/vk.svg" alt="" class="nav-smm-icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

