<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CatNest</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- Sliders -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- MATERIAL CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <script src="../scripts/login.js"></script>
  <script>
  function getlogin(a) {
    console.log(a);
    window.location.href = '../pages/login.ph';
  }
  </script>
  <header class="unselectable">
    <nav>
      <div class="nav__container">
        <div class="logo">
          <a href="#">
            <h1>Cat</h1>
            <svg id="logo" viewBox="0 0 24 24">
              <path
                d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z" />
            </svg>
            <h1>Nest</h1>
          </a>
        </div>
        <ul class="nav__menu">
          <li class="nav__link"><a href="#">Художня література</a></li>
          <li class="nav__link"><a href="#">Освітня література</a></li>
          <li class="nav__link"><a href="#">Саморозвиток</a></li>
          <li class="nav__link"><a href="#">Дитяча</a></li>
          <li class="nav__link"><a href="#">Акції</a></li>
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
            <a href="#"><span class="material-icons-sharp">shopping_cart</span></a>
          </li>
          <li>
          <li>
            <?php
                 if(isset($_COOKIE['id']) AND $_COOKIE['id']!=''){
             echo('
            <span class="material-icons-sharp" id="!loginbtn" onclick="window.location.href = \'../pages/login.php\'">
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
          <h3>LOGIN NOW</h3>
          <p id="login-error" style="display:none; color:red;">Не вірний логін або пароль</p>
          <input type="email" placeholder="Ел.пошта" name="login" class="login-box" />
          <input type="password" placeholder="Пароль" name="password" class="login-box" />
          <p>Забули пароль <a href="">Натисніть тут</a></p>
          <p>Не маєте облікового запису <a id="create-btn">Створити зараз</a></p>
          <input type="submit" value="Увійти" class="login-btn" />
        </form>

      </div>
    </nav>
  </header>
  <!-- REGISTER -->
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
      <input type="password" placeholder="Підтвердження пороля" class="register-box" name="confirm_password" required
        minlength="6" maxlength="20" />
      <input type="submit" value="Зареєструватися" class="register-btn" />
      <!-- <script src="../scripts/login.js"></script> -->
    </form>
    <script src="../scripts/register.js"></script>
  </div>
  <main>
    <!-- Новинки -->
    <div class="new-books unselectable">
      <label>Новинки</label>
      <div id="new-book-left-btn"><span class="material-icons-sharp">arrow_circle_left</span></div>
      <div class="swiper new-books-slider">
        <div class="swiper-wrapper new-books-wrapper">
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b2.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b1.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b3.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b6.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b2.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b4.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b3.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b5.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b1.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b2.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b6.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b2.jpg" alt="new_book" /></a>
          </div>
          <div class="swiper-slide new-book">
            <a href=""><img src="../image/books/b4.jpg" alt="new_book" /></a>
          </div>
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
        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b1.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b3.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b3.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b3.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b3.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

        <div class="book-panel">
          <div class="book-image"><img src="../image/books/b3.jpg" /></div>
          <div class="book-name">
            <p>Book name</p>
          </div>
          <div class="book-bottom">
            <p class="discount">330 UAH</p>
            <p class="price">220 UAH</p>
            <button class="buy-btn">Купити</button>
          </div>
        </div>

      </div>


      <div id="morebut">
        <button id="more_btn">More</button>
      </div>
    </div>
    <!---->


    </div>
  </main>
  <footer>
    <div class="footer-panel">
      <div class="footer-name">
        <h1>Інформація</h1>
      </div>
      <div class="footer-content">
        <ul>
          <a href="">
            <li>Умови оплати і доставки</li>
          </a>
          <a href="">
            <li>Дисконтна програма</li>
          </a>
          <a href="">
            <li>Подарункові сертифікати</li>
          </a>
          <a href="">
            <li>Повернення та обмін товару</li>
          </a>
          <a href="">
            <li>Політика конфіденційності</li>
          </a>
          <a href="">
            <li>Користувацька угода</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="footer-panel">
      <div class="footer-name">
        <h1>Компанія та сайт</h1>
      </div>
      <div class="footer-content">
        <ul>
          <a class="ali" href="">
            <li>Про нас</li>
          </a>
          <a class="ali" href="">
            <li>Партнери</li>
          </a>
          <a class="ali" href="">
            <li>Документація</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="footer-panel">
      <div class="footer-name social">
        <h1>Соціальні мережі</h1>
      </div>
      <div class="footer-content social">
        <!-- facebook -->
        <a href="">
          <svg viewBox="-5.5 0 32 32">
            <path
              d="M1.188 5.594h18.438c0.625 0 1.188 0.563 1.188 1.188v18.438c0 0.625-0.563 1.188-1.188 1.188h-18.438c-0.625 0-1.188-0.563-1.188-1.188v-18.438c0-0.625 0.563-1.188 1.188-1.188zM14.781 17.281h2.875l0.125-2.75h-3v-2.031c0-0.781 0.156-1.219 1.156-1.219h1.75l0.063-2.563s-0.781-0.125-1.906-0.125c-2.75 0-3.969 1.719-3.969 3.563v2.375h-2.031v2.75h2.031v7.625h2.906v-7.625z">
            </path>
          </svg>
        </a>
        <!-- Instagram -->
        <a href="">
          <svg viewBox="0 0 24 24">
            <path
              d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z" />
          </svg>
        </a>
        <!-- YouTuBe -->
        <a href="">
          <svg viewBox="0 0 32 32">
            <path
              d="M24.325 8.309s-2.655-.334-8.357-.334c-5.517 0-8.294.334-8.294.334A2.675 2.675 0 0 0 5 10.984v10.034a2.675 2.675 0 0 0 2.674 2.676s2.582.332 8.294.332c5.709 0 8.357-.332 8.357-.332A2.673 2.673 0 0 0 27 21.018V10.982a2.673 2.673 0 0 0-2.675-2.673zM13.061 19.975V12.03L20.195 16l-7.134 3.975z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="footer-panel">
      <div class="footer-name">
        <h1>Контакти</h1>
      </div>
      <div class="footer-content contacts">
        <div class="contact">
          <span class="material-icons-sharp unselectable">call</span>
          <h4>+38 (044) 227-27-80</h4>
        </div>
        <div class="contact">
          <span class="material-icons-sharp unselectable">email</span>
          <h4>info@catnest.dp.ua</h4>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="../scripts/index.js"></script>
  <script src="../scripts/main_slider.js"></script>
</body>

</html>