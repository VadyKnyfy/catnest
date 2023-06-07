// Обработчик клика на вкладку
function ispromoitem(itemid,promo){
    for(let i=0;i<promo.length;i++){
        if(itemid===promo[i][0]){return true;}
    }
    return false;
}
function getpromoprice(itemid,promo){
    for(let value of promo){
        if(itemid===value[0]) return value[1];
    }
    return -1;
}
function setselecteditem(item,itemholder,promo){
    let sellanguage = getSelectedCheckboxes("tablang");
    let selauthor = getSelectedCheckboxes("tabauthor");
    let seledition = getSelectedCheckboxes("tabedition");
    let selcover = getSelectedCheckboxes("tabcover");
    var selitem = [];
    for(let i=0;i<item.length;i++){
      if(
          ($.inArray(item[i][7],sellanguage)!==-1 || sellanguage.length===0) &&
          ($.inArray(item[i][5],selauthor)!==-1 || selauthor.length===0) &&
          ($.inArray(item[i][3],seledition)!==-1 || seledition.length===0) &&
          ($.inArray(item[i][11],selcover)!==-1 || selcover.length===0)
          ){
             selitem.push(item[i]);
          }
    }
    itemholder.html("");
    if(selitem.length!==0){
        for(let value of selitem){
                let str ="";
                if(ispromoitem(value[0],promo)){
                   str= '<div class="book-panel">'+
                            '<div class="book-image" onclick=toBookpage('+value[0]+')><img src="../image/books/'+value[4]+'" /></div>'+
                                '<div class="book-name">'+
                                    '<p>'+value[1]+'</p>'+
                                '</div>'+
                                '<div class="book-bottom">'+
                                    '<p class="discount">'+value[6]+'UAH</p>'+
                                    '<p class="price">'+getpromoprice(value[0],promo)+'UAH</p>'+
                                    '<button type="button" class="buy-btn" itemid="'+value[0]+'" onclick=addItem('+value[0]+') >Купити</button>'+
                                '</div>'+
                            '</div>';
                }else{
                     str= '<div class="book-panel">'+
                            '<div class="book-image" onclick=toBookpage('+value[0]+')><img src="../image/books/'+value[4]+'" /></div>'+
                                '<div class="book-name">'+
                                    '<p>'+value[1]+'</p>'+
                                '</div>'+
                                '<div class="book-bottom">'+
                                    '<p class="price">'+value[6]+'UAH</p>'+
                                    '<button type="button" class="buy-btn" itemid="'+value[0]+'"  onclick=addItem('+value[0]+') >Купити</button>'+
                                '</div>'+
                            '</div>'
                }
                
           itemholder.append(str); 
        }
    }else{
        itemholder.append("<h1 style='color:black;'>За цими фільтрами нічого не знайденно!!!</h1>");
    }
}
function tetttt(selitem,prom){
    if(selitem.length!==0){
        for(let value of selitem){
            $(prom).each(function(){
                if(value[0]===$(this)[0]){
                   let str= '<div class=\"book-panel\">'+
          '<div class=\"book-image\" onclick=toBookpage(".$result[$i][0].")><img src=\"../image/books/".$result[$i][1]."\" /></div>'+
          '<div class=\"book-name\">'+
            '<p>".$result[$i][2]."</p>'+
          '</div>'+
          '<div class=\"book-bottom\">'+
            '<p class=\"discount\">".$result[$i][3]." UAH</p>'+
            '<p class=\"price\">".mysqli_fetch_all($disconts)[0][1]." UAH</p>'+
            '<button type=\"button\" class=\"buy-btn\" onclick=addItem(".$result[$i][0].") >Купити</button>'+
          '</div>'+
        '</div>'
                }
            });
        }
    }
}

function getSelectedCheckboxes(tab) {
  var selectedCheckboxes = [];
  
  $('#'+tab+' input[type="checkbox"]:checked').each(function() {
      var idt = $(this).attr('id').split('-');
    selectedCheckboxes.push(idt[1]);
  });
  
  return selectedCheckboxes;
}

$('.tab-input').click(function () {
  var tabContent = $(this).next().next()
  if ($(this).is(':checked')) {
    tabContent.css('max-height', tabContent.prop('scrollHeight') + 'px')
    $(this).next('label').find('.material-icons-sharp').addClass('active')
  } else {
    tabContent.css('max-height', '0')
    $(this).next('label').find('.material-icons-sharp').removeClass('active')
  }
})


/*
// Сохранение состояния чекбоксов
function saveCheckboxState() {
  const checkboxStates = $('input[type="checkbox"]')
    .map(function () {
      return this.checked
    })
    .get()
  localStorage.setItem('checkboxStates', JSON.stringify(checkboxStates))
}

// Восстановление состояния чекбоксов
function restoreCheckboxState() {
  const checkboxStates = JSON.parse(localStorage.getItem('checkboxStates'))
  if (checkboxStates) {
    const checkboxes = $('input[type="checkbox"]')
    checkboxes.each(function (index) {
      this.checked = checkboxStates[index]
      if (checkboxStates[index]) {
        $(this).next('label').find('.material-icons-sharp').addClass('active')
        $(this)
          .next()
          .next()
          .css('max-height', $(this).next().next().prop('scrollHeight') + 'px')
      }
    })
  }
}

// Обработчик изменения состояния чекбокса
function handleCheckboxChange() {
  saveCheckboxState()
  if ($(this).is(':checked')) {
    $(this).next('label').find('.material-icons-sharp').addClass('active')
  } else {
    $(this).next('label').find('.material-icons-sharp').removeClass('active')
  }
}

// Назначаем обработчик изменения состояния для каждого чекбокса
$('input[type="checkbox"]').change(handleCheckboxChange)

// Восстанавливаем состояние чекбоксов при загрузке страницы
*/
$(document).ready(function () {
 initialbutton()
 var buyButtons = $(".buy-btn");
        buyButtons.on("mouseleave", function() {
            var id = $(this).attr("itemid");
    if(cartO[$(this).attr("itemid")]!==undefined){
        $(this).html("У кошику");
}
        else {
            $(this).html("Купити");
        }
        });
        buyButtons.on("mouseenter", function() {
            var id = $(this).attr("itemid");
    if(cartO[$(this).attr("itemid")]!==undefined){
        $(this).html("Видалити");
}
        else {
            $(this).html("Купити");
        }
        });
})
