<!-- MATERIAL CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
<script src="../scripts/dev/jquery.cookie.js"></script>
  <script src="../scripts/booklist.js"></script>
  <script src="../scripts/header.js"></script>
<?php
 if(!isset($_COOKIE['cart'])){
        $expires = strtotime('+30 days');
       setcookie('cart', 0, $expires, '/');
    }
?>
<script>
 $(document).ready(function() {
          initialbutton()
        var buyButtons = $(".buy-btn");
        buyButtons.on("mouseleave", function() {
            var id = $(this).attr("itemid");
    if(cartO[$(this).attr("itemid")]!==undefined){
        $(this).html("У Кошику");
}
        else {
            $(this).html("Купити");
        }
        });
        buyButtons.on("mouseenter", function() {
            var id = $(this).attr("itemid");
    if(cartO[$(this).attr("itemid")]!==undefined){
        $(this).html("Видалити");
}
        else {
            $(this).html("Купити");
        }
        });
  });
<?php
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
    $result = mysqli_query($connect,"SELECT Nom,name,price FROM item");
    $result = mysqli_fetch_all($result);
    $cartitemall = json_encode($result);
    $result = mysqli_query($connect,"SELECT * FROM `prom` WHERE 1");
    $result = mysqli_fetch_all($result);
    $prom = json_encode($result);
    echo("var cartitemalltemp = ".$cartitemall.";");
$connect->close();
?>
 var prom = <?php echo $prom; ?>;
let cartitemall ={};
for(let i=0; i<cartitemalltemp.length;i++){
    cartitemall[cartitemalltemp[i][0]]=[cartitemalltemp[i][1],cartitemalltemp[i][2]];
}
console.log(cartitemall);
function toBookpage(itemid){
    window.location.href = "https://catnest.dp.ua/new_version/pages/book.php?id="+itemid;
}
function getCookie(name) {
  var cookieValue = null;
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = jQuery.trim(cookies[i]);

    if (cookie.substring(0, name.length + 1) === name + "=") {
      cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
      break;
    }
  }

  return cookieValue;
}
var cartS = getCookie("cart");
if(cartS!=="0"){
var cartA = cartS.split('-');
var cartO = {};
for(let i=0;i<cartA.length;i++){
    if(cartA[i]!==""){
        var temp = cartA[i].split("+");
        cartO[temp[0]] = temp [1];
    }
}
}else{
    var cartA = [];
var cartO = {};
}
function addItem(itemid){
    if(cartO[itemid]===undefined){
   cartA.push(itemid+"+1");
   cartO[itemid] = "1";
   let text="";
   for(let i=0;i<cartA.length;i++){
    if(cartA[i]!==""){
        text+=cartA[i]+"-";
    }}
    cartS= text;
    var currentDate = new Date();
    displayNotification('Товар додано до кошика!', 'green')
    showcartitems();
     initialbutton() 

// Додати один місяць до поточної дати
var expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate());
console.log(cartS);
// Встановити куку з оновленим значенням та таймером строку дії
$.cookie("cart", cartS, { path: '/', expires: expirationDate, raw: true });
    
}else{
    displayNotification('Товар вже знаходиться у кошику!', 'red')
}
intial(<?php echo($_GET["id"])?>);
    }
function getlogin(a) {
  console.log(a);
  window.location.href = '../pages/404.php';
}
</script>
<header class="unselectable">
  <nav>
    <div class="nav__container">
      <div class="logo">
        <a href="../pages/main.php">
          <h1>Cat</h1>
          <svg id="logo" viewBox="0 0 24 24">
            <path
              d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z" />
          </svg>
          <h1>Nest</h1>
        </a>
      </div>
      <ul class="nav__menu">
        <li class="nav__link"><a href="https://catnest.dp.ua/new_version/pages/booklist.php?type=1">Художня література</a></li>
        <li class="nav__link"><a href="https://catnest.dp.ua/new_version/pages/booklist.php?type=2">Освітня література</a></li>
        <li class="nav__link"><a href="https://catnest.dp.ua/new_version/pages/booklist.php?type=3">Саморозвиток</a></li>
        <li class="nav__link"><a href="https://catnest.dp.ua/new_version/pages/booklist.php?type=4">Дитяча</a></li>
        <li class="nav__link"><a href="https://catnest.dp.ua/new_version/pages/faq.php">Довідка</a></li>
        <!--<li class="nav__link"><a href="#">Акції</a></li>-->
      </ul>
      <!-- ICONS -->
      <ul class="nav__icons">
        <li id="menu-btn">
          <span class="material-icons-sharp">menu</span>
        </li>
        <li>
          <span class="material-icons-sharp" id="search-btn">search</span>
        </li>
        <li>
          <span class="material-icons-sharp" id="cart-btn">shopping_cart</span>
        </li>
        <li>
        <li>
          <?php
                 if(isset($_COOKIE['auth']) AND $_COOKIE['auth']=='1'){
             echo('
            <span class="material-icons-sharp" id="!loginbtn" onclick="verifay()">
      account_circle</span>');
                     
                 }else  echo('
            <span class="material-icons-sharp" id="account-btn">
      account_circle</span>');
      ?>
        </li>
        </li>
      </ul>
      <!-- SEARCH -->
      <form class="search-form">
        <input type="search" id="search-box" placeholder="Пошук..." />
        <label for="search-box" class="material-icons-sharp">search</label>
      </form>
      <!-- LOGIN -->
      <form method="POST" class="login-form" id="loginform">
        <h3>Увійти</h3>
        <p id="login-error" style="display:none; color:red;">Не вірний логін або пароль</p>
        <input type="email" placeholder="Ел.пошта" name="login" class="login-box" />
        <input type="password" placeholder="Пароль" name="password" class="login-box" />
        <p>Забули пароль <a id="reset-btn" onclick=requestEmailVerification()>Натисніть тут</a></p>
        <p>Не маєте облікового запису <a id="create-btn">Створити зараз</a></p>
        <input type="submit" value="Увійти" class="login-btn" />
        <script src="../scripts/login.js"></script>
      </form>
       <!-- CART -->
      <form class="cart-form" id="cartform">
        <h3>Кошик</h3>
        <div id="cartitems">
            
        
            <div class="cartitem-holder">
                <img class="cartitem-image" src="../image/books/b1.jpg">
                <div class="cartitem-details">
                        <p>Small Homes, Grand Living: Interior Design for Compact</p>
                        <div style="text-align: left;">
                            <p>Артикиль:1</p>
                            <p>Кількість: <button type="button"><</button><input size="3"></input><button type="button">></button></p>
                            <p>Ціна: 200 грн</p>
                            <button style="margin-left: 81%;width: 33%; background-color:red;" type="button">Видалити</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="cartfooter">
            <p>Загальна вартість: <label id="cartfullprice">200</label> грн <button class="cartbuy" style="margin-left: 10%;width: 33%;"  type=button onclick="window.location.href = 'https://catnest.dp.ua/new_version/pages/order.php'">Перейти до сплати</button><p>
        </div>
      </form>
    </div>
  </nav>
</header>
<!-- REGISTER -->
<div id="notificationReg">
    <div id="notificationRegMsg" class="hidden">
      <p>Перевірте свою пошту для завершення реєстрації.</p>
      <button type="button" class="register-btn" onclick="closeNotification()">ОК</button>
    </div>
</div>
<div class="register">
  <form class="register-form" id="registerform">
    <h3>Реєстрація</h3>
    <p id="register-error" style="color:red;"></p>
    <span class="material-icons-sharp unselectable" id="close-register-btn">close</span>
    <input type="text" placeholder="Прізвище" class="register-box" name="surname" required />
    <input type="text" placeholder="Ім'я" class="register-box" name="name" required />
    <input type="email" placeholder="Ел.пошта" class="register-box" name="email" required />
    <input type="text" placeholder="Телефон" class="register-box" name="phone" required />
    <input type="password" placeholder="Пароль" class="register-box" name="password" required minlength="6"
      maxlength="20" />
    <input type="password" placeholder="Підтвердження пароля" class="register-box" name="confirm_password" required
      minlength="6" maxlength="20" />
     <p id="rpt_lb" style ="display:none;"></p>
    <input type="submit" id="submt" value="Зареєструватися" class="register-btn" />
    <script src="../scripts/register.js"></script>
  </form>
</div>
<div id="notification"></div>

  <script src="../scripts/header.js"></script>
<script>
    function requestEmailVerification() {
        var notification = $('#notificationReg');
        notification.css('display', 'block');
        setTimeout(function() {
        notification.addClass('show');
        }, 20);
      }

      function closeNotification() {
        var notification = $('#notificationReg');
        notification.removeClass('show');
          setTimeout(function() {
       notification.css('display', 'none');
        }, 300);
      }
</script>