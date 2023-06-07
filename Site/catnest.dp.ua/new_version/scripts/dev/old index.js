const searchForm = document.querySelector('.search-form')
const menuForm = document.querySelector('.nav__menu')
const loginForm = document.querySelector('.login-form')
const registerForm = document.querySelector('.register')
// Обработчик отправки формы через AJAX

document.querySelector('#search-btn').onclick = () => {
  if (menuForm.getAttribute('class') === 'nav__menu active') {
    menuForm.classList.toggle('active')
  }
  if (loginForm.getAttribute('class') === 'login-form active') {
    loginForm.classList.toggle('active')
  }
  searchForm.classList.toggle('active')
}

document.querySelector('#menu-btn').onclick = () => {
  if (searchForm.getAttribute('class') === 'search-form active') {
    searchForm.classList.toggle('active')
  }
  if (loginForm.getAttribute('class') === 'login-form active') {
    loginForm.classList.toggle('active')
  }
  menuForm.classList.toggle('active')
}

document.querySelector('#account-btn').onclick = () => {
  if (searchForm.getAttribute('class') === 'search-form active') {
    searchForm.classList.toggle('active')
  }
  if (menuForm.getAttribute('class') === 'nav__menu active') {
    menuForm.classList.toggle('active')
  }
  loginForm.classList.toggle('active')
}

document.querySelector('#create-btn').onclick = () => {
  if (searchForm.getAttribute('class') === 'search-form active') {
    searchForm.classList.toggle('active')
  }
  if (menuForm.getAttribute('class') === 'nav__menu active') {
    menuForm.classList.toggle('active')
  }
  if (loginForm.getAttribute('class') === 'login-form active') {
    loginForm.classList.toggle('active')
  }
  registerForm.classList.toggle('active')
}

document.querySelector('#close-register-btn').onclick = () => {
  registerForm.classList.remove('active')
}
