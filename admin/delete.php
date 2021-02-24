<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Admin</title>
</head>

<body class="container">

<h1>Adminsida</h1>

<?php

require_once ("database.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM contacts WHERE contacts_id = :contacts_id");
    $stmt->bindParam(':contacts_id', $id);
    $stmt->execute();

    echo "Ditt meddelande har raderats!";

}  

if (isset($_POST['delete'])) {
$sql = "DELETE FROM contacts";
$stmt = $conn->prepare($sql);
$stmt->execute();

$message = "<div class='alert alert-danger' role='alert'>
                <p>Alla meddelanden har raderats!</p>
            </div>"; 
            
echo $message;

}