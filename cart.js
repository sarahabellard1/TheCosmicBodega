//remove item
function remove1() {
    var myobj1 = document.getElementById("prod1");
    myobj1.remove();
  }

  function remove2() {
    var myobj2 = document.getElementById("prod2");
    myobj2.remove();
  }

  function remove3() {
    var myobj3 = document.getElementById("prod3");
    myobj3.remove();
  }



//update number of items and delivery fee
function myFunction() {
    var x = 0;
    if (document.getElementById("myNumber1"))
        x += parseInt(document.getElementById("myNumber1").value);
    else 
        x += 0;
    if (document.getElementById("myNumber2"))
        x += parseInt(document.getElementById("myNumber2").value);
    else 
        x += 0;
    if (document.getElementById("myNumber3"))
        x += parseInt(document.getElementById("myNumber3").value);
    else 
        x += 0;    
    
    //returns number of items 
    document.getElementById("cart-count").innerHTML =x;

    //returns delivery fee
    var f= 0;
    f = x/2;
    document.getElementById("cart-shipping").innerHTML ="GS "+(f).toFixed(2);
  


//update total price per item, subtotal, tax amount
  var w=0, y=0, z=0;
  if (document.getElementById("myNumber1")){
    w = parseInt(document.getElementById("myNumber1").value);
  document.getElementById("total1").innerHTML ="GS "+ (w*4.99).toFixed(2);
  }
  if (document.getElementById("myNumber2")){
  y = parseInt(document.getElementById("myNumber2").value);
  document.getElementById("total2").innerHTML ="GS "+ (y*3.39).toFixed(2);  
  }
  if (document.getElementById("myNumber3")){
  z = parseInt(document.getElementById("myNumber3").value);
  document.getElementById("total3").innerHTML ="GS "+ (z*1.99).toFixed(2);
  }

  //returns subtotal
  var s =(z*1.99) + (y*3.39) + (w*4.99);
  document.getElementById("cart-subtotal").innerHTML ="GS "+ s.toFixed(2);

  //returns tax 
  var t = s*0.07;
  document.getElementById("cart-tax").innerHTML ="GS "+(t).toFixed(2);

  //update discount 
  //if subtotal (total before tax) is greater than 250, apply 5% discount 
  var d=0;
  if (t>250){
    d = t*0.05;
  document.getElementById("cart-discount").innerHTML ="GS ("+(d).toFixed(2) +")";
}
  else {
  document.getElementById("cart-discount").innerHTML ="GS ("+(0).toFixed(2) +")";
    }

  //returns grand total 
  var g= s +t +f -d;
  document.getElementById("cart-grand-total").innerHTML ="GS ("+g.toFixed(2)+")";

}





