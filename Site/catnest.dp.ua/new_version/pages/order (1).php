<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Оформлення замовлення | Книжковий інтернет-магазин "CatNest"</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/order.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../scripts/dev/jquery.cookie.js"></script>
</head>

<body>
    <?php 
    if($_COOKIE["cart"]==""){
        header('Location: https://catnest.dp.ua/new_version/pages/cart-empty.php');
    }
   require_once("../php/verify.php"); //для роботи без використання серверу за коментувати цей рядок.
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
if(isset($_COOKIE["hashcode"])){
    $result = mysqli_query($connect,'SELECT * FROM `clientreg` WHERE `clientreg`.`Nom` = ( SELECT `logpas`.`id` FROM `logpas` WHERE `logpas`.`hash_pass` = "'.$_COOKIE["hashcode"].'" )');
    $client = mysqli_fetch_all($result)[0];
    $result = mysqli_query($connect,'SELECT login,password FROM `logpas` WHERE hash_pass = "'.$_COOKIE["hashcode"].'" )');
    $clienlp = mysqli_fetch_all($result)[0];}
$connect->close();
?>
  <?php 
    include('utility/header.php')
  ?>
  <main>
    <header>
      <div class="profile">
        <div class="profile-name">
          <h1>Замовлення</h1>
        </div>
      </div>
    </header>
 <article>
       <div class="content" id="order" style="display:block;margin-right: 26%;">
            <form id="order_form">
                <div id="orderitemlist">
                    <p>У кошику<p>
                    <div class="order_item">
                    <div id="order_item_name"><label>Назва: Тіні</label></div>
                    <div id="order_item_id"><label>Артикиль: 1</label></div>
                    <div id="order_item_amount"><label>Кількість: 3</label></div>
                    <div id="order_item_price"><label>Ціна: 200грн</label></div>
                    </div>
                    <div class="order_item">
                    <div id="order_item_name"><label>Назва: Тіні</label></div>
                    <div id="order_item_id"><label>Артикиль: 1</label></div>
                    <div id="order_item_amount"><label>Кількість: 3</label></div>
                    <div id="order_item_price"><label>Ціна: 200грн</label></div>
                    </div>
                    <div class="order_item">
                    <div id="order_item_name"><label>Назва: Тіні</label></div>
                    <div id="order_item_id"><label>Артикиль: 1</label></div>
                    <div id="order_item_amount"><label>Кількість: 3</label></div>
                    <div id="order_item_price"><label>Ціна: 200грн</label></div>
                    </div>
                    <div class="order_item">
                    <div id="order_item_name"><label>Назва: Тіні</label></div>
                    <div id="order_item_id"><label>Артикиль: 1</label></div>
                    <div id="order_item_amount"><label>Кількість: 3</label></div>
                    <div id="order_item_price"><label>Ціна: 200грн</label></div>
                    </div>
                    <div class="order_item">
                    <div id="order_item_name"><label>Назва: Тіні</label></div>
                    <div id="order_item_id"><label>Артикиль: 1</label></div>
                    <div id="order_item_amount"><label>Кількість: 3</label></div>
                    <div id="order_item_price"><label>Ціна: 200грн</label></div>
                    </div>
                </div>    
                <div id="order_cinfo">
                    <div id="order_client">
                        <p>Покупець</p>
                    <label>Ім'я:</label><input id="client_name" name="firstname" value="<?php echo($client[1]) ?>"></input>
                    <label>Прізвище:</label><input id="client_surname" name="lastname"value="<?php echo($client[2]) ?>"></input>
                    <label>Email:</label><input  id="client_email" name="сemail" value="<?php echo($client[4]) ?>"></input>
                    <label>Моб.телефон:</label><input id="client_phone"name="сphone" value="<?php echo($client[3]) ?>"></input>
                    </div>
                    <div id="order_delivery">
                        <p>Доставка</p>
                        <label id="sorry">Доставка здійснюється лише новою поштою,вибачте(</label>
                        <label>Область:</label>
                  <select id="region">
             <option value="" disabled selected>Виберіть область</option>
    <option value="Вінницька">Вінницька</option>
    <option value="Волинська">Волинська</option>
    <option value="Дніпропетровська">Дніпропетровська</option>
    <option value="Донецька">Донецька</option>
    <option value="Житомирська">Житомирська</option>
    <option value="Закарпатська">Закарпатська</option>
    <option value="Запорізька">Запорізька</option>
    <option value="Івано-Франківська">Івано-Франківська</option>
    <option value="Київська">Київська</option>
    <option value="Кіровоградська">Кіровоградська</option>
    <option value="Луганська">Луганська</option>
    <option value="Львівська">Львівська</option>
    <option value="Миколаївська">Миколаївська</option>
    <option value="Одеська">Одеська</option>
    <option value="Полтавська">Полтавська</option>
    <option value="Рівненська">Рівненська</option>
    <option value="Сумська">Сумська</option>
    <option value="Тернопільська">Тернопільська</option>
    <option value="Харківська">Харківська</option>
    <option value="Херсонська">Херсонська</option>
    <option value="Хмельницька">Хмельницька</option>
    <option value="Черкаська">Черкаська</option>
    <option value="Чернівецька">Чернівецька</option>
    <option value="Чернігівська">Чернігівська</option>
        </select>
 <label>Місто:</label>
        <select id="city">
            <option value=" " disabled selected >Виберіть місто</option>
        </select>
 <label>Відділення:</label>
        <select id="warehouse">
            <option value="" disabled selected>Виберіть відділення</option>
        </select>
                </div>
                </div>
            <label id="amountorder">Загальна вартість: 200 грн</label> <button id="suborder">Оформити</button>
            </form>
      </div>
    </article>

  </main>

  <?php 
    include('utility/footer.php')
  ?>
  <script src="../scripts/profile.js"></script>
  <script>
  function getamountorder(){
      var sum =0;
for (let value of Object.keys(cartO)) {
    if(ispromoitem(value,prom)){
    sum+=getpromoprice(value,prom)*cartO[value]  
    }else{
    sum+=cartitemall[value][1]*cartO[value]
}
  }
  return sum;
      
  }
  function showorderItem(itemid){
      var price = ispromoitem(itemid,prom) ? Number(getpromoprice(itemid,prom))*Number(cartO[itemid]) +'<label style="text-decoration: line-through; font-size: 9px;color: #bd8383; margin:0;">('+Number(cartitemall[itemid][1])*Number(cartO[itemid])+')</label> грн' : Number(cartitemall[itemid][1])*Number(cartO[itemid]) + ' грн';
      var str = '<div class="order_item">'+
                    '<div id="order_item_name"><label>Назва: '+cartitemall[itemid][0]+'</label></div>'+
                    '<div id="order_item_id"><label>Артикиль: '+itemid+'</label></div>'+
                    '<div id="order_item_amount"><label>Кількість: '+cartO[itemid]+'</label></div>'+
                    '<div id="order_item_price"><label>Ціна: '+price+'</label></div>'+
                    '</div>';
            return str;
}
function showorderitems(){
    let orderitem = $("#orderitemlist");
    orderitem.html("<p>У кошику<p>");
    
  for(let i=0;i<cartA.length;i++){
    if(cartA[i]!==""){
        var temp = cartA[i].split("+");
        var str = showorderItem(temp[0]);
        var name = cartitemall[temp[0]][0];
        orderitem.append(showorderItem(temp[0]));
    }
}
 $("#amountorder").html('Загальна вартість:'+getamountorder()+' грн' );
    
}
   
 $(".orders").html("");
  function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}
      function exitprofile(){
           deleteCookie('auth')
           deleteCookie('hashcode')
      }
      $(document).ready(function() {
          $('#close-subaccept-btn').click(() => {
            $(".subaccept").removeClass('active');
            })
          showorderitems();
          $('#order_form').submit(function (event) {
                         $('input').css('background-color','var(--color-bg)');
                         $('select').css('background-color','var(--color-bg)');
  event.preventDefault()
  var lastName = $('input[name="lastname"]').val()
  var firstName = $('input[name="firstname"]').val()
  var email = $('input[name="сemail"]').val()
  var phone = $('input[name="сphone"]').val()
  var region = $('#region').val();
  var city = $('#city').val();
  var warehouse = $('#warehouse').val();
  var error = ''
  if (city === null) {
    error += 'Виберіть місто доставки.\n'
    $('#city').css('background-color','#f2aaaa');
  }
  if (warehouse === null) {
    error += 'Виберіть відділення доставки.\n'
    $('#warehouse').css('background-color','#f2aaaa');
  }
  if (region === null) {
    error += 'Виберіть область.\n'
    $('#region').css('background-color','#f2aaaa');
  }
  if (lastName.trim() == '') {
    error += 'Введіть прізвище.\n'
    $('input[name="lastname"]').css('background-color','#f2aaaa');
  }
  if (firstName.trim() == '') {
    error += "Введіть ім'я.\n>"
    $('input[name="firstname"]').css('background-color','#f2aaaa');
  }
  if (email.trim() == '') {
    error += 'Введіть email.\n'
    $('input[name="сemail"]').css('background-color','#f2aaaa');
  } else {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
    if (!emailPattern.test(email)) {
      error += 'Введіть коректний email.\n'
      $('input[name="сemail"]').css('background-color','#f2aaaa');
    }
  }
  if (phone.trim() == '') {
    error += 'Введіть телефон.\n'
    $('input[name="сphone"]').css('background-color','#f2aaaa');
  } else {
  var phonePattern = /^(\+?38)?\s*\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{2}[\s.-]?\d{2}$/;
  if (!phonePattern.test(phone)) {
    error += 'Введіть коректний номер телефону \n';
    $('input[name="сphone"]').css('background-color', '#f2aaaa');
  }
}

if (error != '') {
  alert(error);
} else {
  $.ajax({
    url: '../php/order.php',
    type: 'POST',
    data: {
      lastName: $('input[name="lastname"]').val(),
      firstName: $('input[name="firstname"]').val(),
      email: $('input[name="сemail"]').val(),
      phone: $('input[name="сphone"]').val(),
      region: $('#region').val(),
      city: $('#city').val(),
      warehouse: $('#warehouse').val(),
      orderlist: $('#orderitemlist').html(),
      order: cartO,
      amount: getamountorder()
    },
    success: function(response) {
      if (response.split('-')[0] == 200) {
         alert("Вітаю замовлення оформлене!\n Номер замовлення:"+response.split('-')[1]+"\n Інформації про замовлення, надіслана на вашу електронну адресу\n Вам зателефонує наш менеджер для пітвердження замовлення\n Дякуємо, що вибераєте CatNest, ми цінуємо це!♥♥♥ ")
         window.location.href = "https://catnest.dp.ua";
      }
    },
    error: function() {
      console.log('Произошла ошибка при выполнении AJAX запроса');
    }
  });
} 
              
          });
          
            // Обработчик события при выборе области
            $('#region').change(function() {
                var region = $(this).val();
                if (region) {
                    // Очистка списка городов и отделений
                    $('#city').html('<option value="" disabled selected>Виберіть місто</option>');
                    $('#warehouse').html('<option value="" disabled selected>Виберіть відділення</option>');

                    // Запрос к серверу для получения списка городов
                    $.ajax({
                        url: '../php/new_post.php', // Путь к файлу обработчику на сервере
                        type: 'POST',
                        data: { region: region, functionName:'getCities'},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(key, value) {
                                $('#city').append('<option value="' + value + '">' + value + '</option>');
                            });
                        }
                    });
                } 
            });
            
            $('#city').change(function() {
                var city = $(this).val();
                if (city) {
                    // Очистка списка отделений
                    $('#warehouse').html('<option value="" disabled selected >Виберіть відділення</option>');

                    // Запрос к серверу для получения списка отделений
                    $.ajax({
                        url: '../php/new_post.php', // Путь к файлу обработчику на сервере
                        type: 'POST',
                        data: { city: city, region:  $('#region option:selected').text(), functionName:'getWarehouse'},
                        dataType: 'json',
                        success: function(response) {
                            // Добавление отделений в список
                            $.each(response, function(key, value) {
                                $('#warehouse').append('<option value="' + value + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    // Город не выбран, очистка списка отделений
                    $('#warehouse').html('<option value="" disabled selected >Виберіть відділення</option>');
                }
            });
        });
  </script>
</body>

</html>