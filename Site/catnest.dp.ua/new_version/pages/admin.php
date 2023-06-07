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
      ?>
      <div class="content" id="add-item"></div>
      <div class="content" id="edit-item"></div>
      <div class="content" id="add-promotion"></div>
      <div class="content" id="edit-promotion"></div>
      <div class="content" id="add-manager"></div>
      <div class="content" id="edit-account"></div>
    </article>
    <aside class="unselectable">
      <div class="side-nav-btn"><a href="#data">Особисті дані</a> </div>
      <div class="side-nav-btn section product-main-btn">Адміністрування товару</div>
      <div class="side-nav-btn subsection product-btn"><a href="#add-item">Додати книгу</a></div>
      <div class="side-nav-btn subsection product-btn"><a href="#edit-item">Редагувати книгу</a></div>
      <div class="side-nav-btn section promotion-main-btn">Акціїні пропозиції</div>
      <div class="side-nav-btn subsection promotion-btn"><a href="#add-promotion">Додати АТ</a></div>
      <div class="side-nav-btn subsection promotion-btn"><a href="#edit-promotion">Редагувати АТ</a></div>
      <div class="side-nav-btn section manager-main-btn">Адміністрування аккаунтів</div>
      <div class="side-nav-btn subsection manager-btn"><a href="#add-manager">Створення МА</a></div>
      <div class="side-nav-btn subsection manager-btn"><a href="#edit-account">Редагувати аккаунти</a></div>
      <!--<div class="side-nav-btn section">Вихід</div>-->
      <div class="side-nav-btn" style= "background-color: #ec5454;" onclick=exitprofile() >Вихід</div>
    </aside>
  </main>

  <?php 
    include('utility/footer.php')
  ?>
  <script src="../scripts/profile.js"></script>
</body>

</html>