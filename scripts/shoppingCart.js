var cart = [];   //objektu masyvas
var cartJSON;
var Item = function(restaurant, name, price, amount) {
	this.restaurant = restaurant;
	this.name = name;
	this.price = price;
	this.amount = amount;
}; // pirkinio objektas su visokiom properties

// FUNKCIJOS:
function addItem(restaurant, name, price, amount){
	for (var i in cart){
		if (cart[i].restaurant === restaurant && cart[i].name === name){
			cart[i].amount += amount;
			return;
		}
	}
	cart.push(new Item(restaurant, name, price, amount));
}
function removeItem(restaurant, name){ // remove tik viena item (amount --)
	for (var i in cart){
		if (cart[i].restaurant === restaurant && cart[i].name === name){
			cart[i].amount --;
			if (cart[i].amount === 0){
				cart.splice(i, 1);
			}
			return;
		}
	}
}
function removeItems(restaurant, name){ // remove visus item (amount = 0)
	for (var i in cart){
		if (cart[i].restaurant === restaurant && cart[i].name === name){
			cart.splice(i, 1);
			break;
		}
	}
}
function DeleteCart(){
	cart = [];
}
function cartify(newCart){
	cart = newCart;
}
function totalItems(){ // grazina kiek yra is viso itemu
	var total = 0;
	for (var i in cart){
		total += cart[i].amount;
	}
	return total;
}
function totalCost(){ // grazina kaina
	var total = 0;
	for (var i in cart){
		total += cart[i].amount * cart[i].price;
	}
	return total;
}
function copyCart(){ // nukopijuoja shopping carta. gal nereikalinga
	var carCopy = [];
	for (var i in cart){
		var item = cart[i]
		var itemCopy = {};
		for (var j in item) {
			itemCopy[j] = item[j];
		}
		cartCopy.push(itemCopy);
	}
	return cartCopy;
}
function saveCart(newcart) {
	cart = newcart;

	alert("saving cart");
	localStorage.setItem("shoppingCart", JSON.stringify(cart)); // JS object notation
}
function saveCart() {

	localStorage.setItem("shoppingCart", JSON.stringify(cart)); // JS object notation

	cartJSON = JSON.stringify(cart);
}
function loadCart(){
	cart = JSON.parse(localStorage.getItem("shoppingCart"));
}
