<?php
function login($login,$password): void{
    $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");

    // Проверяем, есть ли пользователь с таким логином и паролем
    $result = mysqli_query($connect,"SELECT hash_pass FROM logpas WHERE login='$login' AND password='$password'");
    // Если пользователь найден, возвращаем ответ "success"
    if ($result->num_rows > 0) {
        $hash = mysqli_fetch_all($result)[0][0];
        setcookie('hashcode', $hash, time()+3600, '/');
        setcookie('auth', "1", time()+3600, '/');
        echo "1";
        
    }
    // Иначе, возвращаем ответ "error"
    else {
        echo "0";
    }

    // Закрываем соединение с базой данных
    $connect->close();
}
// Сначала проверяем, была ли форма отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем значения полей логина и пароля
    $login = $_POST['login'];
    $password = $_POST['password'];
    // Подключаемся к базе данных
        $patternf = 'Manager@';
        $patterns = '@Manager';
        if(($patternf == substr($login, 0, 8))){
             $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
              $result = mysqli_query($connect,"SELECT * FROM security WHERE securitycode='".substr($login,8,20)."'");
                if (($result->num_rows > 0)) {
                        $secure=substr($login,8,20);
                        $login=substr($login,29);
                        $result = mysqli_query($connect,"SELECT hash_pass , Keylp FROM `logpass` WHERE `login`='".$login."' and `password` = '".$password."' ");
                         if ($result->num_rows > 0) {
                             $result = mysqli_fetch_all($result)[0]; 
                             $hashpass = $result[0];
                             $id = $result[1];
                             $rigths= mysqli_fetch_all(mysqli_query($connect,"SELECT `Rights` FROM `employees` WHERE `id_logpass`= ".$id." "))[0][0];
                             $hash = password_hash($secure."+rights".$rigths, PASSWORD_DEFAULT)."+".$hashpass;
                             $expires = strtotime('today 11:59 PM');
                             setcookie('cookie_exp', $hash, $expires);
                             setcookie('auth', "1", $expires,'/');
                             echo "1";
                         }else{
                             echo '0';
                             $connect->close();
                         }
                
                }else {
                    login($login,$password); 
                    $connect->close();
                    
                }
        }else{
            login($login,$password);
        }
}else{
    header("Location: ../pages/404.php");
}
?>