<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Довідка | Книжковий інтернет-магазин "CatNest"</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <style>
  /*main {*/
  /*  margin-top: 8rem;*/
  /*  margin-bottom: 1rem;*/
  /*  display: flex;*/
  /*  justify-content: center;*/
  /*  align-items: center;*/
  /*  flex-direction: column;*/
  /*  gap: 1rem;*/
  /*}*/

  /*main a {*/
  /*  display: flex;*/
  /*  justify-content: center;*/
  /*  align-items: center;*/
  /*}*/

  /*img {*/
  /*  width: 80%;*/
  /*}*/

  body {
    margin: 0;
    padding: 0;
  }

  .content {
    font-family: e-Ukraine-Light;
    display: flex;
    color: var(--black);
  }

  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    /*background-color: var(--color-bg);*/
    padding: 20px;
  }

  .sections {
    /*background-color: red;*/
    width: 22rem;
    height: 29rem;
    padding: 1rem;
    border-radius: 15px;
    margin-bottom: 20px;
    margin-top: 6.5rem;
  }

  .sections button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: var(--color-bg);
    color: var(--color-primary);
    border: 1px solid var(--color-primary);
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .sections button.active {
    background-color: var(--color-bg1);
    color: #fff;
  }

  main {
    flex: 1;
    margin-top: 1rem;
    margin-left: 24rem;
    padding: 20px;
  }

  section {
    margin-bottom: 2rem;
  }

  /* Стили кнопок разделов */
  .section-button {
    display: block;
    width: 20rem;
    padding: 8.8px;
    background-color: var(--color-bg);
    color: var(--color-primary);
    border: 1px solid var(--color-primary);
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    text-decoration: none;
  }

  .section-button.active {
    background-color: var(--color-bg1);
    color: #fff;
  }

  .section-button:hover {
    background-color: var(--color-primary);
    color: #fff;
  }

  main h2 {
    margin-top: 4rem;
    margin-bottom: 1rem;
    text-align: center;
  }

  main p,
  main ol {
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
    font-family: e-Ukraine-Regular;

  }
  
   @media screen and (max-width: 685px) {
       .sections {
    height: 32rem;
  }
   }
  </style>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <?php 
    include('utility/header.php')
  ?>

  <div class="content">
    <aside class="sidebar">
      <nav class="sections">
        <a class="section-button" href="#section-1">Головна сторінка</a>
        <a class="section-button" href="#section-2">Категорії</a>
        <a class="section-button" href="#section-3">Сторінка книги</a>
        <a class="section-button" href="#section-4">Корзина</a>
        <a class="section-button" href="#section-5">Сторінка замовлення</a>
        <a class="section-button" href="#section-6">Поле реєстрації</a>
        <a class="section-button" href="#section-7">Поле авторизації</a>
        <a class="section-button" href="#section-8">Профіль користувача</a>

        <!-- Додайте кнопки для остальних розділів -->
      </nav>
    </aside>

    <main>
      <section id="section-1">
        <h2>Головна сторінка</h2>
        <h4 style="margin-bottom: 10px;">Головна сторінка має наступний вигляд:</h4>
        <img style="margin-bottom: 1rem; width: 100%; border: 1px solid;" src="../image/utility/faq/main.png">
        <h4 style="margin-bottom: 10px;">Головна сторінка складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Навігація</li>
          <li style="margin-bottom: 10px;">2. Пошук</li>
          <li style="margin-bottom: 10px;">3. Корзина</li>
          <li style="margin-bottom: 10px;">4. Профіль</li>
          <li style="margin-bottom: 10px;">5. Новинки</li>
          <li style="margin-bottom: 10px;">6. Банер пропозицій</li>
          <li style="margin-bottom: 10px;">7. Вибір читачів</li>
          <li style="margin-bottom: 10px;">8. Інформація про сайт</li>
        </ol>

        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">
            <li style="margin-bottom: 10px;">1. Навігація дозволяє переходити між сторінками сайту (художня
              література,
              Освітня література, саморозвиток, дитяча). Натискання на логотип сайту поверне вас на головну сторінку.
            </li>
              <li style="margin-bottom: 5px;">2. Пошук дозволяє шукати конкретний товар на сайті</li>
              <li style="margin-bottom: 5px;">3. Корзина дозволяє перейти до корзини покупок</li>
              <li style="margin-bottom: 5px;">4. Профіль надає можливість користувачу/менеджеру/адміністратору увійти до
                свого облікового запису, зареєструватися або відновити пароль</li>
          </li>
          <li style="margin-bottom: 10px;">5. Новинки це слайдер-банер з новими книгами що додались на сайт, для навігації нажимайте на стрілочки «вправо» та «вліво»</li>
          <li style="margin-bottom: 10px;">6. Банер пропозицій це слайдер-банер з пропозиціями магазину, для навігації
            нажимайте на стрілочки «вправо» та «вліво»</ li>
          <li style="margin-bottom: 10px;">7. Вибір читачів це список книг які клієнти сайту купують найчастіше</li>
          <li style="margin-bottom: 10px;">8. Інформація про сайт це розділ сайту де є посилання на соціальні мережі,
            контактна та спільна інформація</li>
        </ol>
      </section>

      <section id="section-2">
        <h2>Категорії</h2>
        <h4 style="margin-bottom: 10px;">Сторінка «Художня література» виглядає так:</h4>
        <img style="margin-bottom: 1rem; width: 100%; border: 1px solid;" src="../image/utility/faq/booklist.png">
        <h4 style="margin-bottom: 10px;">Сторінка «Художня література» складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Меню навігації (Навігація + Пошук + Корзина + Профіль)</li>
          <li style="margin-bottom: 10px;">2. Блок з книгами</li>
          <li style="margin-bottom: 10px;">3. Блок фільтрів по параметрам: мова, автори, видавництво, обкладинка</li>
          <li style="margin-bottom: 10px;">4. Блок з книгою</li>
          <li style="margin-bottom: 10px;">5. Інформація про сайт</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">1. Меню навігації дозволяє переходити між сторінками сайту (художня
              література,
              Освітня література, саморозвиток, дитяча). Натискання на логотип сайту поверне вас на головну сторінку.
            </p>
            <ul style="margin-left: 20px; margin-bottom: 10px;">
              <li style="margin-bottom: 5px;">a. Пошук дозволяє шукати конкретний товар на сайті</li>
              <li style="margin-bottom: 5px;">b. Корзина дозволяє перейти до корзини покупок</li>
              <li style="margin-bottom: 5px;">c. Профіль надає можливість користувачу/менеджеру/адміністратору увійти до
                свого облікового запису, зареєструватися або відновити пароль</li>
            </ul>
          </li>
          <li style="margin-bottom: 10px;">2. Блок з книгами. В ньому розташовані усі книги що підходять під умови
            фільтрації</li>
          <li style="margin-bottom: 10px;">3. Блок фільтрів по параметрам це блок в якому розташовані фільтри завдяки ви
            можете шукати потрібний вам товар. Присутні фільтри: мова, автори, видавництво, обкладинка</li>
          <li style="margin-bottom: 10px;">4. Блок з книгою це блок в якому розташовані: зображення обкладинки книги,
            назва книги, ціна та кнопка «купити», натиснувши яку книга додається вам у кошик. Натиснувши на книгу ви
            перейдете на сторінку книги</li>
          <li style="margin-bottom: 10px;">5. Інформація про сайт це розділ сайту де є посилання на соціальні мережі,
            контактна та спільна інформація</li>
        </ol>
      </section>

      <section id="section-3">
        <h2>Сторінка з книгою</h2>
        <h4 style="margin-bottom: 10px;">Сторінка книги виглядає так:</h4>
        <img style="margin-bottom: 1rem; width: 100%; border: 1px solid;" src="../image/utility/faq/book.png">
        <h4 style="margin-bottom: 10px;">Сторінка книги складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Меню навігації (Навігація + Пошук + Корзина + Профіль)</li>
          <li style="margin-bottom: 10px;">2. Інформація про книгу + кнопка купити</li>
          <li style="margin-bottom: 10px;">3. Книги за темою</li>
          <li style="margin-bottom: 10px;">4. Рекомендовано вам</li>
          <li style="margin-bottom: 10px;">5. Інформація про сайт</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">1. Меню навігації дозволяє переходити між сторінками сайту (художня
              література, Освітня література, саморозвиток, дитяча). Натискання на логотип сайту поверне вас на головну
              сторінку.</p>
            <ul style="margin-left: 20px; margin-bottom: 10px;">
              <li style="margin-bottom: 5px;">a. Пошук дозволяє шукати конкретний товар на сайті</li>
              <li style="margin-bottom: 5px;">b. Корзина дозволяє перейти до корзини покупок</li>
              <li style="margin-bottom: 5px;">c. Профіль дозволяє увійти у акаунт користувача/менеджера/адміністратора
              </li>
            </ul>
          </li>
          <li style="margin-bottom: 10px;">2. Інформація про книгу – це блок в якому розташована вся інформація про
            книгу: зображення обкладинки, назва, характеристики (видавництво, автор, жанр, мова, рік видання, сторінки,
            обкладинка, вік), опис книги, ціна та кнопка купити, натиснувши яку книга додається вам у кошик</li>
          <li style="margin-bottom: 10px;">3. Книги за темою – блок у якому знаходяться книги схожі за темою з товаром,
            який ви переглядаєте</li>
          <li style="margin-bottom: 10px;">4. Рекомендовано вам – блок у якому знаходяться книги, що рекомендовані для
            вас, на основі ваших замовлень</li>
          <li style="margin-bottom: 10px;">5. Інформація про сайт – це розділ сайту, де є посилання на соціальні мережі,
            контактна та загальна інформація</li>
        </ol>
      </section>

      <section id="section-4">
        <h2>Корзина</h2>
        <h4 style="margin-bottom: 10px;">Корзина виглядає так:</h4>
        <img style="margin-bottom: 1rem; max-width: 100%; height: auto;" src="../image/utility/faq/cart.png">
        <h4 style="margin-bottom: 10px;">Корзина складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Блок корзини</li>
          <li style="margin-bottom: 10px;">2. Блок з доданою книгою</li>
          <li style="margin-bottom: 10px;">3. Загальна вартість</li>
          <li style="margin-bottom: 10px;">4. Кнопка "Перейти до сплати"</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">1. Блок корзини – в цьому блоці знаходяться усі книги, що ви додали у
              корзину, їх загальна вартість та кнопка "Перейти до сплати".</p>
          </li>
          <li style="margin-bottom: 10px;">2. Блок з доданою книгою – у цьому блоку присутня інформація про книгу:
            зображення обкладинки, назва, артикул, кількість цього товару та кнопка видалення.</li>
          <li style="margin-bottom: 10px;">3. Загальна вартість – написана загальна вартість покупки.</li>
          <li style="margin-bottom: 10px;">4. Кнопка "Перейти до сплати" - при натисканні цієї кнопки відкривається
            сторінка замовлення.</li>
        </ol>
      </section>

      <section id="section-5">
        <h2>Сторінка замовлення</h2>
        <h4 style="margin-bottom: 10px;">Сторінка замовлення виглядає так:</h4>
    <img style="margin-bottom: 1rem; width: 100%; border: 1px solid;" src="../image/utility/faq/order.png">
        <h4 style="margin-bottom: 10px;">Сторінка замовлення складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Меню навігації (Навігація + пошук + корзина + Профіль)</li>
          <li style="margin-bottom: 10px;">2. Блок замовлення</li>
          <li style="margin-bottom: 10px;">3. У кошику</li>
          <li style="margin-bottom: 10px;">4. Покупець</li>
          <li style="margin-bottom: 10px;">5. Доставка</li>
          <li style="margin-bottom: 10px;">6. Загальна вартість покупки</li>
          <li style="margin-bottom: 10px;">7. Оформити</li>
          <li style="margin-bottom: 10px;">8. Інформація про сайт</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">1. Меню навігації дозволяє переходити між сторінками сайту (художня
              література, Освітня література, саморозвиток, дитяча). Натискання на логотип сайту поверне вас на головну
              сторінку.</p>
            <ul style="margin-left: 20px; margin-bottom: 10px;">
              <li>a. Пошук дозволяє шукати конкретний товар на сайті</li>
              <li>b. Корзина дозволяє перейти до корзини покупок</li>
              <li>c. Профіль дозволяє увійти у акаунт користувача/менеджера/адміністратора</li>
            </ul>
          </li>
          <li style="margin-bottom: 10px;">2. Блок замовлення – це блок, в якому вводяться всі дані для замовлення.</li>
          <li style="margin-bottom: 10px;">3. У кошику – блок, в якому знаходяться усі книги, додані у кошик.</li>
          <li style="margin-bottom: 10px;">4. Покупець – блок, в якому покупцю треба ввести своє ім'я, прізвище, email
            та мобільний телефон.</li>
          <li style="margin-bottom: 10px;">5. Доставка – блок, в якому треба обрати область, місто та відділення Нової
            Пошти для доставки.</li>
          <li style="margin-bottom: 10px;">6. Загальна вартість – написана загальна вартість покупки.</li>
          <li style="margin-bottom: 10px;">7. Кнопка "Оформити" - натиснувши на неї пройде оформлення замовлення і
            прийде повідомлення про замовлення.</li>
          <li style="margin-bottom: 10px;">8. Інформація про сайт – розділ сайту, де є додаткова інформація про
            соціальні мережі, контакти та іншу корисну інформацію.</li>
        </ol>
      </section>

      <section id="section-6">
        <h2>Поле реєстрації</h2>
        <h4 style="margin-bottom: 10px;">Реєстрація на сайті виглядає так:</h4>
        <img style="margin-bottom: 1rem; max-width: 100%; height: auto;" src="../image/utility/faq/register.png">
        <h4 style="margin-bottom: 10px;">Поле реєстрації складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Поле реєстрації</li>
          <li style="margin-bottom: 10px;">2. Кнопка виходу з поля реєстрації</li>
          <li style="margin-bottom: 10px;">3. Кнопка "Зареєструватися"</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Поле реєстрації – поле, в якому треба ввести свої дані для реєстрації.
          </li>
          <li style="margin-bottom: 10px;">2. Кнопка виходу з поля реєстрації – натиснувши на кнопку, користувач вийде з
            поля реєстрації.</li>
          <li style="margin-bottom: 10px;">3. Кнопка "Зареєструватися" - дає змогу користувачу зареєструватися на сайті.
          </li>
        </ol>
      </section>

      <section id="section-7">
        <h2>Поле авторизації</h2>
        <h4 style="margin-bottom: 10px;">Поле авторизації виглядає так:</h4>
    <img style="margin-bottom: 1rem; max-width: 100%; height: auto;" src="../image/utility/faq/login.png">
        <h4 style="margin-bottom: 10px;">Поле авторизації складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Поля логін та пароль</li>
          <li style="margin-bottom: 10px;">2. Забули пароль</li>
          <li style="margin-bottom: 10px;">3. Немає облікового запису</li>
          <li style="margin-bottom: 10px;">4. Кнопка "Увійти"</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Поля логін та пароль – поля, в які треба ввести логін та пароль.</li>
          <li style="margin-bottom: 10px;">2. Забули пароль – якщо користувач забув пароль, він може натиснути на
            виділену фразу "Натисніть тут" і відкриється форма відновлення паролю.</li>
          <li style="margin-bottom: 10px;">3. Немає облікового запису – якщо користувач не має облікового запису, він
            може натиснути на виділену фразу "Створити зараз" і відкриється форма реєстрації.</li>
          <li style="margin-bottom: 10px;">4. Кнопка "Увійти" - натиснувши на кнопку користувач увійде в акаунт.</li>
        </ol>
      </section>

      <section id="section-8">
        <h2>Профіль користувача</h2>
        <h4 style="margin-bottom: 10px;">Профіль користувача виглядає так:</h4>
        <img style="margin-bottom: 1rem; width: 100%; border: 1px solid;" src="../image/utility/faq/profile.png">
        <img style="margin-bottom: 1rem; max-width: 100%; height: auto;" src="../image/utility/faq/profile-changepassword.png">
        <img style="margin-bottom: 1rem; max-width: 100%; height: auto;" src="../image/utility/faq/profile-history.png">
        <h4 style="margin-bottom: 10px;">Сторінка замовлення складається з наступних компонентів:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Меню навігації (Навігація + пошук + корзина + Профіль)</li>
          <li style="margin-bottom: 10px;">2. Вкладка "Особисті дані"</li>
          <li style="margin-bottom: 10px;">3. Особиста інформація користувача</li>
          <li style="margin-bottom: 10px;">4. Вкладка "Змінити пароль"</li>
          <li style="margin-bottom: 10px;">5. Блок змінення паролю</li>
          <li style="margin-bottom: 10px;">6. Вкладка "Історія замовлень"</li>
          <li style="margin-bottom: 10px;">7. Блок історії замовлень</li>
          <li style="margin-bottom: 10px;">8. Вкладка "Програма лояльності"</li>
          <li style="margin-bottom: 10px;">9. Кнопка "Вихід"</li>
          <li style="margin-bottom: 10px;">10. Інформація про сайт</li>
        </ol>
        <h4 style="margin-bottom: 5px;">Детальніше про компоненти:</h4>
        <ol style="margin-left: 20px; margin-bottom: 20px;">
          <li style="margin-bottom: 10px;">1. Меню навігації дозволяє переходити між сторінками сайту (художня
            література, Освітня література, саморозвиток, дитяча). Натискання на логотип сайту поверне вас на головну
            сторінку.
            <ul style="list-style-type: disc; margin-left: 20px;">
              <li>a. Пошук дозволяє шукати конкретний товар на сайті</li>
              <li>b. Корзина дозволяє перейти до корзини покупок</li>
              <li>c. Профіль дозволяє увійти у акаунт користувача/менеджера/адміністратора</li>
            </ul>
          </li>
          <li style="margin-bottom: 10px;">2. Вкладка "Особисті дані" - натиснувши на кнопку "Особисті дані" з’явиться
            блок з особистими даними профілю</li>
          <li style="margin-bottom: 10px;">3. Особиста інформація користувача - у цьому блоку написана вся особиста
            інформація користувача, яку він вказував при реєстрації</li>
          <li style="margin-bottom: 10px;">4. Вкладка "Змінити пароль" - натиснувши на кнопку "Змінити пароль" з’явиться
            блок для змінення паролю користувача</li>
          <li style="margin-bottom: 10px;">5. Блок змінення паролю - у цьому блоку, для змінення паролю акаунту, треба
            ввести новий пароль та підтвердити його, ввівши його ще раз</li>
          <li style="margin-bottom: 10px;">6. Вкладка "Історія замовлень" - натиснувши на кнопку "Історія замовлень"
            з’явиться блок з історією замовлень цього акаунту</li>
          <li style="margin-bottom: 10px;">7. Блок історії замовлень - у цьому блоку зберігається історія всіх замовлень
            акаунту, де буде написано назва замовлення, ціна та дата</li>
          <li style="margin-bottom: 10px;">8. Вкладка "Програма лояльності" - натиснувши на кнопку "Програма лояльності"
            з’явиться блок з інформацією про програму лояльності</li>
          <li style="margin-bottom: 10px;">9. Кнопка "Вихід" - натиснувши на кнопку "Вихід" користувач вийде з акаунту
          </li>
          <li style="margin-bottom: 10px;">10. Інформація про сайт - це розділ сайту, де є посилання на соціальні
            мережі, контактна та спільна інформація</li>
        </ol>
      </section>
    </main>
  </div>

  <?php 
    include('utility/footer.php')
  ?>

  <script>
  $(document).ready(function() {
    const sectionButtons = $('.section-button')
    const sections = $('section')

    sectionButtons.click(function(e) {
      e.preventDefault()

      const targetSectionId = $(this).attr('href')
      const targetSection = $(targetSectionId)
      if (targetSection.length) {
        $('html, body').animate({
            scrollTop: targetSection.offset().top - 80,
          },
          1000
        )
      }
    })

    $(window).scroll(function() {
      const currentSection = sections
        .filter(function() {
          return $(this).offset().top <= $(window).scrollTop() + $(window).height() / 2
        })
        .last()

      const currentButton = sectionButtons.filter(`[href="#${currentSection.attr('id')}"]`)
      sectionButtons.removeClass('active')
      currentButton.addClass('active')
    })
  })
  </script>
</body>

</html>