<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Beställningsformulär</title>
</head>

<body class="container">

<?php require_once ("header.php"); ?>
<h1>Kassa</h1>
<?php
require_once ("database.php");


if (isset($_GET['id'])) {

    $product_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
    $table = "";
    foreach($result as $key => $value){
        
        $id = $value['product_id']; 
        $table .= "
        <br><br>
        <div class= row align-items-center no-gutters mb-4 mb-lg-5>
        <div class= 'col-xl-3 col-lg-4'>
        <img - fluid' src='$value[image]'></div>
        <div 
        class='col-xl-9 col-lg-8'> 
        <h4>$value[title]</h4>
        <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>
        <h5 class='subheading'> Pris: $value[price] SEK</h5>
       </div>
    </div> 
    <br><br>
        ";

     }
     
     $table .= "</table>";
     echo $table;

} 
   
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST['name'];
   $tel = $_POST['tel'];
   $email = $_POST['email']; 
   $address = $_POST['address']; 

   $stmt = $conn->prepare("INSERT INTO customers (name, tel, email, address)
                                VALUES (:name , :tel, :email, :address)");


    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->execute();


    $customer_id = $conn->lastInsertId();

    $stmt = $conn->prepare("INSERT INTO orders (customer_id, product_id)
    VALUES (:customer_id , :product_id)");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    $order_id = $conn->lastInsertId();


    header("Location: confirm.php?id=$order_id");

}
?>




<form action="" class="row" method="post">

    <div class="col-md-6 form-group">
        <input name="name" type="text" required class="form-control" placeholder="Namn">
    </div>
    
    <div class="col-md-6 form-group">
        <input name="tel" type="tel" required class="form-control" placeholder="Telefonnummer">
    </div>
    
    <div class="col-md-6 form-group">
        <input name="email" type="email" required class="form-control" placeholder="E-postadress">
    </div>

    <div class="col-md-6 form-group">
        <input name="address" type="address" required class="form-control" placeholder="Leveransadress">
        </div>   


    <div class="col-md-4 form-group">
        <input type="submit" value="Köp" class="btn btn-primary form-control">
    </div>
    
    </form>
    </body>
</html>

    
</body>
</html>

<?php require_once ("footer.php"); ?>