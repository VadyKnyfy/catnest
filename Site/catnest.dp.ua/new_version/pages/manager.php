<?php 
  require_once("../php/verify.php"); //для роботи без використання серверу за коментувати цей рядок.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CatNest</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/profile.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <?php 
    include('utility/header.php')
  ?>

  <main>
    <header>
      <div class="profile">
        <div class="profile-name">
          <h1>Профіль</h1>
        </div>
      </div>
    </header>

    <article>
      <?php 
        include('utility/profile/data.php');
        // include('utility/profile/stats.php');
        include('utility/profile/add-item.php');        
        include('utility/profile/edit-item.php');
        include('utility/profile/order.php');
      ?>
    </article>

    <aside class="unselectable">
      <div class="side-nav-btn"><a href="#data">Особисті дані</a> </div>
      <div class="side-nav-btn"><a href="#order">Обробка замовлень</a></div>
      <div class="side-nav-btn"><a href="#stats">Статистика</a></div>
      <div class="side-nav-btn section product-main-btn">Адміністрування товару</div>
      <div class="side-nav-btn subsection product-btn"><a href="#add-item">Додати книгу</a></div>
      <div class="side-nav-btn subsection product-btn"><a href="#edit-item">Редагувати книгу</a></div>
      <!--<div class="side-nav-btn section">Вихід</div>-->
      <div class="side-nav-btn" style= "background-color: #ec5454;" onclick=exitprofileM() >Вихід</div>
      <script>
      function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}
      function  exitprofileM(){
          deleteCookie('cookie_exp');
          deleteCookie('auth');
      }
      </script>
    </aside>
  </main>

  <?php 
    include('utility/footer.php')
  ?>
  <script src="../scripts/profile.js"></script>
</body>

</html>