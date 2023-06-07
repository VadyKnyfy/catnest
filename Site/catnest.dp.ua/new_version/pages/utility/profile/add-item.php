<script>
<?php
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
$result = mysqli_query($connect,"SELECT name FROM edition");
$result = mysqli_fetch_all($result);
$editions = json_encode($result);
$result = mysqli_query($connect,"SELECT name FROM type");
$result = mysqli_fetch_all($result);
$type = json_encode($result);
$result = mysqli_query($connect,"SELECT name FROM `language`");
$result = mysqli_fetch_all($result);
$language = json_encode($result);
$result = mysqli_query($connect,"SELECT name FROM `cover`");
$result = mysqli_fetch_all($result);
$cover = json_encode($result);
$result = mysqli_query($connect,"SELECT name FROM `author`");
$result = mysqli_fetch_all($result);
$author = json_encode($result);
$connect->close();
?>

function editarr(a){
    var t =a;
    for(var i=0;i<t.length;i++){
        t[i] = t[i][0];
    }
    return t;
}
var editions =editarr( <?php echo $editions; ?>);
var type =editarr(  <?php echo $type; ?>);
var language =editarr( <?php echo $language; ?>);
var cover =editarr( <?php echo $cover; ?>);
var author =editarr( <?php echo $author; ?>);
$(document).ready(function() {
    
 //////////////////////////////   
  $('#i-publisher').on('input', function() {
    var inputValue = $(this).val();
    var mostSimilarValue = editions.filter(function(element) {
    return element.indexOf(inputValue) === 0;
    });
    if(mostSimilarValue.length!==0 && mostSimilarValue.length!==editions.length ){
        $("#ex-edon").text(mostSimilarValue[0]);
        $("#ex-edon").css("display", "block");    
    }else $("#ex-edon").css("display", "none");
  });
  
  $('#ex-edon').on('click', function() {
      $('#i-publisher').val($("#ex-edon").text());
      $("#ex-edon").css("display", "none");
  });
  /////////////////////////////////
  
  //////////////////////////////   
  $('#i-genre').on('input', function() {
    var inputValue = $(this).val();
    var mostSimilarValue = type.filter(function(element) {
    return element.indexOf(inputValue) === 0;
    });
    if(mostSimilarValue.length!==0 && mostSimilarValue.length!==type.length ){
        $("#ex-gere").text(mostSimilarValue[0]);
        $("#ex-gere").css("display", "block");    
    }else $("#ex-gere").css("display", "none");
  });
  
  $('#ex-gere').on('click', function() {
      $('#i-genre').val($("#ex-gere").text());
      $("#ex-gere").css("display", "none");
  });
  /////////////////////////////////
  
  //////////////////////////////   
  $('#p-lang').on('input', function() {
    var inputValue = $(this).val();
    var mostSimilarValue = language.filter(function(element) {
    return element.indexOf(inputValue) === 0;
    });
    if(mostSimilarValue.length!==0 && mostSimilarValue.length!==language.length ){
        $("#ex-lang").text(mostSimilarValue[0]);
        $("#ex-lang").css("display", "block");    
    }else $("#ex-lang").css("display", "none");
  });
  
  $('#ex-lang').on('click', function() {
      $('#p-lang').val($("#ex-lang").text());
      $("#ex-lang").css("display", "none");
  });
  /////////////////////////////////
  
   //////////////////////////////   
  $('#p-сover').on('input', function() {
    var inputValue = $(this).val();
    var mostSimilarValue = cover.filter(function(element) {
    return element.indexOf(inputValue) === 0;
    });
    if(mostSimilarValue.length!==0 && mostSimilarValue.length!==cover.length ){
        $("#ex-cover").text(mostSimilarValue[0]);
        $("#ex-cover").css("display", "block");    
    }else $("#ex-cover").css("display", "none");
  });
  
  $('#ex-cover').on('click', function() {
      $('#p-сover').val($("#ex-cover").text());
      $("#ex-cover").css("display", "none");
  });
  /////////////////////////////////
  
  ////////////////////////////////// 
  $('#i-author').on('input', function() {
    var inputValue = $(this).val();
    var mostSimilarValue = author.filter(function(element) {
    return element.indexOf(inputValue) === 0;
    });
    if(mostSimilarValue.length!==0 && mostSimilarValue.length!==author.length ){
        $("#ex-author").text(mostSimilarValue[0]);
        $("#ex-author").css("display", "block");    
    }else $("#ex-author").css("display", "none");
  });
  
  $('#ex-author').on('click', function() {
      $('#i-author').val($("#ex-author").text());
      $("#ex-author").css("display", "none");
  });
  /////////////////////////////////
   
});
</script>
<div class="content" id="add-item">
 <form id="add-item-form" action="../php/additem.php" method="POST" enctype="multipart/form-data">
  <p id="add-item-error" style="display:none">ERROR</p>
  <div class="add-item-content">
    <div class="add-item-img drop-area">
      <label>Зображення</label>
      <img src="../../../image/utility/no-img.jpg" alt="no-image" style="display:none">
      <input type="file" id="file-input" name="fileToUpload" style="padding-top: 0.9rem;">
    </div>
    <div class="add-item-param">
      <div>
        <label>Назва</label>
        <input type="text" id="names" name="name">
      </div>
      <div>
        <label>Автор</label>
        <div class="suggestions" id="ex-author"></div>
        <input type="text" id="i-author" name="author">
      </div>
      <div>
        <label>Ціна</label>
        <input type="text" id="i-price" name="price">
      </div>
      <div>
        <label>Видавництво</label>
          <div class="suggestions" id="ex-edon"></div>
        <input type="text" id="i-publisher" name="edition">
      </div>
      <div>
        <label>Жанр</label>
        <div class="suggestions" id="ex-gere"></div>
        <input type="text" id="i-genre" name="genre">
      </div>
      <div>
        <label>Мова</label>
        <div class="suggestions" id="ex-lang"></div>
        <input type="text" id="p-lang" name="language">
      </div>
      <div>
        <label>К-ть сторінок</label>
        <input type="text" id="p-cout" name="pageCount">
      </div>
      <div>
        <label>Рік видання</label>
        <input type="text" id="p-year" name="year">
      </div>
      <div>
        <label>Обкладинка</label>
        <div class="suggestions" id="ex-cover"></div>
        <input type="text" id="p-сover" name="cover">
      </div>
      <div>
        <label>Вік</label>
        <input type="text" id="p-age" name="age">
      </div>
      <div>
        <label>Про книгу</label>
        <textarea id="p-about" name="about" maxlength="1000"></textarea>
      </div>
    </div>
  </div>
  <button type="submit">Додати</button>
</form>
</div>

<script>
$(document).ready(function() {
  // Функция для отображения выбранного изображения
  function previewImage(file) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.drop-area img').attr('src', e.target.result);
    $('.drop-area img').attr('style', "");
        
    };
    reader.readAsDataURL(file);
  }

  // Обработчик события перетаскивания
  $('.drop-area').on('dragover', function(e) {
    e.preventDefault();
    $(this).css('background', '#e2eaf3');
  }).on('dragleave', function(e) {
    e.preventDefault();
    $(this).css('background', '');
  }).on('drop', function(e) {
    e.preventDefault();
    $(this).css('background', '');
    var file = e.originalEvent.dataTransfer.files[0];
    previewImage(file);
  });

  // Обработчик события выбора файла через диалоговое окно
  $('#select-file').on('click', function() {
    $('#file-input').click();
  });

  $('#file-input').on('change', function() {
    var file = this.files[0];
    previewImage(file);
  });
});

function validateForm() {
  var name = document.getElementById('names').value;
  var author = document.getElementById('i-author').value;
  var price = parseFloat(document.getElementById('i-price').value);
  var publisher = document.getElementById('i-publisher').value;
  var genre = document.getElementById('i-genre').value;
  var language = document.getElementById('p-lang').value;
  var pageCount = parseInt(document.getElementById('p-cout').value);
  var year = document.getElementById('p-year').value;
  var fileInput = document.getElementById('file-input');
  var cover = document.getElementById('p-сover').value;
  var age = document.getElementById('p-age').value;
  var about = document.getElementById('p-about').value;

  if (name.trim() === '') {
    alert('Поле "Назва" не должно быть пустым.');
    return false;
  }

  if (author.trim() === '') {
    alert('Поле "Автор" не должно быть пустым.');
    return false;
  }

  if (isNaN(price) || !Number.isFinite(price)) {
    alert('Поле "Ціна" должно содержать только числовое значение.');
    return false;
  }

  if (publisher.trim() === '') {
    alert('Поле "Видавництво" не должно быть пустым.');
    return false;
  }

  if (genre.trim() === '') {
    alert('Поле "Жанр" не должно быть пустым.');
    return false;
  }

  if (language.trim() === '') {
    alert('Поле "Мова" не должно быть пустым.');
    return false;
  }
  
  if (age.trim() === '') {
    alert('Поле "Вік" не должно быть пустым.');
    return false;
  }
  
  if (cover.trim() === '') {
    alert('Поле "Обкладинка" не должно быть пустым.');
    return false;
  }
  
  if (about.trim() === '') {
    alert('Поле "Про книжку" не должно быть пустым.');
    return false;
  }

  if (!Number.isInteger(pageCount)) {
    alert('Поле "К-ть сторінок" должно содержать только целочисленное значение.');
    return false;
  }

  if (!/^\d{4}$/.test(year)) {
    alert('Поле "Рік випуску" должно содержать только четырехзначное числовое значение.');
    return false;
  }

  if (fileInput.files.length === 0) {
    alert('Пожалуйста, выберите файл для загрузки.');
    return false;
  }

  return true;
}

 function addnewtoArr(){
        if(!(editions.includes($('#i-publisher').val()))){
              editions.push($('#i-publisher').val());
          }
        if(!(author.includes($('#i-author').val()))){
              author.push($('#i-author').val());
          }
        if(!(type.includes($('#i-genre').val()))){
              type.push($('#i-genre').val());
          }
        if(!(language.includes($('#p-lang').val()))){
              language.push($('#p-lang').val());
          }
        if(!(cover.includes($('#p-сover').val()))){
              cover.push($('#p-сover').val());
          }
    
        $("#ex-edon").css("display", "none");
        $("#ex-author").css("display", "none");
        $("#ex-gere").css("display", "none");
        $("#ex-lang").css("display", "none");
        $("#ex-cover").css("display", "none");
  }

$('#add-item-form').submit(function (event) {
  event.preventDefault(); // Отменяем стандартное поведение формы

  // Отправляем AJAX запрос на сервер
  if (validateForm()) {
    var formData = new FormData(this);

    $.ajax({
      url: '../php/additem.php',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response === '200') {
           addnewtoArr();
           $('#add-item-form')[0].reset();
           $('.drop-area img').attr('style', "display:none");
           $('#add-item-error').val("Книжка додана на сайт");
           $('#add-item-error').attr('style', "");
           alert("Книжка додана на сайт");
        } else if (response === '500') {
          $('#add-item-error').val("Сталася помилка");
          $('#add-item-error').attr('style', "");
        }
      },
      error: function(xhr, status, error) {
        // Обработка ошибки запроса
      }
    });
  }
});

</script>