<html>
<body>

<h1>Product has been added!</h1>
<?php
$aisle_name = $_POST['aisle'];
echo $aisle_name . "<br>";
$id = $_POST['id'];
echo $id . "<br>";
$name = $_POST['name'];
echo $name . "<br>";
$price = $_POST['price'];
echo $price . "<br>";
$description = $_POST['description'];
echo $description . "<br>";
$image = $_POST['image'];
echo $image . "<br>";
$width = $_POST['width'];
echo $width . "<br>";
$height = $_POST['height'];
echo $height . "<br>";

$xml = new DomDocument('1.0', 'utf-8');
$xml->load('products.xml', LIBXML_NOBLANKS);
$xml->formatOutput = true;
$products = $xml->getElementsByTagName($aisle_name)->item(0);

$product = $xml->createElement('product');

$products->appendChild($product);

$d_name = $xml->createElement('name', $name);
$d_id = $xml->createElement('id', $id);
$d_price = $xml->createElement('price', $price);
$d_description = $xml->createElement('description', $description);
$d_image = $xml->createElement('image', $image);
$d_width = $xml->createElement('i_width', $width);
$d_height = $xml->createElement('i_height', $height);

$product->appendChild($d_id);
$product->appendChild($d_name);
$product->appendChild($d_price);
$product->appendChild($d_description);
$product->appendChild($d_image);
$product->appendChild($d_width);
$product->appendChild($d_height);




$xml->save('products.xml');

echo "All done!";

?>

<a href="index.html">Return?</a>
</body>
</html>
