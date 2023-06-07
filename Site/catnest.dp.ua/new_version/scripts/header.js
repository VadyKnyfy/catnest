var $searchForm = $('.search-form')
var $cartForm = $('.cart-form')
var $menuForm = $('.nav__menu')
var $loginForm = $('.login-form')
var $registerForm = $('.register')
function initialbutton(){
    var biybtn =$(".buy-btn");
    biybtn.each(function(){
                var id = $(this).attr("itemid");
    if(cartO[$(this).attr("itemid")]!==undefined){
        $(this).html("У кошику");
        $(this).attr("onclick","deletecartitem("+id+")");
}
        else {
            $(this).html("Купити");
        $(this).attr("onclick","addItem("+id+")");
        }
    });
}

function intial(id){
  if(cartO[id]===undefined){
       $(".buy-book").attr("onclick","addItem("+id+")");
        $(".buy-book").html("Купити");
   
}else{
     $(".buy-book").attr("onclick","deletecartitem("+id+")");
    $(".buy-book").html("У кощику");
    
}
      
  }
function deletecartitem(itemid){
    let cartOt= {};
    for (let value of Object.keys(cartO)) {
        if(Number(value)!==Number(itemid)){
            cartOt[value]=cartO[value];
        }
    }
   cartO = cartOt;
   var cartAt=[];
   for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                var temp = cartA[i].split("+");
                if(Number(temp[0])!==Number(itemid))
                    cartAt.push(temp[0]+'+'+cartO[temp[0]]);
            }
        }
        cartA=cartAt
        let text="";
        for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                text+=cartA[i]+"-";
            }
        }
        cartS= text;
        var currentDate = new Date();
        showcartitems();

// Додати один місяць до поточної дати
        var expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate());
        console.log(cartS);
// Встановити куку з оновленим значенням та таймером строку дії
        $.cookie("cart", cartS, { path: '/', expires: expirationDate, raw: true });
        cartAt=[];
            intial(itemid);
             initialbutton()  
            displayNotification('Товар видалено з кошику!', 'red')
}

function addtoamountitem(itemid){
    if(Number(cartO[itemid])<=99){
        cartO[itemid] = Number(cartO[itemid])+1;
        console.log(cartO[itemid]);
        let cartAt = [];
        for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                var temp = cartA[i].split("+");
                cartAt.push(temp[0]+'+'+cartO[temp[0]]);
            }
        }
        console.log(cartAt);
        cartA=cartAt
        let text="";
        for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                text+=cartA[i]+"-";
            }
        }
        cartS= text;
        var currentDate = new Date();
        showcartitems();

// Додати один місяць до поточної дати
        var expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate());
        console.log(cartS);
// Встановити куку з оновленим значенням та таймером строку дії
        $.cookie("cart", cartS, { path: '/', expires: expirationDate, raw: true });
        cartAt=[];
    
    }
}

function removetoamountitem(itemid){
    if(Number(cartO[itemid])>1){
        cartO[itemid] = Number(cartO[itemid])-1;
        console.log(cartO[itemid]);
        let cartAt = [];
        for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                var temp = cartA[i].split("+");
                cartAt.push(temp[0]+'+'+cartO[temp[0]]);
            }
        }
        console.log(cartAt);
        cartA=cartAt
        let text="";
        for(let i=0;i<cartA.length;i++){
            if(cartA[i]!==""){
                text+=cartA[i]+"-";
            }
        }
        cartS= text;
        var currentDate = new Date();
        showcartitems();

// Додати один місяць до поточної дати
        var expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate());
// Встановити куку з оновленим значенням та таймером строку дії
        $.cookie("cart", cartS, { path: '/', expires: expirationDate, raw: true });
        cartAt=[];
    
    }
}


function showcartItem(itemid){
    var price = ispromoitem(itemid,prom) ? Number(getpromoprice(itemid,prom))*Number(cartO[itemid]) +'<label style="text-decoration: line-through; font-size: 9px;color: #bd8383;">('+Number(cartitemall[itemid][1])*Number(cartO[itemid])+')</label></label> грн' : Number(cartitemall[itemid][1])*Number(cartO[itemid]) + '</label>  грн';
    var str = '<div class="cartitem-holder">' +
            '<a href="../pages/book.php?id='+ itemid +'" style="display: inline-block;"><img style="max-width: 6rem; max-height: 8.3rem;" class="cartitem-image" src="../image/books/b'+itemid+'.jpg"></a>' +
            '<div class="cartitem-details">' +
            '<p style="text-align: start;" class="cartItemName" title="' + cartitemall[itemid][0] + '">Назва: '+cartitemall[itemid][0]+'</p>' +
            '<div style="text-align: left;">' +
            '<p>Артикиль: '+itemid+'</p>' +
            '<p>Кількість: <button class="cartItemAmmountBtn" type="button" style="background-color:var(--color-bg)" onclick =removetoamountitem('+
            itemid+')><</button><input readonly style="width: 1.7rem; text-align: center; background-color:var(--color-bg)"  id="cartiteminput'+itemid+'"  value="'+cartO[itemid]+'"size="3"></input><button type="button" class="cartItemAmmountBtn" style="background-color:var(--color-bg)" onclick =addtoamountitem('+
            itemid+')>></button></p>' +
            '<p>Ціна: <label id="cartitemprice'+itemid+'">'+price+'</p>' +
            // '<button style="margin-left: 81%;width: 33%; background-color:red;" type="button" onclick=deletecartitem('+itemid+')>Видалити</button>' +
            // '<button style="margin-left: 60%;width: 40%; background-color:red;" type="button" onclick=deletecartitem('+itemid+')>Видалити</button>' +
            '<button class="cartItemDelete" style="justify-self: center;" type="button" onclick=deletecartitem('+itemid+')><span class="material-icons-sharp">delete</span></button>' +
            '</div>' +
            '</div>' +
            '</div>';
            return str;
}

// Обработчик отправки формы через AJAX
$('#search-btn').click(() => {
  $menuForm.removeClass('active')
  $loginForm.removeClass('active')
  $cartForm.removeClass('active');
  $searchForm.toggleClass('active')
})

$('#menu-btn').click(() => {
  $searchForm.removeClass('active')
  $loginForm.removeClass('active')
  $cartForm.removeClass('active');
  $menuForm.toggleClass('active')
})

$('#account-btn').click(() => {
  $searchForm.removeClass('active')
  $menuForm.removeClass('active')
  $cartForm.removeClass('active');
  $loginForm.toggleClass('active')
})
function showcartitems(){
    let cartitem = $("#cartitems");
    cartitem.html("");
  for(let i=0;i<cartA.length;i++){
    if(cartA[i]!==""){
        var temp = cartA[i].split("+");
        cartitem.append(showcartItem(temp[0]));
    }
}
var sum =0;
for (let value of Object.keys(cartO)) {
    if(ispromoitem(value,prom)){
    sum+=getpromoprice(value,prom)*cartO[value]  
    }else{
    sum+=cartitemall[value][1]*cartO[value]
}
    
}
    $("#cartfullprice").html(sum);
}

$('#cart-btn').click(() => {
  $searchForm.removeClass('active');
  $loginForm.removeClass('active');
  $menuForm.removeClass('active');
  $cartForm.toggleClass('active');
  showcartitems();
})

$('#create-btn').click(() => {
  $searchForm.removeClass('active')
  $menuForm.removeClass('active')
  $loginForm.removeClass('active')
  $cartForm.removeClass('active')
  $registerForm.toggleClass('active')
})

$('#close-register-btn').click(() => {
  $registerForm.removeClass('active')
})

function displayNotification(message, backgroundColor, textColor = "white") {
  const notification = $('#notification');

  notification.css('display', 'block');
  notification.css('backgroundColor', backgroundColor);
  notification.css('color', textColor);
  notification.text(message);
  notification.css('animation', 'fade-in 0.3s ease-in-out forwards');

  setTimeout(function () {
    notification.css('animation', 'fade-out 0.3s ease-in-out forwards');
  }, 3000);
}