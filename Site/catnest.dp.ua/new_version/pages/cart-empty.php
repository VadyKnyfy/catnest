<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Порожня корзина  | Книжковий інтернет-магазин "CatNest"</title>
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <style>
  main {
    margin-top: 8rem;
    margin-bottom: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 1rem;
  }

  main a {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  img {
    width: 27%;
  }
  </style>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <?php 
    include('utility/header.php')
  ?>

  <main>
    <a href="main.php">
      <img src="../image/utility/cart-empty.png" alt="">
    </a>
  </main>

  <?php 
    include('utility/footer.php')
  ?>
</body>

</html>