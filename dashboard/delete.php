<?php

$conn = mysqli_connect('localhost', 'root', '', 'dukan');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }
if(isset($_POST['dsub']))
{
    foreach($_POST['s'] as $value){
     
        $checkSql = "SELECT * FROM item WHERE id='$value'";
        $checkResult = mysqli_query($conn, $checkSql) or die("SQL1 query failed");
        if(mysqli_num_rows($checkResult) > 0){
          $row = mysqli_fetch_assoc($checkResult);
                    $product = $row['prod'];
                    $quantity = $row['qty'];
                    $checkSql1 = "SELECT * FROM product WHERE name ='$product'";
                    $checkResult1 = mysqli_query($conn, $checkSql1) or die("SQL2 query failed");
                    if(mysqli_num_rows($checkResult1) > 0){
                      $row1 = mysqli_fetch_assoc($checkResult1);
                               $qty= $row1['quantity']+$quantity;
                
                               $sql = "UPDATE product SET quantity = '{$qty}' WHERE name = '{$product}'";
                              if( mysqli_query($conn, $sql))
                              {
                                $sql = "DELETE FROM item WHERE id='$value'";
                                mysqli_query($conn, $sql);
                              }

                    }

        }  

    }
    header('Location:billing.php');
}

?>