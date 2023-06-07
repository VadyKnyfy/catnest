<?php
function genhash($length) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';

    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, strlen($chars) - 1)];
    }

    return $str;
}

$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
$result =  mysqli_query($connect,"SELECT * FROM temp_reg WHERE code='".$_GET['code']."'");
if ($result->num_rows > 0) {
$result =  mysqli_fetch_all($result);
$result = $result[0];
$hash = genhash(10);
$sql="INSERT INTO `catnest`.`logpas` (`id`, `login`, `password`, `hash_pass`) VALUES (NULL, '".$result[4]."', '".$result[6]."', '".$hash."')";
mysqli_query($connect,$sql);
 $idcl =  mysqli_query($connect,"SELECT id FROM `logpas` WHERE `login` = '".$result[4]."' ");
$idcl =  mysqli_fetch_all($idcl)[0][0];
$name =  $result[2]." ".$result[3];
$date = date('Y-m-d');
$try= mysqli_query($connect,"INSERT INTO `catnest`.`clientreg` (`Nom`, `NameC`, `surname`,  `phone`, `email`, `Date`, `loyalty`, `discontAmout`, `id_logpass`) VALUES (NULL, '".$result[2]."', '".$result[3]."', '".$result[5]."', '".$result[4]."', '".$date."', '0', NULL, '".$idcl."' );");
mysqli_query($connect, "DELETE FROM `catnest`.`temp_reg` WHERE code='".$_GET['code']."'");
$connect->close();
header('Location: success_registration.php?name='.$name);
echo("Профиль створено");
}else {echo("Профиль вже створено, або потрапили на цю сторинку випадкова");
    header('Location: 404.php');
}
?>