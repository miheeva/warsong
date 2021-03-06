<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="templates/phrp/images/favicon.ico">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="templates/phrp/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
</head>

<body id="main_anchor" class="home">


<header class='header'>
    <div class='header-container'>
        <div class='header-logo'>
            <a href='/'><img src='templates/phrp/images/logo.png' alt=''></a>
        </div>
        <div class='header-right'>
            <div class='header-menu'>
                <nav class='header-nav'>
                    <div class='header-nav-close'></div>
                    <ul class='header-nav-list'>
                        <li><a href='/'>Главная</a></li>
						<li><a href='/play.php'>Начать играть</a></li>
                        <li><a href='donate.html'>Донат</a></li>
                    </ul>
                </nav>
                
        <div class='header-login'>
        </div>
    
            </div>
        </div>
        <a href='/#' class='header-nav-trigger'>
            <span class='header-nav-trigger-line'></span>
            <span class='header-nav-trigger-line'></span>
            <span class='header-nav-trigger-line'></span>
        </a>
    </div>
</header>

<div class="news-list"></div>

<div class="index_row">
    <div class="index_row_box">
        <section class="section_frst_row">
            <div class="section_left_row">
                <img src="templates/phrp/images/mans/glavnaya.png" alt="default">
            </div>
            <div class="section_right_row home-right-row-center">
                <div class="description">
                    <p>WarSong RolePlay — это проект многопользовательской игры Grand Theft Auto V.</p>
                    <p>Мы постарались объединить лучшие элементы ролевой игры с новыми идеями и широкими возможностями, которых вам ещё не приходилось видеть!</p>
                </div>
                <div class="butt_social">
                    <a href="play.php" class="start-to-play">Начать играть</a>
                    <div class="soc_img">
                        <a target="_blank" href="#"><i class="fab fa-vk"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_scnd_row">
            <div class="section_scnd_row_content">
                <div class="section_scnd_left_row">
                    <h2 class="title-decoration">
                        <span>Сервер</span>
                    </h2>
                    <ul class="servers_list">
                    <?php
                        $ip = "185.71.65.210:22005";

                        $c_init = curl_init('https://cdn.rage.mp/master/');
                        curl_setopt($c_init, CURLOPT_RETURNTRANSFER, true);

                        $source = curl_exec($c_init);
                        curl_close( $c_init );
                        $source = json_decode($source , true);

                        foreach($source as $key => $value) {
                            if ($ip == $key) {
                                
                                
                         
                        ?>
                        <li>
                            <div class="server_box" data-server-id="1">
                                <div class="server_box_left_side">
                                    <span><?php echo $value['players'].'/'.$value['maxplayers'];?></span>
                                </div>
                                <div class="server_box_center_side">
                                    <p>WarSong | RAGE MP</p>
                                    <h3>IP: 185.71.65.210:22005</7h3>
                                    <div class="server_box_members_percent">
                                        <span style="width: <?php echo $value['players'] / $value['maxplayers'] * 100?>%"></span>

                                    </div>
                                </div>
                                <div class="server_box_right_side">
                                    <a href="/#" class="copy-server-ip" data-server-ip="185.71.65.210:22005">
                                        <img src="templates/phrp/images/svg/link-symbol-of-two-chains-links-linked-grey.svg" alt="прикрепить">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                }
                        ?>
                    </ul>
                </div>
                <div class="section_scnd_right_row home-news">
                    <h2 class="title-decoration">
                        <span>Новости</span>
                    </h2>
                    <div class="new_js_article">
                        <div class="new_js_article_nav">
                            <!-- VK Widget -->
                            <div id="vk_groups"></div>
                            <script type="text/javascript">
                            VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: "250", width: "300", no_cover: 1, color1: '333', color2: 'FFF', color3: '99CC33'}, 196474966);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="index_thrd_row">
            <div class="thrd_row_left_side">
                <h1 class="h1_inrow title-decoration">
                    <span>СООБЩЕСТВА</span>
                </h1>
                <ul class="thrd_row_social">
                    <li>
                        <div class="social_list">
                            <div class="social_list_img">
                                <img src="templates/phrp/images/mans/vk.png">
                            </div>
                            <div class="social_list_info">
                                <div class="social_list_info_box">7
                                    <h3>VK</h3>
                                    <p id='count_official'>Официальная группа Вконтакте</p>
                                    <a href="https://vk.com/5warsongrp" target="_blank">Подписаться</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="social_list">
                            <div class="social_list_img">
                                <img src="templates/phrp/images/mans/dis.png" class="soc_img_scnd">
                            </div>
                            <div class="social_list_info">
                                <div class="social_list_info_box">
                                    <h3>Discord</h3>
                                    <p id="count_private">Наш канал в дискорде</p>
                                    <a href="https://discord.gg/8wYuGfT" target="_blank">Подписаться</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="thrd_row_right_side home-start-to-play">
                <h1 class="h1_inrow title-decoration">
                    <span>Как начать играть</span>
                </h1>
                <div class="thrd_row_right_side_row">
                    <div class="thrd_row_right_side_border_box">
                        <div class="thrd_row_right_side_border">
                            <img src="templates/phrp/images/ice_screenshot_20181211-235945.png" alt="">
                        </div>
                    </div>
                    <div class="thrd_row_right_side_list">
                        <ul>
                            <li>
                                <div class="thrd_row_dowload">
                                    <h3>СКАЧАТЬ GTA V</h3>
                                    <p>Скачайте и установите лицензию GTA V (Steam или Social Club). Для входа на наши сервера нужна только лицензионная игра.</p>
                                </div>
                            </li>
                            <li>
                                <div class="thrd_row_dowload">
                                    <h3>СКАЧАТЬ RAGEMP</h3>
                                    <p>Скачайте и установите мультиплеер RAGEMP с официального сайта.</p>
                                </div>
                            </li>
                            <li>
                                <div class="thrd_row_dowload">
                                    <h3>ВЫБРАТЬ СЕРВЕР</h3>
                                    <p>Выберите один из наших серверов, на котором будете развивать своего персонажа.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_footer">
            <div class="footer_row">
                <div class="footer_left_row">
                    <div class="top_menu_row">
                        <span><a href="/">Главная</a></span>
                        <span><a href="play.php">Начать играть</a></span>
						<span><a href="donate.html">Донат</a></span>
                    </div>
                    <div class="footer_bottom_row">
                        <div class="footer-bottom-logo criminal">
                            <img src="templates/phrp/images/logo-bw.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer_right_row">

                </div>
            </div>
        </section>
    </div>
</div>
<script src="templates/phrp/js/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="templates/phrp/js/app.js"></script>
<script>load_info();</script>
</body>
</html>
