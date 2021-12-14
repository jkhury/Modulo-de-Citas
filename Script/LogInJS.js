const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

function login(){

  const username = getElementById("username-fiel").value;
  const password = getElementById("password").value;

  alert(username);

  if ((username === "user") && (password === "web")) {
    alert("You have successfully logged in.");
    location.href="C:\Users\IdeaPad\Desktop\Servicio Social\WEB\Main\Home.html";
  } else {
    loginErrorMsg.style.opacity = 1;
  }
}

function show() {
  var password = document.getElementById("password");
  var icon = document.querySelector(".fas");

  // ========== Checking type of password ===========
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}