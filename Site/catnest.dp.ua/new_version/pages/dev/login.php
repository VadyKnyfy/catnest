<?php
require_once '../php/godlog.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CatNest - інтернет-магазин книг</title>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../styles/css/header.css" />
    <link rel="stylesheet" type="text/css" href="../styles/css/login.css" />
    <link rel="stylesheet" type="text/css" href="../styles/css/footer.css" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  </head>
  <body>
    <div id="header">
      <a class="header-box" href="../pages/new_main.php"><img src="../img/logo.png" /></a>
      <div id="menu">
        <div id="spw-menu">
          <!--<div class="spwD" id="search_feald"></div>-->
          <form onsubmit="event.preventDefault();" role="search">
            <input id="search" type="search" placeholder="Пошук..." autofocus required />
            <button type="submit">Go</button>
          </form>
          <a class="spwD" href=""><img src="../img/basket.png" /></a>
          <a class="spwD" href=""><img src="../img/signin.png" /></a>
        </div>
        <div id="nv-menu">
          <a href="" class="nav-btn">Художня література</a>
          <a href="" class="nav-btn">Освітня література</a>
          <a href="" class="nav-btn">Саморозвиток</a>
          <a href="" class="nav-btn">Дитяча</a>
          <a href="" class="nav-btn">Акції</a>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="form">
        <ul class="tabs">
          <li>
            <a href="#login" class="active">Вхід</a>
          </li>
          <li>
            <a href="#register">Зареєструватися</a>
          </li>
          <li>
            <a href="#reset">Скинути пароль</a>
          </li>
        </ul>
        <!--/#login.form-action-->
        <div id="login" class="form-action show">
          <h1>Вхід</h1>
          <p>Тест</p>
          <form>
            <ul>
              <li>
                <input type="email" placeholder="E-mail" />
              </li>
              <li>
                <input type="password" placeholder="Пароль" />
              </li>
              <li>
                <input type="submit" value="Увійти" class="button" />
              </li>
            </ul>
          </form>
        </div>
        <!--/#register.form-action-->
        <div id="register" class="form-action hide">
          <h1>Реєстрація</h1>
          <p>Тест.</p>
          <form>
            <ul>
              <li>
                <input type="text" placeholder="Прізвище" />
              </li>
              <li>
                <input type="text" placeholder="Ім'я" />
              </li>
              <li>
                <input type="email" placeholder="E-mail" />
              </li>
              <li>
                <input type="text" placeholder="Телефон" />
              </li>
              <li>
                <input type="password" placeholder="Пароль" />
              </li>
              <li>
                <input type="password" placeholder="Підтвердження пароля" />
              </li>
              <li>
                <input type="submit" value="Зареєструватися" class="button" />
              </li>
            </ul>
          </form>
        </div>
        <!--/#reset.form-action-->
        <div id="reset" class="form-action hide">
          <h1>Скидання пароля</h1>
          <p>Тест.</p>
          <form>
            <ul>
              <li>
                <input type="text" placeholder="E-mail" />
              </li>
              <li>
                <input type="submit" value="Send" class="button" />
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="footer_panel">
        <h1 class="footer_name">Інформація для покупця</h1>
        <!--<div class="footer_name"></div>-->
        <div class="footer_content">
          <ul>
            <a class="ali" href=""><li>Умови оплати і доставки</li></a>
            <a class="ali" href=""><li>Дисконтна програма</li></a>
            <a class="ali" href=""><li>Подарункові сертифікати</li></a>
            <a class="ali" href=""><li>Повернення та обмін товару</li></a>
            <a class="ali" href=""><li>Політика конфіденційності</li></a>
            <a class="ali" href=""><li>Користувацька угода</li></a>
          </ul>
        </div>
      </div>
      <div class="footer_panel">
        <h1 class="footer_name">Компанія та сайт</h1>
        <!--<div class="footer_name"></div>-->
        <div class="footer_content">
          <ul>
            <a class="ali" href=""><li>Про нас</li></a>
            <a class="ali" href=""><li>Партнери</li></a>
            <a class="ali" href=""><li>Документація</li></a>
          </ul>
        </div>
      </div>
      <div class="footer_panel">
        <div class="footer3">
          <h1 class="footer_name">Соціальні мережі</h1>
          <div id="social">
            <a class="sokiable" href="">
              <img src="../img/fb.png" />
            </a>
            <a class="sokiable" href="">
              <img src="../img/inst.png" />
            </a>
            <a class="sokiable" href="">
              <img src="../img/yt.png" />
            </a>
          </div>
        </div>
      </div>
      <div class="footer_panel">
        <h1 class="footer_name">Контакти</h1>
        <div class="footer_content">
          <div id="contact">
            <img class="contimg" src="../img/phone.png" alt="" />
            <p class="contp">+38 (044) 227-27-80</p>
          </div>
          <div id="contact">
            <img class="contimg" src="../img/mail.png" alt="" />
            <p class="contp">info@catnest.ua</p>
          </div>
        </div>
      </div>
    </div>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>
      ;(function ($) {
        // constants
        var SHOW_CLASS = 'show',
          HIDE_CLASS = 'hide',
          ACTIVE_CLASS = 'active'

        $('.tabs').on('click', 'li a', function (e) {
          e.preventDefault()
          var $tab = $(this),
            href = $tab.attr('href')

          $('.active').removeClass(ACTIVE_CLASS)
          $tab.addClass(ACTIVE_CLASS)

          $('.show').removeClass(SHOW_CLASS).addClass(HIDE_CLASS).hide()

          $(href).removeClass(HIDE_CLASS).addClass(SHOW_CLASS).hide().fadeIn(550)
        })
      })(jQuery)
    </script>
  </body>
</html>
