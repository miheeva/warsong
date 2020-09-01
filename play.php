<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Начать играть</title>
    <link rel="shortcut icon" href="templates/phrp/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="templates/phrp/css/style.css">
    <link rel="stylesheet" type="text/css" href="templates/phrp/css/adaptive.css">
</head>
<body id="main_anchor" class="how-to-start">


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
            </div>
        </div>
        <a href='play.html#' class='header-nav-trigger'>
            <span class='header-nav-trigger-line'></span>
            <span class='header-nav-trigger-line'></span>
            <span class='header-nav-trigger-line'></span>
        </a>
    </div>
</header>

<div class="index_row">
    <div class="index_row_box">
        <section class="section_frst_row">
            <div class="hts_box">
                <div class="hts_right_side">
                    <img src="templates/phrp/images/mans/kak_nachat_igrat.png" alt="">
                </div>
                <div class="hts_left_side">
                    <div class="hts_tittle">
                        <span>1</span>
                        <h1 class="h1_inrow">просто следуйте<br> инструкциям ниже</h1>
                    </div>
                    <div class="path_download">
                        <div class="path_download_left">
                            <div class="path_download_box">
                                <div class="hts_download_box">
                                    <h3>СКАЧАТЬ GTA V</h3>
                                    <p>Скачайте и установите лицензию GTA V (Steam или Social Club). Для входа на наши сервера нужна только лицензионная игра.</p>
                                </div>
                                <div class="hts_download_box">
                                    <h3>СКАЧАТЬ RAGEMP</h3>
                                    <p>Скачайте и установите мультиплеер RAGEMP с официального сайта.</p>
                                </div>
								<div class="hts_download_box">
                                    <h3>ЗАЙТИ НА СЕРВЕР</h3>
                                    <p>Войти на наш сервер, на котором будете развивать своего персонажа.</p>
                                </div>
                            </div>
                        </div>
                        <div class="path_download_center_line_box">
                            <img src="templates/phrp/images/ice_screenshot_20181211-235945.png" alt="">
                            <div class="path_download_center_line"></div>
                        </div>
                        <div class="path_download_right">
                            <div class="hts_download_box">
                                <h3>ЗАЙТИ В НАСТРОЙКИ</h3>
                                <p>В настройках лаунчера, выберите имя персонажа и нужные вам настройки.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="download-button">
                        <a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/" target='_blank'>GTA V Steam</a>
                        <a href="https://rage.mp/" target='_blank' class="download-button-muted">RAGE MP</a>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="section_scnd_row section_scnd_row_hts">
            <div class="hts_tittle">
                <span>2</span>
                <h1 class="h1_inrow">осталось зайти<br />на игровой сервер</h1>
            </div>
            <div class="server_left">
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
                                    <h3>IP: 185.71.65.210:22005</h3>
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
            <div class="hts_left_side"></div>
            <div class="hts_right_side"></div>
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
                    <div class="anchor_box">
                        <a href="play.html#main_anchor" class="anchor_top"><span class="anchor""></span></a>
                        <span>вверх</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="templates/phrp/js/jquery.min.js"></script>
<script src="templates/phrp/js/app.js"></script>

</body>
</html>