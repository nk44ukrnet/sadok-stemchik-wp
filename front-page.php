<?php

/*
 *
 * Template Name: Stemchik-home-page
 *
 */

get_header();
?>

<main class="main">

    <section class="index-hero">
        <div class="index-hero__holder">
            <div class="index-hero__container">
                <div class="index-hero__top">
                    <img class="index-hero__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-index.svg" alt="logo">
                    <div class="index-hero__text">
                        <p>
                            Дитячий садок «СТЕМЧИК» – мережа ліцензованих освітніх закладів, що надають дошкільну
                            освіту на основі STEM-підходу дітям від 4 до 6 років. Це садочок можливостей, де діти
                            роблять перші кроки назустріч дорослим мріям.
                        </p>
                        <p>
                            Освітня програма базується на ексклюзивних навчальних конструкторах
                            LEGO Education та розроблених під них освітніх програмах з використанням
                            STEM- орієнтованого підходу.
                        </p>
                    </div>
                </div>
                <div class="index-hero__squares">
                    <div class="index-hero__square square">
                        <span class="square__text">наука</span>
                    </div>
                    <div class="index-hero__square square">
                        <span class="square__text">технологія</span>
                    </div>
                    <div class="index-hero__square square">
                        <span class="square__text">інженерія</span>
                    </div>
                    <div class="index-hero__square square">
                        <span class="square__text">математика</span>
                    </div>
                </div>
                <div class="index-hero__offer offer">
                    <p class="offer__text">
                        STEM-орієнтований підхід до навчання поєднує вивчення природничих наук, технологій,
                        інженерії та математики з вихованням у дітей інтересу до навчання
                        та підготовкою їх до майбутнього.
                    </p>
                    <a href="#!" class="offer__btn btn-offer" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>навчагратись</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-study">
        <div class="index-study__container">
            <h2 class="index-study__heading heading heading_light">ми навчаграємо</h2>
            <div class="index-study__holder">
                <div class="index-study__item"><span>гарномовити</span></div>
                <div class="index-study__item"><span>творчомислити</span></div>
                <div class="index-study__item"><span>вільнотворити</span></div>
                <div class="index-study__item"><span>гуртодіяти</span></div>
            </div>
            <div class="index-study__text">
                <small>з</small>
                <strong data-before="щодня">08:00</strong>
                <small>до</small>
                <strong data-after="години">19:00</strong>
                <em></em>
                <small>з</small>
                <strong data-before="дтіей">4</strong>
                <small>до</small>
                <strong data-after="років">6</strong>
            </div>
        </div>
    </section>

    <section class="index-expect yellow-bg">
        <div class="index-expect__container">
            <h2 class="index-expect__heading heading heading__dark">дитину чекає</h2>
            <div class="index-expect__holder">
                <div class="index-expect__item">
                    <h3 class="index-expect__title">навчання <br>
                        та розвиток
                    </h3>
                    <p class="index-expect__text">кожного дня цікаві заняття, створені на основі унікального
                        STEM-підходу.
                    </p>
                </div>
                <div class="index-expect__item">
                    <h3 class="index-expect__title">безпека <br>
                        та захист</h3>
                    <p class="index-expect__text">доступ до відеоспостереження у навчальному кабінеті вашого малюка.
                        Наявність безпечного місця на випадок тривоги</p>
                </div>
                <div class="index-expect__item">
                    <h3 class="index-expect__title">турбота <br> та увага</h3>
                    <p class="index-expect__text">індивідуальний підхід до кожної дитини, професійні вихователі
                        з високим рівнем емпатії</p>
                </div>
                <div class="index-expect__item">
                    <h3 class="index-expect__title">чистота <br>
                        та санітарія</h3>
                    <p class="index-expect__text">забезпечення чистоти в усіх приміщенях, дезінфекції іграшок та
                        навчальних матеріалів</p>
                </div>
            </div>
        </div>
    </section>

    <section class="index-steam">
        <div class="index-steam__container">
            <h2 class="index-steam__heading heading heading_light">STEM-заняття</h2>
            <div class="index-steam__sub-heading">
                <p class="index-steam__text">у садочку</p>
                <p class="index-steam__day"><span>пн — пт</span></p>
            </div>
            <div class="index-steam__holder">
                <div class="index-steam__item index-box">
                    <div class="index-box__title">
                        <small>для дітей:</small>
                        <strong>4-5</strong>
                        <em>років</em>
                    </div>
                    <div class="index-box__text">
                        Ейдетика та логоритміка <br>
                        Дослідження довкілля <br>
                        Пізнання STEAM світу <br>
                        Грамота <br>
                        Математика <br>
                        Творче конструювання
                    </div>
                </div>
                <div class="index-steam__item index-box">
                    <div class="index-box__title">
                        <small>для дітей:</small>
                        <strong>5-6</strong>
                        <em>років</em>
                    </div>
                    <div class="index-box__text">
                        Грамота <br>
                        Математика <br>
                        Творче конструювання <br>
                        Ейдетика та логоритміка <br>
                        Арт-простір <br>
                        Експерименти та відкриття <br>
                        Англійська мова <br>
                        Програмування у грі
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-courses yellow-bg">
        <div class="index-courses__container">
            <h2 class="index-courses__heading heading heading_dark">курси з LEGO</h2>
            <div class="index-courses__days">
                <span>сб — нд</span>
            </div>
            <div class="index-courses__holder">
                <div class="index-courses__item">
                    <div class="index-courses__abs">
                        <span>вік:</span>
                        <strong>4-6</strong>
                    </div>
                    <h3 class="index-courses__title">Творче <br> конструювання</h3>
                    <div class="index-courses__text">
                        <p>Маленькі дослідники вчаться конструювати міські будівлі, тварин, різні види транспорту за
                            показом педагога, граються своїми моделями, вивчають назви деталей та основні технічні
                            прийоми конструювання.</p>
                        <p>Діти взаємодіють з однолітками, розвивають мовлення й дрібну моторику, легко адаптуються
                            до колективу та набувають початкових уявлень про колір, величину, форму предметів
                            найближчого довкілля.</p>
                    </div>
                </div>
                <div class="index-courses__item">
                    <div class="index-courses__abs">
                        <span>вік:</span>
                        <strong>4-6</strong>
                    </div>
                    <h3 class="index-courses__title">Механіка <br> для дітей</h3>
                    <div class="index-courses__text">
                        <p>Цей курс для дітей, що проявляють цікавість у пізнанні навколишнього світу і розумінні
                            законів його існування. Учні вчяться конструювати прості механізми, які можуть побачити
                            в довкіллі, вивчають принципи їх роботи.</p>
                        <p>Діти знайомляться з різними видами рухів (обертальний, коливальний, поступальний) та
                            дізнаються про зубчасту, ремінну, черв’ячну передачі.
                        </p>
                    </div>
                </div>
                <div class="index-courses__item">
                    <div class="index-courses__abs">
                        <span>вік:</span>
                        <strong>4-6</strong>
                    </div>
                    <h3 class="index-courses__title">Академія <br> цеглинок</h3>
                    <div class="index-courses__text">
                        <p>Курс для маленьких чомучок та фантазерів, допоможе знайти відповіді на безліч дитячих
                            запитань. На учнів очікують нові відкриття та дослідження оточуючого світу разом з
                            командою супер-цеглинок.</p>
                        <p>На заняттях учні виконують завдання на розвиток уваги, пам’яті, мислення, мовлення,
                            творчих здібностей, дрібної моторики із використанням 12 цеглинок LEGO DUPLO.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
