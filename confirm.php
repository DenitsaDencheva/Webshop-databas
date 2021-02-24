<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Bekräftelse</title>
</head>

<body class="container">
<?php require_once ("header.php"); ?>

<h1>Orderbekräftelse</h1>
<?php
require_once ("database.php");

if (isset($_GET['id'])) {

    $order_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = :order_id");
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $order = $stmt->fetch();

    $customer_id = $order['customer_id'];
    $product_id = $order['product_id'];


    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
    $product = $stmt->fetch();
   

    $stmt = $conn->prepare("SELECT * FROM customers WHERE customer_id = :customer_id");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->execute();
    $customer = $stmt->fetch();


   /* echo "<img src='$product[image]'>";
    echo $product['title'];
    echo "</br>";
    echo "</br>";
    echo $customer['name'];

} */

echo "<br>";
        echo "<div class='alert alert-success' role='alert'>
             <p> Tack $customer[name]! Din order har registrerats! 
             <div> Ordernummer: $order[order_id]</div>
             <div> Din order: $product[title]</div>
             <div>Telefon: $customer[tel]</div>
             <div>E-post: $customer[email]</div>
             <div>Leveransadress: $customer[address]</div>
             </p>
             </div>";
} 

require_once ("footer.php");

?>




    </body>
</html>

    
</body>
</html>

