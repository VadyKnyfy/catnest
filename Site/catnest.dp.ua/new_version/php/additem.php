<?php
function cheaknumoftable ($connect,$table,$name){
    $result = mysqli_query($connect,"SELECT * FROM ".$table." WHERE name='$name'");
    if ($result->num_rows > 0) {
    $return = mysqli_fetch_all($result)[0][0];
    }
    else{ $return = 0;}
    return $return;
}

function getNumoftable($connect,$table,$name){
    $num = cheaknumoftable ($connect,$table,$name);
    if($num==0){
        $sql = "INSERT INTO ".$table." (`num`, `name`) VALUES (NULL, '".$name."')";
        mysqli_query($connect,$sql);
        $result = mysqli_query($connect,"SELECT * FROM ".$table." WHERE name='$name'");
        return mysqli_fetch_all($result)[0][0];
    }else{ return $num;}
}

function safeImage($image,$connect){
   $result = mysqli_query($connect,"SELECT MAX(Nom) AS `MaxValue` FROM item");
    $nom = mysqli_fetch_all($result)[0][0]+1;
    $name= "b".$nom.".jpg";
    $targetDir = "../image/books/"; // Путь к директории, где нужно сохранить файл
    $targetFile = $targetDir . $name;

    if (move_uploaded_file($image["tmp_name"], $targetFile)) {
        return $name;
        $connect->close();
    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
     if (isset($_FILES["fileToUpload"])) {
        $image = $_FILES["fileToUpload"];
        $name = addslashes($_POST['name']);
        $author = addslashes($_POST['author']);
        $price = addslashes($_POST['price']);
        $edition = addslashes($_POST['edition']);
        $genre = addslashes($_POST['genre']);
        $language = addslashes($_POST['language']);
        $pageCount = addslashes($_POST['pageCount']);
        $year = addslashes($_POST['year']);
        $cover = addslashes($_POST['cover']);
        $age = addslashes($_POST['age']);
        $about = addslashes($_POST['about']);
        if(isset($_COOKIE['cookie_exp']) AND $_COOKIE['cookie_exp']!=''){
            $result = mysqli_query($connect,"SELECT * FROM security WHERE id='1'");
            $scode= mysqli_fetch_all($result)[0][1];
            $hashscode = explode("+", $_COOKIE['cookie_exp']);
            if ((password_verify($scode."+rights1", $hashscode[0])) OR (password_verify($scode."+rights2", $hashscode[0]))) {
                $result=  mysqli_query($connect,"SELECT * FROM logpass WHERE hash_pass='".$hashscode[1]."'");
                if ($result->num_rows > 0) {
                    $id = mysqli_fetch_all($result)[0][0];
                    $result = mysqli_query($connect,"SELECT * FROM employees WHERE id_logpass='".$id."'");
                    $empolo =  mysqli_fetch_all($result)[0][0]; // номер працівника
                }else{
                    $connect->close();
                }  
            }else{
                $connect->close();
            }  
        }
        $currentDate = date('Y-m-d');
        $sql="INSERT INTO `catnest`.`item` (`Nom`, `name`, `type`, `edition`, `img`, `authorC`, `price`, `language`, `count`, `pages`, `age`, `cover`, `about`, `createYear`, `rating`, `addedDate`, `addEmp`) VALUES 
        (NULL,
        '".$name."', 
        '".getNumoftable($connect,"type",$genre)."',
        '".getNumoftable($connect,"edition",$edition)."',
        '".safeImage($image,$connect)."',
        '".getNumoftable($connect,"author",$author)."',
        '".$price."',
        '".getNumoftable($connect,"language",$language)."',
        '0',
        '".$pageCount."',
        '".$age."',
        '".getNumoftable($connect,"cover",$cover)."',
        '".$about."',
        '".$year."',
        '0',
        '".$currentDate."',
        '".$empolo."');";
        if(mysqli_query($connect,$sql)){
            echo 200;
        }else echo 500;
        $connect->close();
    }
}
?>
