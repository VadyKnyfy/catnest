<?php
require_once '../php/connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CatNest - інтернет-магазин книг</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
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
    <div id="content">
      <div id="newitempanel">
        <!--Новинки-->
        <div id="novH">
          <label class="namepanel">Новинки</label>
        </div>
        <div id="novB">
          <div class="newpnl_btn">
            <button class="left-button"><span>&#9664;</span></button>
          </div>
          <div class="swiper newSwiper">
            <div class="swiper-wrapper">
            <?php
             $items = mysqli_query($connect,"SELECT `name`,`img`,`Nom` FROM item ORDER BY addedDate DESC LIMIT 12 ;");
            $items = mysqli_fetch_all($items);
            for($i=0;$i<= 11;$i++){
                $itmimg = "../itmimg/".$items[$i][1];
                $name= $items[$i][0];
                if(!file_exists($itmimg)) $itmimg="../itmimg/notexist.jpg";
                echo('
                <div class="swiper-slide cout">
                <img src="'.$itmimg.'" alt="'.$name.'" class="image" />
              </div>
                ');
            }

?>
            </div>
          </div>
          <div class="newpnl_btn">
            <button class="right-button"><span>&#9654;</span></button>
          </div>
        </div>
      </div>
      <div id="event-panel">
        <swiper-container class="eventSwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30" loop="true" autoplay-delay="10000" autoplay-disable-on-interaction="false">
          <swiper-slide class="event-slide"><img src="https://miro.medium.com/max/1400/1*BR2RiTRoYor9xSrzEgxLWQ.jpeg" /></swiper-slide>
          <swiper-slide class="event-slide"><img src="https://fireseo.ru/wp-content/uploads/2022/06/programming.jpeg" /></swiper-slide>
          <swiper-slide class="event-slide"><img src="https://img.freepik.com/free-vector/neon-lights-background-theme_52683-44625.jpg?w=2000" /></swiper-slide>
          <swiper-slide class="event-slide"><img src="https://img.freepik.com/premium-vector/minimalist-shape-background_112769-210.jpg" /></swiper-slide>
        </swiper-container>
      </div>
      <!--Дофіга книжок-->
      <div id="itempanel">
          <div style="display:flex;">
        <label class="namepanel" id="nameitempanel">Вибір читачів</label>
        <div id="border_break"></div>
         </div>
         <?php
            //get item from DB
            $items = mysqli_query($connect,"SELECT `name`,`img`,`price`,`rating`,'Nom' FROM `item` ORDER BY `item`.`rating` DESC ");
            $items = mysqli_fetch_all($items);
            ////////////////////////////////////////////////////////

            $jt=0; // variable for correct output of item "div"
            for($i=1;$i<= 3;$i++){  // loop for bace line
                echo(' <div id="namecontent">');
                for($j=$jt;$j<6+$jt;$j++){ //loop for show item
                    $itmname = $items[$j][0]; // item name
                    $itmimg = "../itmimg/".$items[$j][1];  //item image for correct path "../itmimg/@imagename"
                    $itmcost= $items[$j][2]; // item price
                    $itmrat = $items[$j][3]; //item rating
                    //check exists img in path
                     if(!file_exists($itmimg)) $itmimg="../itmimg/notexist.jpg";

                    ////////////////////////////////////////////
                    //show item "div"
                    echo('<div id="name_contblock">
                             <img src='.$itmimg.' id="name_img">
                            <p id="bookname">'.$itmname.'</p>
                            <div id="price-but">
                                <p id="price">'.$itmcost.' UAH</p>
                                <button class="bybtn">Купити</button>
                            </div>
                        </div> ');
                    //////////////////////////////////////////////
                }
                $jt+=6; // change varible for next base line
                echo('</div>');
            }
            ?>
        <div id="btn_itm_field">
          <button class="more_btn" onclick="document.location='../pages/mytest.php'">More</button>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="../scripts/new_swiper.js"></script>
  </body>
</html>
