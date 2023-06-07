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
  <script src="../scripts/dev/jquery.cookie.js"></script>
</head>

<body>
    <?php 
   require_once("../php/verify.php"); //для роботи без використання серверу за коментувати цей рядок.
   $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
   //echo($_COOKIE["hashcode"]);
$result = mysqli_query($connect,'SELECT * FROM `clientreg` WHERE `clientreg`.`Nom` = ( SELECT `logpas`.`id` FROM `logpas` WHERE `logpas`.`hash_pass` = "'.$_COOKIE["hashcode"].'" )');
$client = mysqli_fetch_all($result)[0];
$result = mysqli_query($connect,'SELECT login,password FROM `logpas` WHERE hash_pass = "'.$_COOKIE["hashcode"].'" ');
$clienlp = mysqli_fetch_all($result)[0];
$result =  mysqli_query($connect,'SELECT * FROM `orders` WHERE cemail =\''.$client[4].'\'');
$sql = 'SELECT * FROM `orders` WHERE cemail =\''.$client[4].'\'';
$historyord = mysqli_fetch_all($result);
//echo("<script> const historyarror = ".$historyord."; </script>");
$connect->close();
?>
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
        include('utility/profile/change-password.php');        
        include('utility/profile/history.php');
      ?>
      <div class="content" id="loyalty"></div>
    </article>
    <aside class="unselectable">
      <div class="side-nav-btn"><a href="#data">Особисті дані</a> </div>
      <div class="side-nav-btn"><a href="#change-password">Змінити пароль</a></div>
      <div class="side-nav-btn"><a href="#history">Історія замовлень</a></div>
      <div class="side-nav-btn"><a href="#loyalty">Програма лояльності</a></div>
      <div class="side-nav-btn" style= "background-color: #ec5454;" onclick=exitprofile() >Вихід</div>
    </aside>
  </main>

  <?php 
    include('utility/footer.php')
  ?>
  <script src="../scripts/profile.js"></script>
</body>

</html>