<?php
require 'mailfunction.php';
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$region = $_POST['region'];
$city = $_POST['city'];
$warehouse = $_POST['warehouse'];
$orderlist = $_POST['orderlist'];
$order = $_POST['order'];
$amount = $_POST['amount'];
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
$sql="
INSERT INTO `orders` (`Nom`, `cname`,`csurname`,`cemail`,`cphone`,`dregion`,`dcity`,`dwarehouse`)
VALUES (NULL, '".$firstName."','".$lastName."','".$email."','".$phone."','".$region."','".$city."','".$warehouse."');
SELECT LAST_INSERT_ID() AS `Nom`;";
$result = mysqli_multi_query($connect, $sql);

if ($result) {
    do {
        if ($result_set = mysqli_store_result($connect)) {
            while ($row = mysqli_fetch_assoc($result_set)) {
                $ordernum = $row['Nom'];
            }
            mysqli_free_result($result_set);
        }
    } while (mysqli_next_result($connect));
}
foreach ($order as $key => $value) {
   $sql="INSERT INTO `catnest`.`orderlistitem` (`num`, `NumI`, `amount`) VALUES ('".$ordernum."', '".$key."', '".$value."')";
   $test= mysqli_query($connect,$sql);
}
$connect->close();
if($test){
echo(order_mail($email,$firstName,$lastName,$phone,$orderlist,$amount,$region,$city,$warehouse)."-".$ordernum);
}
?>