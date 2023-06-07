<?php 
require_once('phpmailer/PHPMailerAutoload.php');
function reg_mail($email,$name,$surname,$phone,$password) :void {
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
 $cheak1 =  mysqli_query($connect,"SELECT * FROM `clientreg` WHERE `email` = '".$email."'  ");
 if ($cheak1->num_rows == 0) {
       $connect->close();
 $mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$code = bin2hex(random_bytes(5));
$current_time = new DateTime(); // поточний час
$current_time->modify('+30 minutes'); // додати 30 хвилин
$time = $current_time->format('H:i:s.u');
 $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
 $cheak =  mysqli_query($connect,"SELECT * FROM `temp_reg`  WHERE `email` = '".$email."' ");
 if ($cheak->num_rows == 0) {
       mysqli_query($connect,"INSERT INTO `catnest`.`temp_reg` (`id`, `code`, `name`, `surname`, `email`, `phone`, `password`, `endtime`) VALUES (NULL, '".$code."'
 , '".$name."', '".$surname."', '".$email."'
 , '".$phone."', '".$password."', '".$time."');");
 $connect->close();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

 $mail->isSMTP();                                            // Использовать SMTP для отправки
    $mail->Host       = 'mail.catnest.dp.ua';                  // SMTP-сервер
    $mail->SMTPAuth   = true;                                   // Включить аутентификацию SMTP
    $mail->Username   = 'no-reply@catnest.dp.ua';                  // Логин для SMTP-сервера
    $mail->Password   = 'noreplycat';                             // Пароль для SMTP-сервера
    $mail->SMTPSecure = 'tls';                                  // Тип шифрования, может быть 'ssl' или 'tls'
    $mail->Port       = 587;                                    // TCP-порт SMTP-сервера
$mail->setFrom('no-reply@catnest.dp.ua'); // от кого будет уходить письмо?
$mail->addAddress($email);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
//створювання повідомлення
$message= 'Ви рееструєтесь на сайті CatNest- книжковий магазин, перейдіть по посиланю: 
<br> https://catnest.dp.ua/new_version/pages/register.php?code='.$code.'
<br> Якщо ви не реєструєтесь на цьому сайті, то це помилка. Просто проігноруйте це повідомлення, будь ласка!';
//
$mail->Subject = 'Підтвердження реестрації';
$mail->Body    =  $message;

$mail->AltBody = '';

if(!$mail->send()) {
    echo '500';
} else {
    echo("200");
}   
}else{
    echo "201";
}}
else{
    echo "202";
}
} 

function order_mail($email,$name,$surname,$phone,$orderlist,$amout,$region,$city,$warehouse) {

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
 $mail = new PHPMailer;
$mail->CharSet = 'utf-8';
 $mail->isSMTP();                                            // Использовать SMTP для отправки
    $mail->Host       = 'mail.catnest.dp.ua';                  // SMTP-сервер
    $mail->SMTPAuth   = true;                                   // Включить аутентификацию SMTP
    $mail->Username   = 'no-reply@catnest.dp.ua';                  // Логин для SMTP-сервера
    $mail->Password   = 'noreplycat';                             // Пароль для SMTP-сервера
    $mail->SMTPSecure = 'tls';                                  // Тип шифрования, может быть 'ssl' или 'tls'
    $mail->Port       = 587;                                    // TCP-порт SMTP-сервера
$mail->setFrom('no-reply@catnest.dp.ua'); // от кого будет уходить письмо?
$mail->addAddress($email);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
//створювання повідомлення
$message= '<div style="display:flex; width:100%; flex-direction: column;">
'.$orderlist.'
</div>
<div>
<br><hr>
<label>Ваші данні</label>
<br>Ім\'я: '.$name.
'<br>Прізвище:'.$surname.
'<br>Email:'.$email.
'<br>Телефон:'.$phone.
'</div>
<br><hr>
<label>Данні доставки</label>
<br><p>'.$region.' область '.$city.'</p><br><p>'.$warehouse.'</p>
<br><hr><h3>До сплати: '.$amout.' грн</h3>
<br><hr><h4>Дякуємо за замовлення, очікуйте дзвінка від нашого менеджера, ми цінуємо вас як клієнта!</h4>
<br><h1>♥♥♥♥♥♥♥♥♥♥♥♥♥♥</h1>';
//
$mail->Subject = 'Замовлення';
$mail->Body    =  $message;

$mail->AltBody = '';

if(!$mail->send()) {
    return '500';
} else {
    return ("200");
}   
}
?>