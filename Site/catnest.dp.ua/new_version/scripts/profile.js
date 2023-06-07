

$(document).ready(function () {
  $('.product-main-btn').click(function () {
    $('.product-btn').toggleClass('active-subsection')
  })
  $('.promotion-main-btn').click(function () {
    $('.promotion-btn').toggleClass('active-subsection')
  })
  $('.manager-main-btn').click(function () {
    console.log(123)
    $('.manager-btn').toggleClass('active-subsection')
  })

  $('.side-nav-btn').click(function () {
    const contentId = $(this).children().attr('href')
    if (contentId !== undefined) {
      $('.side-nav-btn.active').removeClass('active')
      $(this).addClass('active')
      $('.content.active').removeClass('active')
      $(contentId).addClass('active')
      if (history.pushState) {
        history.pushState(null, null, contentId)
      } else {
        window.location.hash = contentId
      }
    }
    return false
  })

  var contentId = window.location.hash
  if (contentId !== '') {
    $('.side-nav-btn.active').removeClass('active')
    $('a[href="' + contentId + '"]')
      .parent()
      .addClass('active')
    $('.content.active').removeClass('active')
    $(contentId).addClass('active')
    if (contentId === '#add-item' || contentId === '#edit-item') {
      $('.product-btn').addClass('active-subsection')
    }
    if (contentId === '#add-promotion' || contentId === '#edit-promotion') {
      $('.promotion-btn').addClass('active-subsection')
    }
    if (contentId === '#add-manager' || contentId === '#edit-account') {
      $('.manager-btn').addClass('active-subsection')
    }
  } else {
    $('.side-nav-btn.active').removeClass('active')
    $('.side-nav-btn:first-child').addClass('active')
    $('.content.active').removeClass('active')
    $('#data').addClass('active')
    if (history.pushState) {
      history.pushState(null, null, '#data')
    } else {
      window.location.hash = '#data'
    }
  }
});


function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}

function exitprofile(){
   deleteCookie('auth')
   deleteCookie('hashcode')
   window.location.href = "https://catnest.dp.ua";
 }