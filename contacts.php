<?php
   
   if ($_SERVER["REQUEST_METHOD"] == "POST"){

    require_once ("database.php");


   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message']; 


   if ($name !== NULL && !preg_match("/^[a-zA-Z-' ]*$/",$name)) {
       echo "Fel namn";
       return;
   }

   $name = filter_var($name, FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_var($email, FILTER_SANITIZE_STRING | FILTER_SANITIZE_EMAIL);
   $message = filter_var($message,  FILTER_SANITIZE_STRING);




   $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message)
                                VALUES (:name , :email, :phone, :message)");


$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':message', $message);



$stmt->execute();


$last_id = $conn->lastInsertId();

$message1 = "<div class='alert alert-success' role='alert'>
                <p>$name tack för ditt meddelande!</p>

            </div>";  


}
?>

<?php

if(isset($message1)) echo $message1;