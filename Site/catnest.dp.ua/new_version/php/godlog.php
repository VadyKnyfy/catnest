<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key_id = $_POST['key_id'];
    $password = $_POST['password'];
     $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
     $result = mysqli_query($connect,"SELECT * FROM logpass WHERE login='$key_id' AND password='$password'");
         $connect->close();
     if ($result->num_rows > 0) {
        $id = mysqli_fetch_all($result)[0][0];
        $expires = strtotime('today 18:00');
        setcookie('employee',$id,$expires, '/');
        header("Location:../pages/login.php ");
        exit();
    }
    // Иначе, возвращаем ответ "error"
    else {
        echo($id);
        header("Location:../pages/main.php ");
    }
    
}else{
 $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
 $result = mysqli_query($connect,"SELECT * FROM security WHERE securitycode='".$_COOKIE['somesthing']."'");
               $connect->close();
$code= mysqli_fetch_all($result)[0][1];
if(isset($_COOKIE['somesthing'])
                    && 
    $_COOKIE['somesthing']!=''
                    &&
    $_COOKIE['somesthing']==$code){
        echo("lastcheak");
            setcookie('somesthing'," ",time()-360, '/');
            setcookie($code," ",time()+360,'/');
            header('Location: ../pages/adminlogin.php');
            exit();
        } 
}
?>