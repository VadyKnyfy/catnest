<?php 
 $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
 $result = mysqli_query($connect,"SELECT * FROM security WHERE id = 1");
 $code= mysqli_fetch_all($result)[0][1];
if(isset($_COOKIE[$code])){
 setcookie($code," ",time()-360,'/');  
}else{
    header("Location: https://catnest.dp.ua/");
}
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="../php/godlog.php" tyle="display:flex;justify-content: center;
flex-direction: column;
width: 20%; ">
            <input type="text" placeholder="key_id" name="key_id" />
            <input type="password" placeholder="Пароль"  name="password" />
            <input type="submit" value="Увійти"  />
          </form>
    </body>
</html>