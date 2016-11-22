<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="wrp">
    <div class="top-baner">
      <div class="wrapper">
        <noindex>
          <div style="height: 90px;" class="bnrs">
          <a href="http://vseogkh.ru/banclk/9" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/9.jpg" alt="Баннер"></a>
          </div>
        </noindex>
      </div>
    </div>
    <header id="fixedbar">
      <div class="top1">
        <div class="wrapper top-menu">
          <a class="logo-img" href="http://vseogkh.ru/77">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
          </a>
          <?php wpeHeadNav(); ?>
          <noindex><a href="http://vseogkh.ru/77/reg" class="btn reg f-rgt btn-red" rel="modal:open">Присоединяйтесь!</a></noindex>
        </div>
      </div>
      <div class="top2">
        <div class="wrapper top-search">
          <div class="region">
            <a class="regsel dis">Москва и область</a>
          </div>
          <div class="address-search">
            <input type="text" name="address" id="query-address" autocomplete="off" placeholder="Найдите свой дом, введите адрес" tabindex="1">
            <input name="btn_hs" type="submit" value="" class="btn-house-search h-gr" onclick="house_search(house);" tabindex="2">
            <div class="btn-clear"></div>
            <div class="btn-ehs-wnd"></div>
          </div>
          <div class="user-profile user-login">
            <noindex>
              <a href="http://vseogkh.ru/77/login" class="login" rel="modal:open">
                <div class="user-foto"><img src="<?php echo get_template_directory_uri(); ?>/img/user-gr.svg"></div>
                <div class="login-lnk">Войти на сайт</div>
              </a>
            </noindex>
          </div>
          <div class="ext-house-search" style="display: none;">
            <div class="btn-ehs-close"></div>
            <select name="city" class="city_sel" data-placeholder="Город" style="display: none;">
            <option value=""></option>
            <option value="1">Москва</option></select>
            <div class="chosen-container chosen-container-single" style="width: 437px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Город</span><div><b></b></div></a>
              <div class="chosen-drop">
                <div class="chosen-search"><input type="text" autocomplete="off"></div>
                <ul class="chosen-results"></ul>
              </div>
            </div>
            <select name="street" class="street_sel" data-placeholder="Улица" style="display: none;">
            <option value=""></option>
          </select>
            <div class="chosen-container chosen-container-single" style="width: 437px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Улица</span><div><b></b></div></a>
              <div class="chosen-drop">
                <div class="chosen-search"><input type="text" autocomplete="off"></div>
                <ul class="chosen-results"></ul>
              </div>
            </div>
            <select name="house" class="house_sel" data-placeholder="Дом" style="display: none;">
            <option value=""></option>
          </select>
            <div class="chosen-container chosen-container-single" style="width: 150px;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Дом</span><div><b></b></div></a>
              <div class="chosen-drop">
                <div class="chosen-search"><input type="text" autocomplete="off"></div>
                <ul class="chosen-results"></ul>
              </div>
            </div>
            <input type="hidden" name="regid" id="regid" value="/77/house">
            <input name="btn_ehs" type="submit" value="Найти дом" class="btn-ext-house-search h-gr" onclick="ext_house_search();">
          </div>
        </div>
      </div>
    </header>
    <div class="wrapper middle">
