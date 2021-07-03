<?php 
session_start();
	include 'include/header.php';
	include 'include/top-header.php';
  include 'include/menu.php';
  
   
   if (isset( $_SESSION["dub"]))
   {
     echo"<script>  alert('duplicate'); </script>";
     session_unset();

   }
   if (isset( $_SESSION["insert"]))
   {
     echo"<script>  alert('Successfully insert'); </script>";
     session_unset();
   }

?>
	
<div id="layoutSidenav_content">
  <main class="mt-1">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 bg-white"  style="box-shadow: 0px 0px 10px #e1e1e1;">
                <div class="text-dark p-1 pr-3 m-1"><a href="index.php" >
                  </a><span><b>Product</b></span><span style="color: orangered; font-size: 18px;"><b> > Create</b></span>
                </div>
              </div>
          </div>

           <div class="row mt-5 mb-5">
                <div class="col-md-1"></div>
                  <div class="col-md-10 p-4" style="box-shadow: -10px 5px 5px #e1e1e1;">
                    <form id="registerProductForm" action="pro.php" method="POST" >
                      <div class="form-group border-bottom bg-info p-2 text-center">
                        <h6 class="text-white pt-1">Item (Product) Creation</h6>
                      </div>
                
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Item Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Item Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Group</label>
                                <div id="typeOfGroup"></div>
                            </div>
                            <div class="form-group col-md-6">
                              <label>Unit</label><br>
                              <div id="typeofUnit"></div>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="inputEmail4">Purchases Rate</label>
                                <input type="text" class="form-control" name="prate" id="prate" placeholder="₹">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="inputEmail4">Retailer Rate</label>
                                <input type="text" class="form-control" name="rrate" id="rrate" placeholder="₹">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Wholesale Rate</label>
                                <input type="text" class="form-control" name="hrate" id="hrate" placeholder="₹">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Alert Quantity</label>
                                <input type="text" class="form-control"name="alertqty" id="qalert" placeholder="">
                            </div>
                         </div>
                        
                      <div class="form-group">
                        <input type="submit" id="registerProducts" name="prosub" class="btn btn-success btn-sm" value="Create">
                        <input type="reset" class="btn btn-danger btn-sm ml-3" value="Reset">
                      </div>
                    </form>
                  </div>
                <div class="col-md-1"></div>
          </div>

         


      </div>
  </main>
</div>



<?php 
  include 'include/footer.php';
?>