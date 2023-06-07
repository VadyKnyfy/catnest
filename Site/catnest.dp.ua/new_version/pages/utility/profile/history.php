<div class="content" id="history">
  <form id="history-form">
      <?php
      //var_dump($historyord);
      function getprice($idi){
          $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
        $result = mysqli_query($connect,'SELECT * FROM `item` WHERE 1 ');
           $allitems = mysqli_fetch_all($result);
            $connect->connect();
           foreach($allitems as $value){
               if($value[0]==$idi){
                   return $value[6];
               }
           }
      }
      function getamount($ido){
           $connect = mysqli_connect("localhost", "vadyknyfy", "vadim2003", "catnest");
           $result = mysqli_query($connect,'SELECT * FROM `orderlistitem` WHERE num = '.$ido);
           $orderlisti = mysqli_fetch_all($result);
            $connect->connect();
           $amount =0;
           foreach($orderlisti as $value){
               $amount =  $amount + getprice($value[1])* $value[2];
           }
           return $amount;
      }
      ?>
    <div class="history" >
      <div class="orders" id="page1">
        <?php 
        $pageitem = 5;
        $pagecount = 1;
        for($p=0;count($historyord)>$p;$p++){
            echo('
            <div class="order">
          <div>Артикиль: '.$historyord[$p][0].'</div>
          <div>Ціна: '.getamount($historyord[$p][0]).'</div>
          <div>Дата: no info</div>
        </div>
            ');
        $pageitem--;
        if($pageitem==0){
            $pagecount++;
            echo('</div>
             <div class="orders" id="page'.$pagecount.'" style="display:none">
            ');
            $pageitem=5;
        }
        }
        echo('</div>');
        ?>
      <div class="pagination">
        < 1, 2, 3, ..., 10>
      </div>
    </div>
  </form>
</div>
<script>
var pageN = 1;
var pageCount;
$(document).ready(function() {
  // Подсчет количества div с классом "orders"
   pageCount = $('.orders').length;
  // Вывод количества страниц в div с классом "pagination"
  var stry ="<p class='arrowP' onclick='previusPage("+pageN+","+(Number(pageN)-1) +")'><-</p>     "+pageN+"     <p class='arrowP' onclick='nextPage("+pageN+","+(Number(pageN)+1) +")' >-></p>";
  $('.pagination').html(stry);
});
function nextPage(page,nextP){
    if(nextP<=pageCount){
    $("#page"+page).attr("style","display:none;");
     $("#page"+nextP).attr("style","display:flex;");
     pageN = nextP;
    var stry ="<p class='arrowP' onclick='previusPage("+pageN+","+(Number(pageN)-1) +")'><-</p>     "+pageN+"     <p class='arrowP' onclick='nextPage("+pageN+","+(Number(pageN)+1) +")' >-></p>";
  $('.pagination').html(stry);}
}

function previusPage(page,previusP){
    if(previusP>0){
    $("#page"+page).attr("style","display:none;");
     $("#page"+previusP).attr("style","display:flex;");
     pageN = previusP;
    var stry ="<p class='arrowP' onclick='previusPage("+pageN+","+(Number(pageN)-1) +")'><-</p>     "+pageN+"     <p class='arrowP' onclick='nextPage("+pageN+","+(Number(pageN)+1) +")' >-></p>";
  $('.pagination').html(stry);}
}
</script>