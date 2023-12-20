const username = document.querySelector('input[type="text"]');
const password = document.querySelector('input[type="password"]');
const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  if (username.value === 'admin' && password.value === 'admin') {
    window.location.href = "main.html";
  } else {
    alert('Username atau kata sandi salah!');
    window.location.href = 'login.html';
  }
});
