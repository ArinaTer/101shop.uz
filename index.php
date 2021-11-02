<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Alhayatmed - Неврослим - Табиийликка биз билан еришинг!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="НЕВРОСЛИМ - асаб касалликларидан халос бўлиш учун самарали восита" />
    <meta name="keywords" content="nevroslim, неврослим" />
    <meta name="geo.placename" content="Ташкент, Узбекистан">
    <!-- Информация об авторе -->
    <link rel="me" href="https://alhayatmed.uz" type="text/html">
    <link rel="shortlink" href="https://alhayatmed.uz/" />
    <link rel="canonical" href="https://alhayatmed.uz/" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#fff" />
    <!-- Open Graph -->
    <meta name="og:title" content="Alhayatmed - Неврослим - Табиийликка биз билан еришинг!">
    <meta name="og:description" content="НЕВРОСЛИМ - асаб касалликларидан халос бўлиш учун самарали восита">
    <meta name="og:url" content="https://alhayatmed.uz/">
    <meta name="og:image" content="https://alhayatmed.uz/img/og.jpg">
    <meta name="og:site_name" content="Alhayatmed - Неврослим - Табиийликка биз билан еришинг!">
    <meta name="og:locale" content="uz_UZ">
    <meta name="og:type" content="website">
    <!-- ios -->
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/img/favicon//safari-pinned-tab.svg" color="#ffcd79">
    <meta name="apple-mobile-web-app-title" content="AlHayatMed">
    <meta name="application-name" content="AlHayatMed">
    <!-- style -->
    <link rel="stylesheet" media="all" href="<?= get_template_directory_uri(); ?>/css/style.css" />
</head>
<body>

    <!-- title -->
    <div>
        <h1 class="pagetitle">Alhayatmed - Неврослим - Табиийликка биз билан еришинг!</h1>
    </div>

    <main>

        <!-- header -->
        <header>
            <a href="#" class="logo">
                <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="alhayatmed-logo">
            </a>
            <div class="desc">
                <p><?php the_field( 'tavsif','option' ); ?></p>
            </div>
        </header>

        <!-- countdown top -->
        <div class="countdown">
            <div class="text">
                <img src="<?= get_template_directory_uri(); ?>/img/clock_icon.png" alt="">
                <p><?php the_field( 'aksiya_sozi','option' ); ?></p>
            </div>
            <div class="timer">
                <div class="timer_item">
                    <div class="count">00</div>
                    <div class="text">кун</div>
                </div>
                <div class="timer_item">
                    <div class="count hours"><span>2</span><span>1</span></div>
                    <div class="text">соат</div>
                </div>
                <div class="timer_item">
                    <div class="count minutes"><span>1</span><span>5</span></div>
                    <div class="text">дакика</div>
                </div>
                <div class="timer_item">
                    <div class="count seconds"><span>0</span><span>6</span></div>
                    <div class="text">сония</div>
                </div>
            </div>
        </div>

        <!-- баннер -->
        <section class="hero">
            <div class="container">
                
                <!-- content -->
                <div class="hero__content">
                    <div class="hero__title"><?php the_field( 'hero_title','option' ); ?></div>
                    <div class="hero__img">
                        <?php $heroImg = get_field( 'hero_img','option' ); ?>
                        <img src="<?= $heroImg['url']; ?>" alt="">
                    </div>
                    <img class="hero__bonus" src="<?= get_template_directory_uri(); ?>/img/bonus.png" alt="">
                </div>
            
            </div>
            <!-- end content -->
        </section>

        <!-- преимущества -->
        <section class="features">
            <ul>
                <li><?php the_field( 'fea_1','option' ); ?></li>
                <li><?php the_field( 'fea_2','option' ); ?></li>
                <li><?php the_field( 'fea_3','option' ); ?></li>
            </ul>
        </section>

        <!-- sale -->
        <section class="sale">
            <div class="price">
                <div class="price__title"><?php the_field( 'price_title','option' ); ?></div>
                <div class="price__num"><?php the_field( 'price','option' ); ?></div>
            </div>
            <marquee>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
            </marquee>
            <div class="container">
                <div class="stock">
                    <div class="plus">
                        <?php $img = get_field( 'bonus_rasmi','option' ); ?>
                        <img src="<?= $img['url']; ?>" alt="">
                        <div class="plus__num">+</div>
                        <img src="<?= $img['url']; ?>" alt="">
                    </div>
                    <div class="stock__price">
                        <div class="stock__price--new"><?php the_field( 'sale_price','option' ); ?></div>
                        <div class="stock__price--last"><?php the_field( 'old_price','option' ); ?></div>
                    </div>
                    <div class="stock__countdown">
                        <div class="stock__countdown--title">
                            <p><?php the_field( 'stock_title','option' ); ?></p>
                        </div>
                        <div class="timer">
                            <div class="timer_item">
                                <div class="count days"><span>0</span><span>0</span></div>
                                <div class="text">кун</div>
                            </div>
                            <div class="timer_item">
                                <div class="count hours"><span>1</span><span>7</span></div>
                                <div class="text">соат</div>
                            </div>
                            <div class="timer_item">
                                <div class="count minutes"><span>4</span><span>2</span></div>
                                <div class="text">дакика</div>
                            </div>
                            <div class="timer_item">
                                <div class="count seconds"><span>3</span><span>1</span></div>
                                <div class="text">сония</div>
                            </div>
                        </div>
                    </div>
                    <a href="#orderblock" class="button"><?php the_field( 'knopkadagi_tekst','option' ); ?></a>
                </div>
            </div>
        </section>

        <!-- info -->
        <section class="info">
            <div class="container">
                <div class="section__title"><?php the_field( 'bartaraf_title','option' ); ?></div>
                <ul>
                    <?php if (have_rows('bartaraf_list','option')) : while (have_rows('bartaraf_list','option')) : the_row(); ?>
                        <li><?php the_sub_field( 'bartaraf_text','option' ); ?></li>
                    <?php endwhile; endif; ?>
                </ul>
                <a href="#orderblock" class="button"><?php the_field( 'bartaraf_knopkadagi_tekst','option' ); ?></a>
            </div>
        </section>

        <!-- video -->
        <section class="video">
            <div class="container">
                <div class="section__title"><?php the_field( 'video_title','option' ); ?></div>
                <div class="video_block">
                    <div class="youtube" id="<?php the_field( 'video_id','option' ); ?>"></div>
                </div>
            </div>
        </section>

        <!-- structure -->
        <section class="struc">
            <img class="list-1" src="<?= get_template_directory_uri(); ?>/img/list-1.png" alt="">
            <img class="list-2" src="<?= get_template_directory_uri(); ?>/img/list-2.png" alt="">
            <div class="container">
                <div class="section__title"><?php the_field( 'tarkib_sarlavhasi','option' ); ?></div>
                <ul>
                    <li>
                        <?php the_field( 'tarkibi_1','option' ); ?>
                    </li>
                    <li>
                        <?php the_field( 'tarkibi_2','option' ); ?> 
                    </li>
                </ul>
            </div>
        </section>

        <!-- reviews -->
        <section class="reviews">
            
        </section>

        <!-- form -->
        <section class="orderblock" id="orderblock">
            <marquee>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span> 
                <span><?php the_field( 'aksiya_2','option' ); ?></span><span><?php the_field( 'aksiya_2','option' ); ?></span>
            </marquee>
            <div class="container">
                <div class="stock">
                    <div class="plus">
                        <?php $img = get_field( 'bonus_rasmi','option' ); ?>
                        <img src="<?= $img['url']; ?>" alt="">
                        <div class="plus__num">+</div>
                        <img src="<?= $img['url']; ?>" alt="">
                    </div>
                    <div class="stock__price">
                        <div class="stock__price--new"><?php the_field( 'sale_price','option' ); ?></div>
                        <div class="stock__price--last"><?php the_field( 'old_price','option' ); ?></div>
                    </div>
                    <div class="stock__countdown">
                        <div class="stock__countdown--title">
                            <p><?php the_field( 'stock_title','option' ); ?></p>
                        </div>
                        <div class="timer">
                            <div class="timer_item">
                                <div class="count days"><span>0</span><span>0</span></div>
                                <div class="text">кун</div>
                            </div>
                            <div class="timer_item">
                                <div class="count hours"><span>1</span><span>7</span></div>
                                <div class="text">соат</div>
                            </div>
                            <div class="timer_item">
                                <div class="count minutes"><span>4</span><span>2</span></div>
                                <div class="text">дакика</div>
                            </div>
                            <div class="timer_item">
                                <div class="count seconds"><span>3</span><span>1</span></div>
                                <div class="text">сония</div>
                            </div>
                        </div>
                    </div>
                    <form id="1" class="form" method="POST" autocomplete="off" id="1">
                        <div class="form__block">
                            <input class="input" type="text" name="name" placeholder="Исмингиз" required />
                            <input class="input" type="tel" name="phone" placeholder="Телефон ракамингиз" required />
                            <select class="input" name="country">
                            <?php if (have_rows('shaharlar','option')) : while (have_rows('shaharlar','option')) : the_row(); ?>
                                <option value="<?php the_sub_field( 'shahar_nomi','option' ); ?>"><?php the_sub_field( 'shahar_nomi','option' ); ?></option>
                            <?php endwhile; endif; ?>
                                
                            </select>
                            <button class="button" type="submit"><?php the_field( 'knopkadagi_tekst','option' ); ?> <span></span></button>
                        </div>
                        <!-- success -->
                        <div class="form__success">
                            <h3>Буюртмангиз кабул килинди!</h3>
                            <p>Муттахасисларимиз сиз билан тез орада боғланишади. Сабр учун рахмат!</p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer><p>&copy; <?php the_field( 'copyright','option' ); ?></p><a href="https://okeyagency.uz" target="_blank">Разработано в OKEY</a></footer>

    </main>

    <!-- js -->
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>