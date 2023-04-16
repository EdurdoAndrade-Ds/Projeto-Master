let currentState = "login";
let switcher = document.getElementById("form_switcher"),
    loginForm = document.getElementById("login_form"),
    registerForm = document.getElementById("register_form"),
    formMessage = document.getElementById("form_message"),
    messageTitle = document.getElementById("message_title"),
    messageText = document.getElementById("message_text");

switcher.addEventListener("click", e => {
  if (currentState == "login") {
    switcher.classList.add("active");
    loginForm.classList.remove("active");
    registerForm.classList.add("active");
    formMessage.classList.add("active");
    formMessage.classList.add("animate");
    currentState = "register";
    setTimeout(() => {
      messageTitle.innerText = "Let's start"; 
      formMessage.classList.remove("animate");
    }, 600);
  } else {
    switcher.classList.remove("active");
    loginForm.classList.add("active");
    registerForm.classList.remove("active");
    formMessage.classList.remove("active");
    formMessage.classList.add("animate");
    currentState = "login";
    setTimeout(() => {
      messageTitle.innerText = "Welcome back";  
      formMessage.classList.remove("animate");
    }, 600);
  }
});