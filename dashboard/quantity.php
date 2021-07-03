<?php 
	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';
?>
	
<div id="layoutSidenav_content">
  <main class="mt-1">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 bg-white"  style="box-shadow: 0px 0px 10px #e1e1e1;">
                <div class="text-dark p-1 pr-3 m-1"><a href="index.php" >
                  </a><span><b>Quantity</b></span><span style="color: orangered; font-size: 18px;"><b> > Create</b></span>
                </div>
              </div>
          </div>

           <div class="row mt-4 p-3">
              <div class="form-row">
                <div class="form-group col-md-1">
                  <label class="ml-2">S.no</label>
                  <input type="text" class="form-control" name="sno" placeholder="S.no">
                </div>
                <div class="form-group col-md-3">
                  <label>Product Name</label>
                  <input type="text" class="form-control" name="pname" placeholder="Product Name">
                </div>
                <div class="form-group col-md-2">
                  <label>Quantity</label>
                  <input type="text" class="form-control" name="qname" placeholder="Quantity">
                </div>
                <div class="form-group col-md-2">
                  <label>Reatil</label>
                  <input type="text" class="form-control" name="iname" placeholder="Reatil">
                </div>
                <div class="form-group col-md-2">
                  <label>Wholeshale</label>
                  <input type="text" class="form-control" name="iname" placeholder="Wholeshale">
                </div>
                <div class="form-group col-md-2">
                  <label>Scode</label>
                  <input type="text" class="form-control" name="iname" placeholder="Scode">
                </div>
           </div>
         </div>
            <div class="row p-3">
                <div class="table-responsive table-stripped">
                    <table class="table w-100">
                        <thead class="bg-light text-center">
                            <tr>
                                <th>S.no</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Reatil Price</th>
                                <th>Wholesale Price</th>
                                <th>Product Code</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-center" id="viewQuantity">
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
                 

      </div>
  </main>
</div>

<script type="text/javascript">
   function updateQuantity(id){
      // alert("entered");
      var val = document.getElementById("quantityId"+id).value;
      // alert(val);
      // alert(id);
      if(val == ""){
        document.getElementById("errorMessage").innerHTML = "Can't be blank...!";
        document.getElementById("errorMessage").style.display = "block";
        setTimeout(function(){
            document.getElementById("errorMessage").innerHTML = '';
            document.getElementById("errorMessage").style.display = "none";
            }, 4000);
      }
      else{
        $.ajax({
          url: 'code.php',
          type: 'POST',
          data: {
            'updateQuantity': true,
            'id': id,
            'qty': val,
          },
          success: function(response){
            if(response == 1){
              document.getElementById("successMessage").innerHTML = 'Successfully updated...!';
              document.getElementById("successMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("successMessage").innerHTML = '';
                  document.getElementById("successMessage").style.display = "none";
                  }, 4000);
              viewProducts();
            }
            else{
              document.getElementById("errorMessage").innerHTML = 'Something went wrong, please check all fields correctly...!';
              document.getElementById("errorMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("errorMessage").innerHTML = '';
                  document.getElementById("errorMessage").style.display = "none";
                  }, 4000);
            }
          }
        });
      }
    }
    
    function updateRetailRate(id){
      // alert("entered");
      var val = document.getElementById("retailRateId"+id).value;
      if(val == ""){
        document.getElementById("errorMessage").innerHTML = "Can't be blank...!";
        document.getElementById("errorMessage").style.display = "block";
        setTimeout(function(){
            document.getElementById("errorMessage").innerHTML = '';
            document.getElementById("errorMessage").style.display = "none";
            }, 4000);
      }
      else{
        $.ajax({
          url: 'code.php',
          type: 'POST',
          data: {
            'updateRetail': true,
            'id': id,
            'rate': val,
          },
          success: function(response){
            if(response == 1){
              document.getElementById("successMessage").innerHTML = 'Successfully updated...!';
              document.getElementById("successMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("successMessage").innerHTML = '';
                  document.getElementById("successMessage").style.display = "none";
                  }, 4000);
              viewProducts();
            }
            else{
              document.getElementById("errorMessage").innerHTML = 'Something went wrong, please check all fields correctly...!';
              document.getElementById("errorMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("errorMessage").innerHTML = '';
                  document.getElementById("errorMessage").style.display = "none";
                  }, 4000);
            }
            // alert(response);
          }
        });
      }
    }

    function updatewholesaleRate(id){
      // alert("entered");
      var val = document.getElementById("wholesaleRateId"+id).value;
      if(val == ""){
        document.getElementById("errorMessage").innerHTML = "Can't be blank...!";
        document.getElementById("errorMessage").style.display = "block";
        setTimeout(function(){
            document.getElementById("errorMessage").innerHTML = '';
            document.getElementById("errorMessage").style.display = "none";
            }, 4000);
      }
      else{
        $.ajax({
          url: 'code.php',
          type: 'POST',
          data: {
            'updatewholesale': true,
            'id': id,
            'rate': val,
          },
          success: function(response){
            if(response == 1){
              document.getElementById("successMessage").innerHTML = 'Successfully updated...!';
              document.getElementById("successMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("successMessage").innerHTML = '';
                  document.getElementById("successMessage").style.display = "none";
                  }, 4000);
              viewProducts();
            }
            else{
              document.getElementById("errorMessage").innerHTML = 'Something went wrong, please check all fields correctly...!';
              document.getElementById("errorMessage").style.display = "block";
              setTimeout(function(){
                  document.getElementById("errorMessage").innerHTML = '';
                  document.getElementById("errorMessage").style.display = "none";
                  }, 4000);
            }
            // alert(response);
          }
        });
      }
    }
</script>


<?php 
  include 'include/footer.php';
?>