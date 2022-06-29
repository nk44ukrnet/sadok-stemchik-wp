<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stemchik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G0GQE6VM43"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-G0GQE6VM43');
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
//header class in case of front-page
$headerClass = '';
if(is_front_page()) {
    $headerClass = ' header__logo_index ';
}
?>
<div id="page" class="site">
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <a href="/" class="header__logo <?php echo $headerClass; ?>>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
                <div class="header__section">
                    <a href="tel:+380503766285" class="header__tel"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.svg" alt="phone">
                        <span>+380 (50) 376 62 85</span></a>
                    <nav class="header__menu">
                        <a href="#!" class="header__hamburger"></a>
                        <ul class="header__ul">
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/about-icon.svg" alt="icon" class="header__icon"><a
                                        href="#!" class="header__link"> про нас</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/news-icon.svg" alt="icon" class="header__icon"><a href="#!"
                                                                                                                   class="header__link">
                                    новини</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/garden-icon.svg" alt="icon" class="header__icon"><a
                                        href="#!" class="header__link"> садочок</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/dev-center-icon.svg" alt="icon" class="header__icon"><a
                                        href="#!" class="header__link"> центр розвитку</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/faq-icon.svg" alt="icon" class="header__icon"><a href="#!"
                                                                                                                  class="header__link">
                                    відповіді на запитання</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.svg" alt="icon" class="header__icon"><a
                                        href="#!" class="header__link"> локаціїї та контакти</a></li>
                            <li class="header__li"><img src="<?php echo get_template_directory_uri(); ?>/img/team-icon.svg" alt="icon" class="header__icon"><a href="#!"
                                                                                                                   class="header__link">
                                    команда</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>