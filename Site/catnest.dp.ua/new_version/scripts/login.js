function verifay() {
    function loginVed(path, hash) {
  // Создаем элемент формы для отправки POST-запроса
  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", path);

  // Создаем элемент input для передачи хэша
  var input = document.createElement("input");
  input.setAttribute("type", "hidden");
  input.setAttribute("name", "hash");
  input.setAttribute("value", hash);

  // Добавляем элемент input в форму
  form.appendChild(input);

  // Добавляем форму на страницу и отправляем POST-запрос
  document.body.appendChild(form);
  form.submit();}
  
  $.ajax({
    url: '../php/loginafter.php',
    type: 'POST',
    data: $('#login-form').serialize(), // замените '#login-form' на соответствующий селектор вашей формы
    success: function (response) {
        if (response!="500"){
            if(response.split("++")[0] == "user"){
                loginVed("../pages/profile.php", response.split("++")[1]);
            } else if(response.split("++")[0] == "admin"){
                loginVed("../pages/admin.php", response.split("++")[1]);
            } else if(response.split("++")[0] == "manager"){
                loginVed("../pages/manager.php", response.split("++")[1]);
            }
        
    }else  $('#login-error').show(); },
    error: function () {
      console.log('Произошла ошибка при выполнении AJAX запроса');
    }
  });
}
$('#loginform').submit(function (event) {
  event.preventDefault() // Отменяем стандартное поведение формы
  // Отправляем AJAX запрос на сервер
  $.ajax({
    url: '../php/login.php',
    type: 'POST',
    data: $(this).serialize(),
    success: function (response) {
      if (response == 1) {
        verifay();
      } else if (response == 0) {
        $('#login-error').show()
      }
    },
    error: function () {
      console.log('Произошла ошибка при выполнении AJAX запроса')
    },
  })
})

