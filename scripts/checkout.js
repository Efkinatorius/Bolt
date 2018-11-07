//pass the cart to this script
var currCart = [];
function setCart(cart){
  currCart = cart;
}
//use passed cart in these scripts
function createList(cart, totalCost){
  var ul = document.getElementById("list");
  var li;
//  alert(cart.length);
  for(var i in currCart){

    li = document.createElement("li");
    var h3 = document.createElement("h3");
    var text = document.createTextNode(cart[i].name + " \n " + cart[i].price + " € ")
    h3.appendChild(text);
    li.appendChild(h3);
    var label = document.createElement("label");
    label.setAttribute("class", "container");
    var span = document.createElement("span");
    span.setAttribute("class", "checkmark");
    var x = document.createElement("input");
    x.setAttribute("type", "checkbox");
    x.setAttribute("class", "check");
    x.setAttribute("onchange", "recountTotal()");
    label.appendChild(x);
    label.appendChild(span);
    li.appendChild(label);
    li.setAttribute("class", "orderElement"); // pervadink kaip noresi
    ul.appendChild(li);
  }
  li = document.createElement("li");
  li.setAttribute("class", "totalElement") // pervadink kaip noresi
  li.setAttribute("id", "totale");

  li.appendChild(document.createTextNode("Total: " + totalCost + " €"));
  ul.appendChild(li);

  xid = document.getElementsByClassName('check');
//  alert(xid.length);
  for(var i in xid){
    xid[i].checked = true;
  }
}

function recountTotal(cart){
  var items = document.getElementsByClassName('check');
  var total = 0;
  var newCart = [];
  var x = 0;
//alert(cart[0]);
  for(var i = 0; i < items.length; i++){
    if(items[i].checked){
      total += currCart[i].amount * currCart[i].price;
      newCart.push(new Item(currCart[i].restaurant, currCart[i].name, currCart[i].price, currCart[i].amount));
    }
  }
  //alert("deleting cart");
  //for(var i in newCart) alert(newCart[i].name);
  DeleteCart();
  //alert("saving new cart");
  //for(var i in newCart) alert(newCart[i].name);
  cartify(newCart);
  saveCart();
  document.getElementById('totale').innerHTML = "Total: " + total + " €";
}
