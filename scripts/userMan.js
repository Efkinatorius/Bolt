var user = [];

function login(){
  //kol kas hardkodinam useri
  var username = document.getElementById("uname").value;
  var password = document.getElementById("pass").value;
  if(username === "test" && password === "test"){
    alert("logged in!");
    saveUser(username, password);
  }else alert("wrong user!");
}

function saveUser(username, password){
  user[0] = username;
  user[1] = password;
  localStorage.setItem("user", JSON.stringify(user));
}

function loadUser(){
  user = JSON.parse(localStorage.getItem("user"));
}
