<?php
/*
* Template name: Stemchik-sadok-nav-page
*/
get_header();
?>

<section class="bg_light">
    <div class="__container">
        <h1 class="heading mt-3 text-md-start text-sm-center ">Садочок</h1>
        <div class="menu">
            <div class="menu__holder">
                <a href=/age-group/" class="menu__item menu__link"><span class="menu__text">Вікові групи</span></a>
            </div>
            <div class="menu__holder">
                <div class="menu__item">
                    <a href="/edu-program/" class="menu__link menu__text"> Освітня програма </a>
                    <ul>
                        <li><a href="/sadok-schedule/" class="menu__link menu__text">Приклад розкладу</a></li>
                        <li><a href="/sadok-day/" class="menu__link menu__text">Орієнтовний розпорядок дня</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu__holder">
                <a href="/food/" class="menu__item menu__link">Організація харчування</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
