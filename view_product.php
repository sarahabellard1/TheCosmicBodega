<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="styles.css" rel="stylesheet" >
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">
  <head>
    <title>TheCosmicBodega</title>
    <meta charset="utf-8">
  </head>

  <?php
$xmldata = simplexml_load_file("products.xml") or die("Failed to load XML file");
  ?>

<div class="header container-fluid" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="produce.html">
      <img src="images/logo.png" width="30" height="30">
      <img src="images/back_arrow.png" width="20" height="20">
      <?php echo $xmldata[0]->name; ?>
      </a>

    </nav>
</div>

<div class="product container">
  <div class="row">
    <div class="col">
      <img  src="images/frumble.png">
    </div>
    <div class="col">
      <h3 class="item_title display-3">
        Frumble
      </h3>
      <h5 class="text-secondary" id="price">
        Price: GS240
      </h5>

      <h5 class="text-secondary" >
        Total: GS<span id="total-item-price"></span>
      </h5>

      <details>
        <summary>Description:</summary>
      <p class="item_description text-wrap">
        The humble frumble. A fruit originally grown on TASIT-9. Sought after for its sharp flavor and toxic aroma. Pairs fantastically with a Junglovian eel fillet and a side of bufallant milk.
      </p>
      </details>
      <button type="button" class="btn btn-secondary btn-lg">
        Add to cart
      </button>
      Quantity:
      <input type="number" id="quantity" name="quantity" min="1" max="99" oninput="saveValue(this);updatePriceTotal()">
       </div>
  </div>
</div>

<script src="storeInputLocally.js"></script>

</html>
