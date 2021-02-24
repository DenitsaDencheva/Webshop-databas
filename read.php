<?php

require_once ("database.php");
   
$stmt = $conn->prepare("SELECT * FROM products");


 $stmt->execute();

 $result = $stmt->fetchAll();
 
 $table = "";
 foreach($result as $key => $value){

   
    $table .= "
            
            <div>
                <div class='timeline-heading'>
                    <img -fluid' src='$value[image]' > <br><br>
                    <h4>$value[title]</h4>
                    
                </div>
                <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>
                <h4 class='subheading'> Pris: $value[price] SEK</h4>


                    <a class='btn btn-primary btn-xl text-uppercase' href='order.php?id=$value[product_id]' class='btn btn-primary'>KÖP</a>
                <hr>
            </div>
            ";
        }
        
        $table .= "</table>";



 echo $table;
?>
