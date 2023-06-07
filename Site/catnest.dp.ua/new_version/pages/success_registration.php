<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../image/utility/cat-icon.png" type="image/x-icon" />
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/book.css" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Реєстрація завершена</title>
  <style>
  body {
      width: 100%;
      height: 100%;
      
  }
  
  .footer {
  }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: var(--white);
      padding: 20px;
      margin-bottom: 6.65rem;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      font-family: e-Ukraine-Regular;
      /*text-align: justify;*/
    }
    
    main {
        height: 100%;
        width: 100%;
    }

    .container h1 {
        color: var(--color-primary);
      /*color: #333333;*/
      font-size: 24px;
      margin-bottom: 20px;
    }

    .container p {
        color: var(--color-primary);
      /*color: #666666;*/
      font-size: 16px;
      margin-bottom: 10px;
    }

  </style>
</head>

<body>
  <?php 
    include('utility/header.php');
  ?>
  
  <main>
      <div class="container">
    <h1>Повідомлення про успішну реєстрацію</h1>
    <p>Вітаємо, <?php echo($_GET['name'])?>!</p>
    <p>Ви успішно зареєструвалися на нашому сайті. Тепер ви можете увійти в свій аккаунт.</p>
    <p>Якщо у вас виникли які-небудь питання або проблеми, будь ласка, зверніться до нашої служби підтримки.</p>
    <p>Дякуємо за реєстрацію!</p>
  </div>  
    </main>
  
  <?php 
    include('utility/footer.php')
  ?>
</body>

</html>