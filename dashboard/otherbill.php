<?php 
	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';
?>
	
<div id="layoutSidenav_content">
  <main class="mt-1 mb-3">
      <div class="container-fluid">
          <div class="row hidePrint">
              <div class="col-md-12 bg-white"  style="box-shadow: 0px 0px 10px #e1e1e1;">
                <div class="text-dark p-1 pr-3 m-1"><a href="index.php" >
                  </a><span><b>Other -  Billing</b></span></span>
                </div>
              </div>
          </div>

          <div class="row hidePrint mt-2">
            <div class="col-md-12 p-4">
                <form method="POST" action="">
                    <div class="form-row">
                      <button class="btn btn-primary btn-sm">New Bill</button>
                    </div>
                </form>
            </div>
          </div>

            <div class="row hidePrint mt-1">
                <div class="col-md-12 p-2" style="box-shadow: 0px 0px 2px #e1e1e1;">
                         <form onsubmit="return my()">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                              <label>Product</label>
                              <div id="billTypeOption"></div>
                            </div>
                            <div class="form-group col-md-2">
                              <label>Sale Type</label>
                              <select class="form-control" id="saleType" required>
                                <option disabled value="">Choose Any</option>
                                <option selected="">Retail</option>
                                <option>Whole Sale</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label >Rate</label>
                                  <div id="id">
                                  <input type="number" class="form-control" id="rate" placeholder="₹" required>
                                  </div>
                             
                            </div>
                            <div class="form-group col-md-1">
                              <label>Quantity</label>
                              <input type="number" style="width:100px" class="form-control" id="qty" placeholder="" required>
                             <div  id="avl"></div> 
                            </div>
                            <div class="form-group col-md-2">
                              <label>Unit</label>
                              <select name="" id="units" class="form-control" required>
                              <!--  -->
                              </select>
                              <input type="hidden"  id="in" class="form-control bg-white" >

                            </div>

                            
                            <div class="form-group col-md-1">
                              <label>GST (%)</label><br>
                              <input type="number" id="gst" class="form-control" value="0">
                            </div>
                        
                            <div class="form-group text-center col-md-1">
                              <label class="text-white">.</label><br>
                              <input type="submit" id="add_Bills"  name="submit" value="Add"  class="btn px-4 btn-primary btn-sm"  >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
                <div class="row mt-4">
                    <div class="col-md-12" style="box-shadow: -5px 5px 5px #e1e1e1;">
                      <div class="row pt-2 pb-3 mb-3 bg-light" style="border-bottom: 2px solid #e1e1e1">
                        <div class="col-md-12 text-center">
                          <h5>Billing Information</h5>
                        </div>                     
                      </div>
                      <div class="row p-3">
                         <div class="col-md-7 border-right">
                               <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Customer Name:</label>
                                  <div class="col-sm-8">
                                     <input type="text" id="custName" class="form-control" value="NA">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Customer Phone:</label>
                                  <div class="col-sm-8">
                                     <input type="tel" id="custPhone" class="form-control" value="">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Sale Type</label>
                                  <div class="col-sm-8">
                                    <select class="form-control" id="typeOfSale">
                                      <option disabled>Choose Any</option>
                                      <option selected="">Retail</option>
                                      <option>Whole Sale</option>
                                    </select>
                                  </div>
                               </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Invioce Id:</label>
                                  <div class="col-sm-8">
                                     <input type="text" disabled="" id="invoiceId" class="form-control bg-white" >
                                  </div>
                               </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Date :</label>
                                  <div class="col-sm-8">
                                     <input type="date" value="<?php echo date('Y-m-d') ?>" id="date" class="form-control" >
                                  </div>
                               </div>
                         </div>
                         <div class="col-md-5">
                            <div class="">
                              <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Shop Name: </label>
                                  <div class="col-sm-6">
                                     <input type="text" readonly class="form-control-plaintext" disabled value="M.S Shop">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Contact: </label>
                                  <div class="col-sm-6">
                                     <input type="text" class="form-control-plaintext" disabled value="+91-9955012527, 9117946465">
                                  </div>
                               </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Address</label>
                                  <div class="col-sm-6">
                                     <textarea style="width:300px" class="form-control-plaintext" disabled>S P SHAHI MARKET, PHAHLADPUR, MUSHAHRI, MUZAFFARPUR 843119</textarea>
                                  </div>
                                </div>
                         </div>
                       </div>
                    </div>
                    <div class="row"> 
                      <div class="col-md-12 mt-1">
                             <form action="delete.php" method="POST">
                            <table class="table text-center table-bordered table-responsive-md w-100">
                               <thead class="bg-light">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Item name</th>
                                        <th>Quantity</th>
                                        <th>Rate</th>
                                        <th>GST  (%)</th>
                                        <th>Total</th>  
                                        <th><button type="submit" name="dsub" class=" btn btn-danger" >DELETE</button></th>                          
                                    </tr>
                                </thead>
                                <tbody id="viewLiveBill">
                                   
                                </tbody>
                            </table>
                       </div>
                    </div>
                  </form>
                    <div class="row">
                      <div class="col-md-7 mt-5">
                         <div class="row">
                            <div class="form-group ml-3">
                                <button id="saveBill" class="btn btn-success btn-sm hidePrint"><i class="fas fa-check-circle"></i> Save</button>
                            </div> 
                            <div class="form-group ml-2">
                              <button class="btn btn-primary btn-sm hidePrint" disabled="" id="printInvoice">Print</button>
                            </div>
                            <!-- <div class="form-group ml-2">
                              <button class="btn btn-danger btn-sm hidePrint"  id="cancel" onclick="dele();" >Cancel</button>
                            </div> -->
                         </div>
                       </div>
                       <div class="col-md-5 mt-5">
                         <div class="row">
                            <div class="col-md-12">
                             <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label" style="">Sub Total (₹)</label>
                                  <div class="col-sm-8">
                                     <input type="number" disabled="" id="subTotal" class="text-center form-control bg-white">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Discount (%)</label>
                                  <div class="col-sm-8">
                                     <input type="number" id="discount" value="0" onInput="discounts()" class="form-control text-center ">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Total Bill (₹) </label>
                                  <div class="col-sm-8">
                                     <input type="number" disabled="" id="finalTotal" class="text-center form-control bg-white">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label for="" class="col-sm-4 col-form-label">Total Paid (₹) </label>
                                  <div class="col-sm-8">
                                     <input type="number" id="totalPaid" onInput="totalPaids()" class="text-center form-control bg-white">
                                  </div>
                               </div>
                               <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-4 col-form-label">Total Due (₹) </label>
                                  <div class="col-sm-8">
                                     <input type="number" disabled="" id="totalDue" class="text-center form-control bg-white">
                                  </div>
                               </div>
                            </div> 
                         </div>
                       </div>
                    </div>


                </div>
      </div>
  </main>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script type="text/javascript">
        // function fun(){
        //   alert('hello');
        //   var discount = document.getElementById("product").value; 
        //   alert(discount);
        // }

    function discounts(){
      var discount = document.getElementById("discount").value;
      var subTotal = document.getElementById("subTotal").value;
      var finalAmount = subTotal-((subTotal*discount)/100);
      document.getElementById("finalTotal").value = finalAmount;
    }
    function totalPaids(){
      var finalTotal = document.getElementById("finalTotal").value;
      var totalPaid = document.getElementById("totalPaid").value;
      var totalDue = finalTotal-totalPaid;
      document.getElementById("totalDue").value = totalDue;
    }
   

function my()
{
  
  var qty=0.0;
       var product = $("#product").val(); 
       var rate = $("#rate").val();
     //  var qty= $("#qty").val(); 
     var qty= document.getElementById("qty").value; 
       var unit= $("#units").val();
       var saleType= $("#saleType").val();
       var gst= $("#gst").val();
      // var discount= $("#discount").val(); 
       var invoice= $("#in").val(); 
      // var availQty= $("#avalable").val(); 
  var availQty= document.getElementById("avalable").value;


  alert(qty);
      alert(availQty);


      if ( qty >= availQty)
      {
        alert(product);
     // alert(availQty);
      alert('sgreater');
      } 
      else {
        alert('less');
      } 


      if(unit=="G")
      {
        qty=qty/1000;
      }
      if(unit=="ML")
      {
        qty=qty/1000;
      }
      if(unit=="CM")
      {
        qty=qty/100;
      }

      
      // }else{

      //   alert(qty);
      // alert(availQty);
      // alert('less');


      // }


     
       if(qty>availQty)
       {
       
        document.getElementById("errorMessage").innerHTML = 'Check qty Avability..!';
        document.getElementById("errorMessage").style.display = "block";
        setTimeout(function(){
            document.getElementById("errorMessage").innerHTML = '';
            document.getElementById("errorMessage").style.display = "none";
            }, 4000);
                     


    return false; 
       
       }else{
        
  $.ajax({
          url: "code.php",
          type : "POST",
            data:{prod:product,saletype:saleType,q:qty,u:unit,Gst:gst,Rate:rate,in:invoice,},  
          success : function(data){
                  alert(data);
                  if (data==1)
                  {
                  //  dis();
                   // total();
                    //alert( 'Successfully added');
                  }

           // alert(data);
           // $("#id").html(data);
          }
       });

      }

}

function mys()
{
  var availQty= document.getElementById("avalable").value;
  //alert(availQty);
  var qty= document.getElementById("qty").value; 
 // alert(availQty);

 alert('avl'+availQty);
        alert('qty'+qty);
  if ( qty >= availQty)
      {
        alert('avl'+availQty);
        alert('qty'+qty);
     // alert(availQty);
      alert('sgreater');
      } 
      else {
        alert('avl'+availQty);
        alert('qty'+qty);
        alert('less');
      } 

      return false;
}

</script>
<?php 
  include 'include/footer.php';
?>
