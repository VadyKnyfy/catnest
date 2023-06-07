<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Книжковий інтернет-магазин "CatNest"</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- Sliders -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <?php 
    include('utility/header.php');
    if(!isset($_COOKIE['cart'])){
        $expires = strtotime('+day');
       setcookie('hashcode', $hash, time()+2,592e+9, '/');
    }
  ?>

  <main>
    <!-- Новинки -->
    <div class="new-books unselectable">
      <label>Новинки</label>
      <div id="new-book-left-btn"><span class="material-icons-sharp">arrow_circle_left</span></div>
      <div class="swiper new-books-slider">
        <div class="swiper-wrapper new-books-wrapper">
            <?php
            $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
            $result = mysqli_query($connect,"SELECT Nom,img FROM `item` ORDER BY `item`.`addedDate` DESC ");
            $result = mysqli_fetch_all($result);
            for($i=0;$i<13;$i++){
            echo "
            <div class=\"swiper-slide new-book\">
            <a href=\"https://catnest.dp.ua/new_version/pages/book.php?id=".$result[$i][0]."\"><img src=\"../image/books/".$result[$i][1]."\" alt=\"new_book\" /></a>
          </div>
            ";
            }
            ?>
        </div>
      </div>
      <div id="new-book-right-btn"><span class="material-icons-sharp">arrow_circle_right</span></div>
    </div>
    <!-- Event slider -->
    <div class="events unselectable">
      <div class="swiper event-slider">
        <div class="swiper-wrapper event-wrapper">
          <div class="swiper-slide event-slide"><img src="../image/events/bersale.jpg" /></div>
          <div class="swiper-slide event-slide"><img src="../image/events/PoppyWar.png" /></div>
          <div class="swiper-slide event-slide"><img src="../image/events/GptRec.png" /></div>
          <div class="swiper-slide event-slide"><img src="../image/events/Cinema.png" /></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- Вибір читачів -->
    <div class="itempanel">
      <label>Вибір читачів</label>
      <div class="books">
          
          <?php
            $result = mysqli_query($connect,"SELECT Nom,img,name,price FROM `item` ORDER BY `item`.`rating` DESC  ");
           $result = mysqli_fetch_all($result);
        for($i=0;$i<14;$i++){
            $disconts = mysqli_query($connect,"SELECT * FROM `prom` where nom_item = ".$result[$i][0]."");
            if ($disconts->num_rows > 0) {
            echo"
            <div class=\"book-panel\">
          <div class=\"book-image\" onclick=toBookpage(".$result[$i][0].")><img src=\"../image/books/".$result[$i][1]."\" /></div>
          <div class=\"book-name\">
            <p>".$result[$i][2]."</p>
          </div>
          <div class=\"book-bottom\">
            <p class=\"discount\">".$result[$i][3]." UAH</p>
            <p class=\"price\">".mysqli_fetch_all($disconts)[0][1]." UAH</p>
            <button type=\"button\" class=\"buy-btn\" itemid=\"".$result[$i][0]."\"  onclick=addItem(".$result[$i][0].") >Купити</button>
          </div>
        </div>
            ";
            }else{
                echo"
            <div class=\"book-panel\">
           <div class=\"book-image\" onclick=toBookpage(".$result[$i][0].")><img src=\"../image/books/".$result[$i][1]."\" /></div>
          <div class=\"book-name\">
            <p title=\"".$result[$i][2]."\">".$result[$i][2]."</p>
          </div>
          <div class=\"book-bottom\">
            <p class=\"price\">".$result[$i][3]." UAH</p>
           <button type=\"button\" class=\"buy-btn\"  itemid=\"".$result[$i][0]."\" onclick=addItem(".$result[$i][0].") >Купити</button>
          </div>
        </div>
            ";
            }
            }
            $connect->close();
          ?>
      </div>
      <div id="morebut">
        <button id="more_btn" onclick="window.location.href= 'https://catnest.dp.ua/new_version/pages/booklist.php?type=allbooks'">Більше</button>
      </div>
    </div>
    <!---->
    </div>
  </main>

  <?php 
    include('utility/footer.php')
  ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="../scripts/main_slider.js"></script>
</body>

</html>