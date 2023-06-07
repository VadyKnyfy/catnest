<?php
$connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
mysqli_query($connect,"DELETE FROM `temp_reg` WHERE `endtime` < NOW()");
$connect->close();
?>