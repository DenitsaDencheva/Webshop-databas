<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <title>Tabell med meddelanden</title>
</head>

<body class="container">

    
</body>
</html>



<?php

require_once ("database.php");
require_once ("delete.php");

$stmt = $conn->prepare("SELECT * FROM contacts");

$stmt->execute();

$result = $stmt->fetchAll();

$table = "
    <table class='table table-hover'>
    <tr>
        <th>Namn</th>
        <th>E-postadress</th>
        <th>Telefonnummer</th>
        <th>Meddelande</th>
    </tr>
    ";

 foreach($result as $key => $value){
    
    $id = $value['contacts_id'];  

    $table .= "
        <tr>
            <td>$value[name]</td>
            <td>$value[email]</td>
            <td>$value[phone]</td>
            <td>$value[message]</td>


            <td>
                <a href='delete.php?id=$value[contacts_id]'
                class='btn btn-primary'>
                Ta bort
                </a>

                </td>
        </tr>
    ";

 }



 $table .= "</table>";

$table .= "<form  method='post'>    
        <input class='btn btn-primary' type='submit' name='delete' value='Ta bort alla meddelanden' >
        </form>"; 
 echo $table;

 ?>