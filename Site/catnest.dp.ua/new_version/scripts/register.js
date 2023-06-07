// <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
// function validateForm() {
//   document.getElementById('error-password').style.display = 'none'
//   var x = document.forms['registerform']['password'].value
//   var y = document.forms['registerform']['confirm_password'].value

//   if (x != y) {
//     document.getElementById('error-password').style.display = 'inline'
//     return false
//   } else {
//   }
// }

$('#registerform').submit(function (event) {
  event.preventDefault()
  var lastName = $('input[name="surname"]').val()
  var firstName = $('input[name="name"]').val()
  var email = $('input[name="email"]').val()
  var phone = $('input[name="phone"]').val()
  var password = $('input[name="password"]:eq(1)').val()
  var confirmPassword = $('input[name="confirm_password"]').val()
  var error = ''
  if (lastName.trim() == '') {
    error += 'Введіть прізвище.<br>'
  }
  if (firstName.trim() == '') {
    error += "Введіть ім'я.<br>"
  }
  if (email.trim() == '') {
    error += 'Введіть email.<br>'
  } else {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
    if (!emailPattern.test(email)) {
      error += 'Введіть коректний email.<br>'
    }
  }
  if (phone.trim() == '') {
    error += 'Введіть телефон.<br>'
  } else {
    var phonePattern = /^(\+?38)?\s*\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{2}[\s.-]?\d{2}$/
    if (!phonePattern.test(phone)) {
      error += 'Введіть коректний номер телефону.<br>'
    }
  }
  if (password.trim() == '') {
    error += 'Введіть пароль.<br>'
  }
  if (confirmPassword.trim() == '') {
    error += 'Введіть підтвердження пароля.<br>'
  } else if (password != confirmPassword) {
    error += 'Підтвердження пароля не збігається з паролем.<br>'
  }
  if (error != '') {
    $('#register-error').html(error)
  } else {
      document.getElementById("register-error").innerHTML = "";
    // $('#registerform')[0].submit()
    event.preventDefault() // Отменяем стандартное поведение формы
    // Отправляем AJAX запрос на сервер
    $.ajax({
      url: '../php/register.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function (response) {
        if (response == 200) {
  // Получаем ссылку на кнопку
  var button = document.getElementById("submt");
  var label = document.getElementById("rpt_lb"); 
 label.value = "Відправити ще раз";
  // Блокируем кнопку на 30 секунд
  button.disabled = true;
  label.style = "display:block; color:red;";
  button.className="register-btn-disabled";
  var secondsLeft = 30;
    $('.register').removeClass('active');
        requestEmailVerification()
  var countdownTimer = setInterval(function() {
    secondsLeft--;
    if (secondsLeft > 0) {
      label.innerHTML = 'Повтор через: ' + secondsLeft + ' секунд';
      button.value= "Зачекайте";
    } else {
      clearInterval(countdownTimer);
      button.disabled = false;
       button.className="register-btn";
        label.style = "display:none;";
      label.innerHTML = "Спробувати ще раз?";
      button.value= "Зарееструватися";
    }
  }, 1000); // 1 секунда в миллисекундах
        } else if (response == 201) {
          document.getElementById("register-error").innerHTML="Повідомлення вже надісланно.<p></p>Спробуйте, ще через 30 хвилин.<br>";
        } else if (response == 202){
            document.getElementById("register-error").innerHTML="Аккаунт з таким email`ом вже зареєстрований<br>";
        } else if (response == 500){
             document.getElementById("register-error").innerHTML="Сталася помилка при відправленні повідомлення, <p></p> перевірте введені дані, та спробуйте ще раз<br>";
        }
      },
      error: function () {
        console.log('ajax error script')
      },
    })
  }
})
