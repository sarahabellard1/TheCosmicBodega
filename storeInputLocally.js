//event listener
var input = document.getElementById("quantity");
input.addEventListener("input", quantityChanged);

function quantityChanged(event){
    console.log("quantity changed");
    updatePriceTotal();
}

// -- Input Local Storage --
// replace the value of the quantity element with the saved value
document.getElementById("quantity").value = getSavedValue("quantity");

// save the element's value to localStorage as (ID, VALUE)
function saveValue(element) {
    var id = element.id;
    var value = element.value;
    localStorage.setItem(id, value);
}

function getSavedValue(id) {
    if (!localStorage.getItem(id)) {
        return ""; // didn't find anything
    }
    return localStorage.getItem(id);
}

//-- Dynamic pricing depending on the saved value of quantity -- 
//get the price
var priceElement = document.getElementById("price").innerText;
var price = parseFloat(priceElement.replace('Price: GS',''));

//find the total
function getTotal(){
    quantityInput = parseFloat(document.getElementById("quantity").value);
    var total = price*quantityInput;
    return total
}

//print the total on the page
document.getElementById("total-item-price").innerText = getTotal();

//update the cart total
function updatePriceTotal(){
    document.getElementById("total-item-price").innerText = getTotal();
}

console.log(price);
console.log(quantityInput);
console.log(getTotal());
