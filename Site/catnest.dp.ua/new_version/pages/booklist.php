<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booklist</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/booklist.css" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <?php 
    include('utility/header.php');
    $type = $_GET["type"];
    $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
    if($type!="allbooks"){
    $result = mysqli_query($connect,"SELECT name FROM type WHERE num = ".$type."");
    $typename = mysqli_fetch_all($result)[0][0];
    
    
    
    $result = mysqli_query($connect,"SELECT * FROM item WHERE type = ".$type."");
    $result = mysqli_fetch_all($result);
    $items = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `prom` WHERE EXISTS (SELECT 1 FROM `item` WHERE `item`.`Nom` = `prom`.`nom_item` AND `item`.`type` = ".$type.")");
    $result = mysqli_fetch_all($result);
    $prom = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `language` WHERE EXISTS (SELECT 1 FROM `item` WHERE `item`.`language` = `language`.`num` AND `item`.`type` = ".$type.")");
    $result = mysqli_fetch_all($result);
    $languages = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `author` WHERE EXISTS (SELECT 1 FROM `item` WHERE `item`.`authorC` = `author`.`num` AND `item`.`type` = ".$type.")");
    $result = mysqli_fetch_all($result);
    $authors = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `edition` WHERE EXISTS (SELECT 1 FROM `item` WHERE `item`.`edition` = `edition`.`num` AND `item`.`type` = ".$type.")");
    $result = mysqli_fetch_all($result);
    $editions = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `cover` WHERE EXISTS (SELECT 1 FROM `item` WHERE `item`.`cover` = `cover`.`num` AND `item`.`type` = ".$type.")");
    $result = mysqli_fetch_all($result);
    $covers = json_encode($result);
    }
    else{
    $typename = "Усі книжки";
    
    $result = mysqli_query($connect,"SELECT * FROM item WHERE 1");
    $result = mysqli_fetch_all($result);
    $items = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `prom` WHERE 1");
    $result = mysqli_fetch_all($result);
    $prom = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `language` WHERE 1");
    $result = mysqli_fetch_all($result);
    $languages = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `type` WHERE 1");
    $result = mysqli_fetch_all($result);
    $type = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `author` WHERE 1");
    $result = mysqli_fetch_all($result);
    $authors = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `edition` WHERE 1");
    $result = mysqli_fetch_all($result);
    $editions = json_encode($result);
    
    $result = mysqli_query($connect,"SELECT * FROM `cover` WHERE 1");
    $result = mysqli_fetch_all($result);
    $covers = json_encode($result);
    }
    ?>
  <script>
  var typet = <?php echo $type; ?>;
  var ass = "<?php echo $_GET["type"]; ?>";
var itemsarr =<?php echo $items; ?>;
var editions =<?php echo $editions; ?>;
var language = <?php echo $languages; ?>;
var type = <?php echo $type; ?>;
var cover =<?php echo $covers; ?>;
var author = <?php echo $authors; ?>;
var prom = <?php echo $prom; ?>;
$(document).ready(function() {
    
    var pageTitle = "<?php echo $typename; ?> | Книжковий інтернет-магазин \"CatNest\"";
    document.title = pageTitle;
    
   /* if(ass==="allbooks"){
        var toaddsttr = '<div class="tab">' +
'  <input id="tab5" type="checkbox" class="tab-input">' +
'  <label for="tab5" class="tab-label">Жанр<span class="material-icons-sharp">' +
'      expand_more' +
'    </span></label>' +
'  <div class="tab-content" id="tabgenre">' +
'  </div>' +
'</div>' +
        '<div class="tab">' +
'  <input id="tab1" type="checkbox" class="tab-input">' +
'  <label for="tab1" class="tab-label">Мова<span class="material-icons-sharp">' +
'      expand_more' +
'    </span></label>' +
'  <div class="tab-content" id="tablang">' +
'  </div>' +
'</div>' +
'<div class="tab">' +
'  <input id="tab2" type="checkbox" class="tab-input">' +
'  <label for="tab2" class="tab-label">Автори<span class="material-icons-sharp">' +
'      expand_more' +
'    </span></label>' +
'  <div class="tab-content" id="tabauthor">' +
'  </div>' +
'</div>' +
'<div class="tab">' +
'  <input id="tab3" type="checkbox" class="tab-input">' +
'  <label for="tab3" class="tab-label">Видавництво<span class="material-icons-sharp">' +
'      expand_more' +
'    </span></label>' +
'  <div class="tab-content" id="tabedition">' +
'  </div>' +
'</div>' +
'<div class="tab">' +
'  <input id="tab4" type="checkbox" class="tab-input">' +
'  <label for="tab4" class="tab-label">Обкладинка<span class="material-icons-sharp">' +
'      expand_more' +
'    </span></label>' +
'  <div class="tab-content" id="tabcover">' +
'  </div>' +
'</div>';

        $(".filter-container").html(toaddsttr);
    }*/
    // Тут розміщуйте свій код, який ви хочете виконати після завантаження сторінки
    var tablang = $("#tablang");
    for (let i = 0; i < language.length; i++) {
        var str = '<div><input type="checkbox" class="checkbox" id="language-' + language[i][0] + '"><label ' +
            'for="language' + language[i][0] + '">' + language[i][1] + '</label></div>';
        tablang.append(str);

    }
    var tabauthor = $("#tabauthor");
    for (let i = 0; i < author.length; i++) {
        var str = '<div><input type="checkbox" class="checkbox" id="author-' + author[i][0] + '"><label ' +
            'for="author' + author[i][0] + '">' + author[i][1] + '</label></div>';
        tabauthor.append(str);
    }
    var tabedition = $("#tabedition");
    for (let i = 0; i < editions.length; i++) {
        var str = '<div><input type="checkbox" class="checkbox" id="edition-' + editions[i][0] + '"><label ' +
            'for="edition' + editions[i][0] + '">' + editions[i][1] + '</label></div>';
        tabedition.append(str);
    }
    var tabcover = $("#tabcover");
    for (let i = 0; i < cover.length; i++) {
        var str = '<div><input type="checkbox" class="checkbox" id="cover-' + cover[i][0] + '"><label ' +
            'for="cover' + cover[i][0] + '">' + cover[i][1] + '</label></div>';
        tabcover.append(str);
        
    }
setselecteditem(itemsarr,$("#item-holderp"),prom);  
 $('.checkbox').change(function(){
setselecteditem(itemsarr,$("#item-holderp"),prom);  
 });
});


  </script>

  <main>
    <header>
      <div class="name-page">
        <h1><?php echo($typename)?></h1>
      </div>
    </header>

    <aside>
      <p id="filter">Фільтр по параметрам</p>

      <div class="filter-container">
        <div class="tab">
          <input id="tab1" type="checkbox" class="tab-input">
          <label for="tab1" class="tab-label">Мова<span class="material-icons-sharp">
              expand_more
            </span></label>
          <div class="tab-content" id="tablang">
        </div>
        </div>
        <div class="tab">
          <input id="tab2" type="checkbox" class="tab-input">
          <label for="tab2" class="tab-label">Автори<span class="material-icons-sharp">
              expand_more
            </span></label>
          <div class="tab-content" id="tabauthor">
           
          </div>
        </div>
        <div class="tab">
          <input id="tab3" type="checkbox" class="tab-input">
          <label for="tab3" class="tab-label">Видавництво<span class="material-icons-sharp">
              expand_more
            </span></label>
          <div class="tab-content" id="tabedition">
           
          </div>
        </div>
         <div class="tab">
          <input id="tab4" type="checkbox" class="tab-input">
          <label for="tab4" class="tab-label">Обкладинка<span class="material-icons-sharp">
              expand_more
            </span></label>
          <div class="tab-content" id="tabcover">
           
          </div>
        </div>
      </div>


      <!-- 
      <div class="category-btn unselectable">
        <p>Мова</p><span class="material-icons-sharp">
          expand_more
        </span>
      </div>
      <div id="lang">
        <input type="checkbox" id="myCheckbox" name="myCheckbox" value="myValue">
        <label for="myCheckbox">Чекбокс тест</label>
      </div> 
      -->

      <!-- <div class="filter"></div> -->
    </aside>

    <article>
      <!-- Книги -->
      <div class="itempanel" >
        <div class="books" id="item-holderp">
          
        </div>
      </div>
    </article>
  </main>

  <?php 
    include('utility/footer.php')
  ?>

  <script src="../scripts/booklist.js"></script>
</body>

</html>