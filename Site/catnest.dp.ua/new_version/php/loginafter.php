<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_COOKIE['cookie_exp']) AND $_COOKIE['cookie_exp']!=''){
       $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
       $result = mysqli_query($connect,"SELECT * FROM security WHERE id='1'");
       $scode= mysqli_fetch_all($result)[0][1];
       $hashscode = explode("+", $_COOKIE['cookie_exp']);
       if (password_verify($scode."+rights1", $hashscode[0])) {
           $result=  mysqli_query($connect,"SELECT * FROM logpass WHERE hash_pass='".$hashscode[1]."'");
            if ($result->num_rows > 0) {
                echo("admin++");
                echo $hashscode[1];
                $connect->close();
            }else{
                echo 500;
                $connect->close();
            }
       } else if(password_verify($scode."+rights2", $hashscode[0])){
           $result=  mysqli_query($connect,"SELECT * FROM logpass WHERE hash_pass='".$hashscode[1]."'");
            if ($result->num_rows > 0) {
                 echo("manager++");
                echo $hashscode[1];
                $connect->close();
            }else{
                echo 500;
                $connect->close();
            }
       }
       
    }else if ((isset($_COOKIE['hashcode']) AND $_COOKIE['hashcode']!='')){
        $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
         $result=  mysqli_query($connect,"SELECT * FROM logpas WHERE hash_pass= '".$_COOKIE['hashcode']."' ");
            if ($result->num_rows > 0) {
                 echo("user++");
                echo $_COOKIE['hashcode'];
                $connect->close();
            }else{
                echo 500;
                $connect->close();
            }
    }else echo 500;
}else{
    header("Location:../pages/404.php");
}
?>