<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CatNest - інтернет-магазин книг</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  </body>
</html>
