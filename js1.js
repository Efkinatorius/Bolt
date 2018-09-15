window.onscroll = function(){ scrollFunc() };

var header = document.getElementById("pageHeader");

var sticky = header.offsetTop;

function scrollFunc(){
  if(window.pageYOffset > sticky){
    header.classList.add("sticky");
  }else{
    header.classList.remove("sticky");
  }
}
