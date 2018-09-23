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
    li.appendChild(document.createTextNode(cart[i].name + " \n " + cart[i].price + " € "));
    var x = document.createElement("input");
    x.setAttribute("type", "checkbox");
    x.setAttribute("class", "check");
    x.setAttribute("onchange", "recountTotal()");
    li.appendChild(x);
    ul.appendChild(li);
  }
  li = document.createElement("li");
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
//alert(cart[0]);
  for(var i = 0; i < items.length; i++){
    if(items[i].checked){
      total += currCart[i].amount * currCart[i].price;
    }
  }
  document.getElementById('totale').innerHTML = "Total: " + total + " €";
}
