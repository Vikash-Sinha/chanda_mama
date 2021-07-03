<?php
if (isset($_POST['prosub']))
{

    session_start();

 $unit = serialize($_POST['unit']);
    $name =  strtoupper($_POST['name']) ;
    $productGroup = $_POST['pg'];
    $prate = $_POST['prate'];
    $rrate = $_POST['rrate'];
    $hrate = $_POST['hrate'];
    $qalert = $_POST['alertqty'];
    $host="localhost";//host name  
    $username="root"; //database username  
    $word="";//database word  
    $db_name="dukan";//database name  
    $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  

    $checkSql = "SELECT * FROM product WHERE name='$name'";
    $checkResult = mysqli_query($con, $checkSql) or die("SQL query failed");
    if(mysqli_num_rows($checkResult) > 0){
        $_SESSION["dub"] = "dublicate";
       header('Location:product.php');
    }
    else{
          
        $sql = "INSERT INTO product (name, groups, unit, purchaseRate, retailRate, wholesaleRate, alertQuantity) VALUES ('{$name}',  '{$productGroup}', '{$unit}', '{$prate}', '{$rrate}', '{$hrate}', '{$qalert}')";
       If( mysqli_query($con, $sql))  
        {
            $_SESSION["insert"] = "Inserted";
            header('Location:product.php'); 
        }
    }
   
      
}


?>