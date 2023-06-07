<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/book.css" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title><?php echo $name; ?></title>
</head>

<body>
  <?php 
    include('utility/header.php');
    function getname($connect,$table,$id){
      $sql = "SELECT name FROM `".$table."` WHERE `num` = ".$id."";
      return mysqli_fetch_all(mysqli_query($connect,$sql))[0][0];
    }
  $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
  $sql = "SELECT * FROM `item` WHERE `Nom` = ".$_GET["id"].""; 
  $result = mysqli_query($connect,$sql);
  $result = mysqli_fetch_all($result)[0];
  $name = $result[1];
  $img = $result[4];
  $edition = getname($connect,"edition",$result[3]);
  $type = getname($connect,"type",$result[2]);
  $price = $result[6];
  $author = getname($connect,"author",$result[5]);
  $language = getname($connect,"language",$result[7]);
  $pages = $result[9];
  $age= $result[10];
  $cover = getname($connect,"cover",$result[11]);
  $year = $result[13];
  $about = $result[12];
  ?>
   <script>
  $(document).ready(function() {
  intial(<?php echo($_GET["id"])?>);
       $(".buy-book").on("mouseleave", function() {
          if(cartO[<?php echo($_GET['id'])?>]!==undefined){
        $(".buy-book").html("У кошику");
    }
        // Perform any desired actions when the mouse is over the object
      });
       $(".buy-book").on("mouseenter", function() {
           if(cartO[<?php echo($_GET['id']) ?>]!==undefined){
        $(".buy-book").html("Видалити");
    }
        // Perform any desired actions when the mouse is over the object
      });
  });
  </script>
  <script>
    var pageTitle = "Книга «<?php echo $name; ?>» - <?php echo $author; ?> | Книжковий інтернет-магазин \"CatNest\"";
    document.title = pageTitle;
  </script>
  <main>
    <div class="img-book"><img <?php echo "src=\"../image/books/".$img."\""?>></div>
    <div class="info-book">
      <div class="name-book">
        <p><?php echo $name ?></p>
      </div>
      <div class="test">

        <div class="features">
          <p class="header">Характеристики</p>
          <div class="params">
            <div class="param">
              <p>Видавництво </p>
              <p><?php echo $edition ?></p>
            </div>
            <div class="param">
              <p>Автор</p>
              <p><?php echo $author ?></p>
            </div>
            <div class="param">
              <p>Жанр</p>
              <p><?php echo $type ?></p>
            </div>
            <div class="param">
              <p>Мова</p>
              <p><?php echo $language ?></p>
            </div>
            <div class="param">
              <p>Рік видання</p>
              <p><?php echo $year ?></p>
            </div>
            <div class="param">
              <p>Сторінки</p>
              <p><?php echo $pages ?></p>
            </div>
            <div class="param">
              <p>Обкладинка</p>
              <p><?php echo $cover ?></p>
            </div>
            <div class="param">
              <p>Вік</p>
              <p><?php echo $age ?></p>
            </div>
          </div>
        </div>
        <div class="about-book">
          <p class="header">Про книгу</p>
          <p><?php echo $about ?>
          </p>
        </div>

      </div>
      <div class="purchase">
        <div class="price"><?php echo $price ?> грн.</div>
        <button class="buy-book">Купити</button>
      </div>
    </div>
  </main>
  <!-- Книги за темою -->
  <div class="itempanel">
    <label>Книги за темою</label>
    <div class="books">
        <?php
        $typeid = $result[2];
        $sql = "SELECT Nom,img,name,price FROM `item` WHERE `type` = ".$typeid.""; 
        $result = mysqli_query($connect,$sql);
        $result = mysqli_fetch_all($result);
        for($i=0;$i<6;$i++){
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
        ?>
      
    </div>
  </div>
  <!-- Рекомендовано вам -->
  <div class="itempanel">
    <label>Рекомендовано вам</label>
    <div class="books">
      <?php
            $result = mysqli_query($connect,"SELECT Nom,img,name,price FROM `item` ORDER BY `item`.`rating` DESC  ");
            $result = mysqli_fetch_all($result);
            for($i=0;$i<6;$i++){
            $disconts = mysqli_query($connect,"SELECT * FROM `prom` where nom_item = ".$result[$i][0]."");
            if ($disconts->num_rows > 0) {
            echo"
            <div class=\"book-panel\">
          <div class=\"book-image\"><img src=\"../image/books/".$result[$i][1]."\" /></div>
          <div class=\"book-name\">
            <p>".$result[$i][2]."</p>
          </div>
          <div class=\"book-bottom\">
            <p class=\"discount\">".$result[$i][3]." UAH</p>
            <p class=\"price\">".mysqli_fetch_all($disconts)[0][1]." UAH</p>
            <button class=\"buy-btn\"><a href=\"https://catnest.dp.ua/new_version/pages/book.php?id=".$result[$i][0]."\"></a>Купити</button>
          </div>
        </div>
            ";
            }else{
                echo"
            <div class=\"book-panel\">
          <div class=\"book-image\"><img src=\"../image/books/".$result[$i][1]."\" /></div>
          <div class=\"book-name\">
            <p>".$result[$i][2]."</p>
          </div>
          <div class=\"book-bottom\">
            <p class=\"price\">".$result[$i][3]." UAH</p>
            <a href=\"https://catnest.dp.ua/new_version/pages/book.php?id=".$result[$i][0]."\"><button class=\"buy-btn\">Купити</button></a>
          </div>
        </div>
            ";
            }
            }
            $connect->close();
            ?>
    </div>
  </div>

  <?php 
    include('utility/footer.php')
  ?>
</body>

</html>