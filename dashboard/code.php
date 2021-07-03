<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'dukan');
  if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
  }

  //*************************** code for admin section start from here ***************************
  if (isset($_POST['addAdmin'])) {
    $name = $_POST['name'];
    $post = $_POST['post'];
    $email = $_POST['email'];
  	$password = $_POST['password'];
  	$sql = "INSERT INTO admin (name, post, email, password) VALUES ('{$name}', '{$post}', '{$email}', '{$password}')";

    $checkSql = "SELECT * FROM admin";
    $checkResults = mysqli_query($conn, $checkSql) or die("SQL query failed");

    if(mysqli_num_rows($checkResults) >= 0){
      while ($row = mysqli_fetch_assoc($checkResults)) {
        if($row['email'] == $email){
          echo "duplicateEmail";
          exit();
        }
      }
      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
  }

  if (isset($_POST['viewAdminDetails'])) {
    $sql = "SELECT * FROM admin";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $content .= '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['post'].'</td><td>'.$row['email'].'</td><td><button class="btn mx-2 btn-sm btn-danger deleteAdmin mx-2" name="deleteAdminData" data-id='.$row['id'].'> <i class="fas fa-times-circle"></i></button></td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='5'><h4>No Records Found</h4></td></tr>";
    }
  }


  // delete data
  if (isset($_POST['deleteAdminData'])) {
  	$id = $_POST['id'];
  	$sql = "DELETE FROM admin WHERE id=" . $id;
    if(mysqli_query($conn, $sql)){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  //*************************** code for admin section end here ***************************

  //******************************** code for items group name section start from here ***************************

  // code to add data

  if (isset($_POST['addGroupName'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO itemsgroupname (name) VALUES ('{$name}')";
    
    $checkSql = "SELECT * FROM itemsgroupname";
    $checkResults = mysqli_query($conn, $checkSql) or die("SQL query failed");

    if(mysqli_num_rows($checkResults) >= 0){
      while ($row = mysqli_fetch_assoc($checkResults)) {
        if($row['name'] == $name){
          echo "duplicateName";
          exit();
        }
      }
      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
  }

  // code to view data

  if (isset($_POST['viewGroupName'])) {
    $sql = "SELECT * FROM itemsgroupname";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $content .= '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td><button class="btn mx-2 btn-sm btn-danger deleteGroupName mx-2" data-id='.$row['id'].'> <i class="fas fa-times-circle"></i></button></td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='3'><h4>No Records Found</h4></td></tr>";
    }
  }

  // delete database
  if (isset($_POST['deleteGroupName'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM itemsgroupname WHERE id=" . $id;
    if(mysqli_query($conn, $sql)){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  //*************************** code for items group name section end here ***************************

  //*************************** code for items unit name and symbol section start from here ***************************

  // code to add data

  if (isset($_POST['addUnit'])) {
    $unitName = $_POST['unitName'];
    $unitSymbol = $_POST['unitSymbol'];
    $sql = "INSERT INTO itemunit (unitName, unitSymbol) VALUES ('{$unitName}', '{$unitSymbol}')";

    $checkSql = "SELECT * FROM itemunit";
    $checkResults = mysqli_query($conn, $checkSql) or die("SQL query failed");

    if(mysqli_num_rows($checkResults) >= 0){
      while ($row = mysqli_fetch_assoc($checkResults)) {
        if($row['unitName'] == $unitName || $row['unitSymbol'] == $unitSymbol){
          echo "duplicateNameOrSymbol";
          exit();
        }
      }
      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
  }

  // code to view data

  if (isset($_POST['viewUnitName'])) {
    $sql = "SELECT * FROM itemunit";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $content .= '<tr><td>'.$i.'</td><td>'.$row['unitName'].'</td><td>'.$row['unitSymbol'].'</td><td><button class="btn mx-2 btn-sm btn-danger deleteUnitName mx-2" data-id='.$row['id'].'> <i class="fas fa-times-circle"></i></button></td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='4'><h4>No Records Found</h4></td></tr>";
    }
  }

  // delete comment fromd database
  if (isset($_POST['deleteUnitName'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM itemunit WHERE id=" . $id;
    if(mysqli_query($conn, $sql)){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  //*************************** code for items unit name and symbol section end here ***************************

  //*************************** code for product add section start from here ***************************

  // code to view data

  if (isset($_POST['addProductGroup'])) {
    $sql = "SELECT * FROM itemsgroupname";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      $content .= '<select name="pg" class="form-control" id="productGroup">';
      $content .= '<option selected disabled>Choose Any</option>';
      while ($row = mysqli_fetch_assoc($results)) {
        $content .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
      }
      $content .= '</select>';
      echo $content;
    }
    else{
      echo "<tr><td colspan='3'><h4>No Records Found</h4></td></tr>";
    }
  }

  if (isset($_POST['addProductUnit'])) {
    $sql = "SELECT * FROM itemunit";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      $content .= '<div class="form-check form-check-inline">';
      while ($row = mysqli_fetch_assoc($results)) {
        $content .= '<input class="unit" type="checkbox" name="unit[]" value="'.$row['unitSymbol'].'" class="form-check-input units">';
        $content .= '<label class="form-check-label mr-2">'.$row['unitSymbol'].'</label>';
      }
      $content .= '</div>';
      echo $content;
    }
    else{
      echo "<tr><td colspan='3'><h4>No Records Found</h4></td></tr>";
    }
  }

  // code to add data

  if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $productGroup = $_POST['productGroup'];
    $serializedUnit = serialize($_POST['serializedUnit']);
    $prate = $_POST['prate'];
    $rrate = $_POST['rrate'];
    $hrate = $_POST['hrate'];
    $qalert = $_POST['qalert'];
    $productCode =  rand(100000,999999);

    $checkSql = "SELECT * FROM product";
    $checkResult = mysqli_query($conn, $checkSql) or die("SQL query failed");
    if(mysqli_num_rows($checkResult) > 0){
      while ($row = mysqli_fetch_assoc($checkResult)) {
        if($productCode == $row['productCode']){
          $productCode =  rand(100000,999999);
        }
        if ($name == $row['name']){
          echo "duplicateName";
          exit();
        }
      }
      $sql = "INSERT INTO product (name, productCode, groups, unit, purchaseRate, retailRate, wholesaleRate, alertQuantity) VALUES ('{$name}', '{$productCode}', '{$productGroup}', '{$serializedUnit}', '{$prate}', '{$rrate}', '{$hrate}', '{$qalert}')";

      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
    else{
      $sql = "INSERT INTO product (name, productCode, groups, unit, purchaseRate, retailRate, wholesaleRate, alertQuantity) VALUES ('{$name}', '{$productCode}', '{$productGroup}', '{$serializedUnit}', '{$prate}', '{$rrate}', '{$hrate}', '{$qalert}')";

      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }    
  }

  // code to view data

  if (isset($_POST['viewProducts'])) {
    $sql = "SELECT * FROM product";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $units = json_decode($row['unit']);
        $chk ='';
        //$chk = join(',', $units);
        $content .= '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['groups'].'</td><td>'.$chk.'</td><td>'.$row['purchaseRate'].'</td><td>'.$row['retailRate'].'</td><td>'.$row['wholesaleRate'].'</td><td>'.$row['alertQuantity'].'</td><td><button class="btn mx-2 btn-sm btn-info mx-2 editProduct" data-toggle="modal" data-target="#exampleModal" data-id='.$row['id'].'> <i class="far fa-edit"></i></button></td><td><button class="btn mx-2 btn-sm btn-danger deleteProduct mx-2" data-id='.$row['id'].'> <i class="fas fa-times-circle"></i></button></td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='10'><h4>No Records Found</h4></td></tr>";
    }
  }

  // delete data
  if (isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM product WHERE id=" . $id;
    if(mysqli_query($conn, $sql)){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  // code to view data

  if (isset($_POST['editProduct'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM product WHERE id = {$id}";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {

        
        $unitShow = 'e';
        $i++;
        $units = json_decode($row['unit']);
        $chk = '';
        //$chk = join(',', $units);
        $content .= '<div class="form-group col-md-6">
                              <input type="hidden" value="'.$id.'" id="id">
                              <label>Item Name</label>
                              <input type="text" class="form-control" value="'.$row['name'].'" id="name" placeholder="Item Name">
                            </div>
                             <div class="form-group col-md-6">
                                <label for="inputEmail4">Purchases Rate</label>
                                <input type="text" class="form-control"  value="'.$row['purchaseRate'].'" id="prate" placeholder="₹">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="inputEmail4">Retailer Rate</label>
                                <input type="text" class="form-control"  value="'.$row['retailRate'].'" id="rrate" placeholder="₹">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Wholesale Rate</label>
                                <input type="text" class="form-control"  value="'.$row['wholesaleRate'].'" id="hrate" placeholder="₹">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Alert Quantity</label>
                                <input type="text" class="form-control"  value="'.$row['alertQuantity'].'" id="qalert" placeholder="">
                            </div>';

      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='10'><h4>No Records Found</h4></td></tr>";
    }
  }

  // code to update data

  if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $prate = $_POST['prate'];
    $rrate = $_POST['rrate'];
    $hrate = $_POST['hrate'];
    $qalert = $_POST['qalert'];
    $sql = "UPDATE product SET name = '{$name}', purchaseRate = '{$prate}', retailRate = '{$rrate}', wholesaleRate = '{$hrate}', alertQuantity = '{$qalert}' WHERE id = '{$id}'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    }else {
      echo 0;
    }
  }

  //*************************** code for product add section end here ***************************

  //*************************** code for quantity section start here ***************************

  if (isset($_POST['viewQuantityDetails'])) {
    $sql = "SELECT * FROM product";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $content .= '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td><input name='.$row['id'].' id="quantityId'.$row['id'].'" type="text" class="form-control text-center" onchange="updateQuantity(this.name)" value="'.$row['quantity'].'"></td>
                      <td><input type="text" class="form-control text-center" name='.$row['id'].' id="retailRateId'.$row['id'].'" value="'.$row['retailRate'].'" onchange="updateRetailRate(this.name)"></td>
                      <td><input type="text" name='.$row['id'].' id="wholesaleRateId'.$row['id'].'" class="form-control text-center" value="'.$row['wholesaleRate'].'" onchange="updatewholesaleRate(this.name)"></td>
                      <td>'.$row['productCode'].'</td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='5'><h4>No Records Found</h4></td></tr>";
    }
  }

  // code to update data

  if (isset($_POST['updateQuantity'])) {
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    $sql = "UPDATE product SET quantity = '{$qty}' WHERE id = '{$id}'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    }else {
      echo 0;
    }
  }

  if (isset($_POST['updateRetail'])) {
    $id = $_POST['id'];
    $rate = $_POST['rate'];
    $sql = "UPDATE product SET retailRate = '{$rate}' WHERE id = '{$id}'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    }else {
      echo 0;
    }
  }

  if (isset($_POST['updatewholesale'])) {
    $id = $_POST['id'];
    $rate = $_POST['rate'];
    $sql = "UPDATE product SET wholesaleRate = '{$rate}' WHERE id = '{$id}'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    }else {
      echo 0;
    }
  }


  //*************************** code for quantity section end here ***************************


  //*************************** code for billing section start here ***************************

  // code to view data


  if (isset($_POST['addGroupToBill'])) {
    $sql = "SELECT * FROM product";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    if(mysqli_num_rows($results) > 0){
      $content .= '<select class="form-control"  id="product" onchange="fun();" required>';
      $content .= '<option selected disabled value="">Choose Any</option>';
      while ($row = mysqli_fetch_assoc($results)) {
        $content .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
      }
      $content .= '</select>';
      echo $content;
    }
    else{
      echo "<tr><td colspan='3'><h4>No Records Found</h4></td></tr>";
    }
  }

  if (isset($_POST['addUnitToBill'])) {
    $sql = "SELECT * FROM itemunit";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      $content .= '<select class="form-control" id="units">';
      $content .= '<option selected disabled value="">Choose Any</option>';
      while ($row = mysqli_fetch_assoc($results)) {
        $content .= '<option value="'.$row['unitSymbol'].'">'.$row['unitSymbol'].'</option>';
      }
      $content .= '</div>';
      echo $content;
    }
    else{
      echo "<tr><td colspan='3'><h4>No Records Found</h4></td></tr>";
    }
  }

  if (isset($_POST['viewBillDetails'])) {
    $sql = "SELECT * FROM billview";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $content .= '<tr><td>'.$i.'</td><td>'.$row['invoiceId'].'</td><td>'.$row['name'].'</td><td>'.$row['phone'].'</td><td>'.$row['dates'].'</td><td>'.$row['purchaseType'].'</td><td>'.$row['total'].'</td><td>'.$row['paid'].'</td><td>'.$row['due'].'</td><td><button data-id='.$row['id'].' class="btn mx-2 btn-sm btn-primary mx-2 editBill"> <i class="fas fa-edit"></i></button></td><td><button data-id='.$row['id'].' class="btn mx-2 btn-sm btn-danger mx-2 deleteBill"> <i class="fas fa-times-circle"></i></button></td></tr>';
      }
      echo $content;
    }
    else{
      echo "<tr><td colspan='11' class='text-center'><h5>No Records Found</h5></td></tr>";
    }
  }

  if (isset($_POST['setInvoiceId'])) {
    $sql = "SELECT * FROM billview";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
        $i++;
        $invId = $row['invoiceId'];
      }
      echo $invId+1;
    }
    else{
      echo 10001;
    }
  }

  // code to add data

  if (isset($_POST['addBill'])) {

    $name = $_POST['name'];
    $invoiceId = $_POST['invoiceId'];
    $phone = $_POST['phone'];
    $dates = $_POST['date'];
    $purchaseType = $_POST['purchaseType'];
    $total = $_POST['total'];
    $paid = $_POST['paid'];
    $due =  $_POST['due'];

    // echo $due;

    // $sql = "INSERT INTO billview (invoiceId, name, phone, dates, purchaseType, total, paid, due) VALUES ('{$invoiceId}', '{$name}', '{$phone}', '{$dates}', '{$purchaseType}', '{$total}', '{$paid}', '{$due}')";

    // if (mysqli_query($conn, $sql)) {
    //   echo 1;
    // }else {
    //   echo 0;
    // }  

    $checkSql = "SELECT * FROM billview";
    $checkResult = mysqli_query($conn, $checkSql) or die("SQL query failed");
    if(mysqli_num_rows($checkResult) > 0){
      while ($row = mysqli_fetch_assoc($checkResult)) {
        if($invoiceId == $row['invoiceId']){
          echo "duplicateInvoiceId";
          exit();
        }
      }
      $sql = "INSERT INTO billview (invoiceId, name, phone, dates, purchaseType, total, paid, due) VALUES ('{$invoiceId}', '{$name}', '{$phone}', '{$dates}', '{$purchaseType}', '{$total}', '{$paid}', '{$due}')";

      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
    else{
      $sql = "INSERT INTO billview (invoiceId, name, phone, dates, purchaseType, total, paid, due) VALUES ('{$invoiceId}', '{$name}', '{$phone}', '{$dates}', '{$purchaseType}', '{$total}', '{$paid}', '{$due}')";

      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    } 
  }

  if (isset($_POST['deleteBillData'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM billview WHERE id=" . $id;
    if(mysqli_query($conn, $sql)){
      echo 1;
    }
    else{
      echo 0;
    }
  }
  if (isset($_POST['product'])) {
     $product=$_POST['product'];
     $type=$_POST['saletype'];
    $sql = "SELECT * FROM product";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    if(mysqli_num_rows($results) > 0){
      $content .= '';
      while ($row = mysqli_fetch_assoc($results)) {
           if ($type=='Retail')
           { 
             if ($product==$row['name'])
             $content.=' <input type="number" class="form-control" value="'.$row['retailRate'].'" id="rate" placeholder="R.s">';
           }
           else{
            if ($product==$row['name'])
            $content.=' <input type="number" class="form-control" value="'.$row['wholesaleRate'].'" id="rate" placeholder="R.s">';
           }
                  
      }
    
      echo $content;
    }
  }
 
  if (isset($_POST['prod'])) {
    $product = $_POST['prod'];
    $sale = $_POST['saletype'];
    $qtys = $_POST['q'];
    $unit = $_POST['u'];
    $gst = $_POST['Gst'];
    $rate = $_POST['Rate'];
    $invoice = $_POST['in']; 
   // echo $qtys; 
         $quantity=0;
         $sql = "SELECT quantity FROM product WHERE name='$product'  ";
         $results = mysqli_query($conn, $sql) or die("SQL query failed");
           $row = mysqli_fetch_assoc($results); 
               $quantity = $row['quantity'] - $qtys;               

         $sql1 = "UPDATE product SET quantity = '{$quantity}' WHERE name = '{$product}'";             
         if(mysqli_query($conn, $sql1)){
    
                $total=  (($qtys*$rate)+((($qtys*$rate)*$gst)/100)) ;
      
    $sql = "INSERT INTO item (prod,gst, unit, qty, rate,invoice,total) VALUES ('{$product}', '{$gst}', '{$unit}',
     '{$qtys}', '{$rate}', '{$invoice}', '{$total}')";

      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    } 
  }
    if (isset($_POST['invoice'])) {
      $in=$_POST['invoice'];
      $sql = "SELECT * FROM item ";
      $results = mysqli_query($conn, $sql) or die("SQL query failed");
      $content = "";
      $i=0;
      if(mysqli_num_rows($results) > 0){
        while ($row = mysqli_fetch_assoc($results)) {
         
         if($in==$row['invoice'])
         {
          $i++;
           if($row['unit']=='G')
           {
            $qt=1000*$row['qty'].'G';
           }
           elseif($row['unit']=='ML')
           {
            $qt=1000*$row['qty'].'Ml'; 
           }
           elseif($row['unit']=='CM')
           {
            $qt=1000*$row['qty'].'CM'; 
           }
           else{
             $qt=$row['qty'].''.$row['unit'];
           }
          
          $content .= '<tr><td>'.$i.'</td><td>'.$row['prod'].'</td><td>'.$qt.'</td><td>₹'.$row['rate'].'</td><td>'.$row['gst'].'</td><td>₹'.$row['total'].'   </td> <td>  <input type="checkbox"  name="s[]" value="'.$row['id'].'" class="form-control checkme"  ></tr>';
        }
      }
        echo $content;
      }
      else{
        echo "<tr><td colspan='7' class='text-center'><h5>No Records Found</h5></td></tr>";
      }
    
  } 

    if (isset($_POST['delid'])) {
      $id = $_POST['delid'];
      $sql = "DELETE FROM item WHERE id='$id'";
      if (mysqli_query($conn, $sql)) {
        echo 1;
      }else {
        echo 0;
      }
    }
  if (isset($_POST['totalinvoice']))
  {
    $in=$_POST['totalinvoice'];
    $sql = "SELECT * FROM item ";
    $results = mysqli_query($conn, $sql) or die("SQL query failed");
    $content = "";
    $i=0;
    if(mysqli_num_rows($results) > 0){
      while ($row = mysqli_fetch_assoc($results)) {
          if($in==$row['invoice'])
          {
            $i=$i+$row['total'];
          }
       
      }
      echo $i;
    }
    else{
      echo 0;
    }



  }
  if(isset($_POST['avl']))
  {
      $name=$_POST['avl'];
     $sql = "SELECT * FROM product";
     $results = mysqli_query($conn, $sql) or die("SQL query failed");
     if(mysqli_num_rows($results) > 0){
       while ($row = mysqli_fetch_assoc($results)) {
           if($name==$row['name']){
                    if($row['quantity']<$row['alertQuantity'])
                          {
                            echo'<input type="number" disabled value="'.$row['quantity'].'" class="text-danger" id="avalable">';
                          }else{
                            echo'<input type="number" disabled value="'.$row['quantity'].'"class="text-success" id="avalable">';
                          }
        
           }         
       }
     }
                
  }

  if (isset($_POST['d'])) {
    $id = $_POST['d'];
    $sql = "DELETE FROM item WHERE invoice='$id'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    }else {
      echo 0;
    }
  }
if(isset($_POST['dpro']))
{
 $product=$_POST['dpro'];
 $quantity= $_POST['dqty'];

 $sql = "SELECT quantity FROM product WHERE name='$product'  ";
         $results = mysqli_query($conn, $sql) or die("SQL query failed");
           $row = mysqli_fetch_assoc($results); 
               $quantity = $row['quantity'] + $quantity;               

         $sql1 = "UPDATE product SET quantity = '{$quantity}' WHERE name = '{$product}'";             
         if(mysqli_query($conn, $sql1)){
                echo 1;
         }
}

if(isset($_POST['upro'])){
  $pro=$_POST['upro'];
  $sql="SELECT unit FROM product WHERE name  = '$pro'";
  $table=mysqli_query($conn,$sql);
  if(mysqli_num_rows($table)>0)
      {
        $cont='<option disabled selected value="">Choose Unit</option>';
         $row=mysqli_fetch_assoc($table);

                $array=(unserialize($row['unit']));
                foreach($array as $chk1)  
                {  
                  $cont.='<option value="'.$chk1.'" class="form-control">'.$chk1.'</option> ';

                } 

              

            echo $cont;    
      } 
    }

  //*************************** code for billing section end here ***************************


?>