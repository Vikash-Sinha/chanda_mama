$(document).ready(function(){

  //*************************** code for admin section start from here ***************************
  // code to add data
  $("#register_admin").on("click",function(e){
    e.preventDefault();
    var name = $("#name").val();
    var post = $("#post").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if(name == "" || post == null || email == "" || password == ""){
      document.getElementById("errorMessage").innerHTML = 'All fields are required..!';
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
          'addAdmin': true,
          'name': name,
          'post': post,
          'email': email,
          'password': password,
        },
        success: function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully added...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            $("#adminRegisterForm").trigger("reset");
          }
          else if(response == "duplicateEmail"){
            document.getElementById("errorMessage").innerHTML = 'Duplicate email entry is not allowed...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){ 
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
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

    });

  



  // code to delete data
  $(document).on("click",".deleteAdmin", function(e){
    e.preventDefault();
    var adminId = $(this).data("id");
    // alert(adminId);
    var retVal = confirm("Do you want to delete ?");
    if( retVal == true ) {
    $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'deleteAdminData': true,
          'id': adminId,
        },
        success : function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully deleted...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            viewAdminData();
          }
          else{
            document.getElementById("errorMessage").innerHTML = 'Something went wrong, please try again...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
          }
        }
      });
    }
  });

  //*************************** code for admin section end here ***************************

  //*************************** code for items group name section start from here ***************************

  // code to add data

  $("#registerGroupName").on("click",function(e){
    e.preventDefault();
    var name1 = $("#name").val();
    var name = name1.toUpperCase();

    if(name == ""){
      document.getElementById("errorMessage").innerHTML = 'All fields are required..!';
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
          'addGroupName': true,
          'name': name.toUpperCase(),
        },
        success: function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully added...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            $("#groupNameRegistration").trigger("reset");
          }
          else if(response == "duplicateName"){
            document.getElementById("errorMessage").innerHTML = 'Duplicate group name entery is not allowed...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){ 
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
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
  });

  // code to view / get data
    function viewGroupName(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'viewGroupName': true,
        },
        success : function(response){
          $("#viewItemGroup").html(response);
        }
      });
    }
    viewGroupName();

  // code to delete data
  $(document).on("click",".deleteGroupName", function(e){
    e.preventDefault();
    var id = $(this).data("id");
    // alert(adminId);
    var retVal = confirm("Do you want to delete ?");
    if( retVal == true ) {
    $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'deleteGroupName': true,
          'id': id,
        },
        success : function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully deleted...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            viewGroupName();
          }
          else{
            document.getElementById("errorMessage").innerHTML = 'Something went wrong, please try again...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
          }
        }
      });
    }
  });

  //*************************** code for items group name section end here ***************************

  //*************************** code for items unit name and symbol section start from here ***************************

  // code to add data

  $("#registerUnitName").on("click",function(e){
    e.preventDefault();
    var unitName1 = $("#unitName").val();
    var unitSymbol1 = $("#unitSymbol").val();
    var unitName = unitName1.toUpperCase();
    var unitSymbol = unitSymbol1.toUpperCase();

    if(unitName == "" || unitSymbol == ""){
      document.getElementById("errorMessage").innerHTML = 'All fields are required..!';
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
          'addUnit': true,
          'unitName': unitName, 
          'unitSymbol': unitSymbol,
        },
        success: function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully added...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            $("#registerUnit").trigger("reset");
          }
          else if(response == "duplicateNameOrSymbol"){
            document.getElementById("errorMessage").innerHTML = 'Duplicate name or symbol entery is not allowed...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){ 
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
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
  });

  // code to view / get data
    function viewUnitName(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'viewUnitName': true,
        },
        success : function(response){
          $("#viewItemUnit").html(response);
        }
      });
    }
    viewUnitName();

  // code to delete data
  $(document).on("click",".deleteUnitName", function(e){
    e.preventDefault();
    var id = $(this).data("id");
    // alert(adminId);
    var retVal = confirm("Do you want to delete ?");
    if( retVal == true ) {
    $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'deleteUnitName': true,
          'id': id,
        },
        success : function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully deleted...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            viewUnitName();
          }
          else{
            document.getElementById("errorMessage").innerHTML = 'Something went wrong, please try again...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
          }
        }
      });
    }
  });

  //*************************** code for items unit name and symbol section end here ***************************

  //*************************** code for product add section start from here ***************************


  // code to view / get data to database from from
    function addProductGroupType(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'addProductGroup': true,
        },
        success : function(response){
          $("#typeOfGroup").html(response);        
        }
      });
    }
    addProductGroupType();

    function addProductUnitType(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'addProductUnit': true,
        },
        success : function(response){
          $("#typeofUnit").html(response);        
        }
      });
    }
    addProductUnitType();

  //*************************** code for product add section start from here ***************************

  // code to add data

  $("#registerProduct").on("click",function(e){
    e.preventDefault();
    var name1 = $("#name").val();
    var productGroup = $("#productGroup").val();
    var unit = [];
    $('input.units:checkbox:checked').each(function () {
        unit.push($(this).val());
    });
    var serializedUnit = JSON.stringify(unit);
    var prate = $("#prate").val();
    var rrate = $("#rrate").val();
    var hrate = $("#hrate").val();
    var qalert = $("#qalert").val();
    var name = name1.toUpperCase();
    //alert(productGroup+' - '+name+' - '+serializedUnit+' - '+prate+' - '+rrate+' - '+hrate+' - '+qalert);

    if(name == "" || productGroup == "Choose Any" || prate == "" || rrate == "" || hrate == "" || qalert == ""){
      document.getElementById("errorMessage").innerHTML = 'All fields are required..!';
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
          'addProduct': true,
          'name': name,
          'productGroup': productGroup, 
          'serializedUnit': serializedUnit,
          'prate': prate,
          'rrate': rrate,
          'hrate': hrate,
          'qalert': qalert,
        },
        success: function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully added...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            $("#registerProductForm").trigger("reset");
          }
          else if(response == "duplicateName"){
            document.getElementById("errorMessage").innerHTML = 'Duplicate name entery is not allowed...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){ 
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
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

  });
  // code to view / get data
    function viewProducts(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'viewProducts': true,
        },
        success : function(response){
          $("#viewProducts").html(response);
        }
      });
    }
    viewProducts();


    $(document).on("click",".deleteProduct", function(e){
    e.preventDefault();
    var id = $(this).data("id");
    // alert(adminId);
    var retVal = confirm("Do you want to delete ?");
    if( retVal == true ) {
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'deleteProduct': true,
          'id': id,
        },
        success : function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully deleted...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            viewProducts();
          }
          else{
            document.getElementById("errorMessage").innerHTML = 'Something went wrong, please try again...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
          }
        }
      });
    }
  });


    $(document).on("click",".editProduct", function(e){
    e.preventDefault();
    var id = $(this).data("id");
    $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'editProduct': true,
          'id': id,
        },
        success : function(response){
          $("#editProductData").html(response);
        }
      });
  });

    $("#updateProduct").on("click",function(e){
      // alert("kii");
    e.preventDefault();
    var name = $("#name").val();
    var id = $("#id").val();
    var prate = $("#prate").val();
    var rrate = $("#rrate").val();
    var hrate = $("#hrate").val();
    var qalert = $("#qalert").val();

    if(name == "" || prate == "" || rrate == "" || hrate == "" || qalert == ""){
      alert("All fields are required..!");
    }
    else{
      $.ajax({
        url: 'code.php',
        type: 'POST',
        data: {
          'updateProduct': true,
          'id': id,
          'name': name,
          'prate': prate,
          'rrate': rrate,
          'hrate': hrate,
          'qalert': qalert,
        },
        success: function(response){
          if(response == 1){
            $("#exampleModal").modal('toggle');
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
    
  });


  //*************************** code for product add section end here ***************************

  //*************************** code for quantity section start here ***************************
    
    // code to view / get data to database from from
    function viewQuantityData(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'viewQuantityDetails': true,
        },
        success : function(response){
          $("#viewQuantity").html(response);
        }
      });
    }
    viewQuantityData();

   


  //*************************** code for quantity section end here ***************************

  //*************************** code for bill view section end here ***************************

// code to view / get data to database from from
    function addProductGroup(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'addGroupToBill': true,
        },
        success : function(response){
          $("#billTypeOption").html(response);        
        }
      });
    }
    addProductGroup();

    function addProductUnit(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'addUnitToBill': true,
        },
        success : function(response){
          $("#billTypeofUnit").html(response);        
        }
      });
    }
    addProductUnit();

  // code to view / get data to database from from
    function viewbillData(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'viewBillDetails': true,
        },
        success : function(response){
          $("#billView").html(response);
        }
      });
    }
    viewbillData();


    // code to delete data
  $(document).on("click",".deleteBill", function(e){
    e.preventDefault();
    var adminId = $(this).data("id");
    // alert(adminId);
    var retVal = confirm("Do you want to delete ?");
    if( retVal == true ) {
    $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'deleteBillData': true,
          'id': adminId,
        },
        success : function(response){
          if(response == 1){
            document.getElementById("successMessage").innerHTML = 'Successfully deleted...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            viewbillData();
          }
          else{
            document.getElementById("errorMessage").innerHTML = 'Something went wrong, please try again...!';
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
          }
        }
      });
    }
  });


    var bilingData = "";
    var billCount = 0;
    var subtotal = 0;
    var finalTotal = 0;

//     $("#add_Bill").on("click",function(e){
//       e.preventDefault();
    
//       var qty=0.0;
//        var product = $("#product").val(); 
//        var rate = $("#rate").val();
//        var qty= $("#qty").val();  
//        var unit= $("#units").val();
//        var saleType= $("#saleType").val();
//        var gst= $("#gst").val();
//       // var discount= $("#discount").val(); 
//        var invoice= $("#in").val(); 
//        var availQty= $("#avalable").val(); 

//       if(unit=="G")
//       {
//         qty=qty/1000;
//       }
//       if(unit=="ML")
//       {
//         qty=qty/1000;
//       }
//       if(unit=="CM")
//       {
//         qty=qty/100;
//       }

//       alert(qty);
//       alert(availQty);
//        if(qty>availQty)
//        {
// alert('ki');

//        }else{

//         alert('ka')
//        }  



//       if( qty > availQty || availQty==0 || product == "Choose Any" || qty == "" || unit == null || saleType == "Choose Any" || rate =="" || gst == ""){
//         document.getElementById("errorMessage").innerHTML = 'All fields are required..!';
//         document.getElementById("errorMessage").style.display = "block";
//         setTimeout(function(){
//             document.getElementById("errorMessage").innerHTML = '';
//             document.getElementById("errorMessage").style.display = "none";
//             }, 4000);
//       }
//       // else if(qty > availQty){
//       //   document.getElementById("errorMessage").innerHTML = 'Check. Avalibility';
//       //   document.getElementById("errorMessage").style.display = "block";
//       //   setTimeout(function(){
//       //       document.getElementById("errorMessage").innerHTML = '';
//       //       document.getElementById("errorMessage").style.display = "none";
//       //       }, 4000);
//       // }
//       else{
//         // alert("else"+qty);
//         $.ajax({
//           url: "code.php",
//           type : "POST",
//             data:{prod:product,saletype:saleType,q:qty,u:unit,Gst:gst,Rate:rate,in:invoice,},  
//           success : function(data){
//                  // alert(data);
//                   if (data==1)
//                   {
//                     dis();
//                     total();
//                     //alert( 'Successfully added');
//                   }

//            // alert(data);
//            // $("#id").html(data);
//           }
//        });



        // var total = ((rate*qty)+(((rate*qty)*gst)/100));
        // subtotal += total;
        // finalTotal = (subtotal-(subtotal*discount)/100);
        // billCount++;
        // bilingData += '<tr><td>'+billCount+'</td><td>'+product+'</td><td>'+qty+'</td><td>'+rate+'</td><td>'+gst+'</td><td>'+total+'</td></tr>';
        // $("#viewLiveBill").html(bilingData); 
        // document.getElementById("subTotal").value = subtotal; 
        // document.getElementById("finalTotal").value = finalTotal; 
        // $("#billForm").trigger("reset");    
    //   }

    // });
      
function total ()
{
 // var discount = document.getElementById("discount").value;
 // alert(discount)
  $.ajax({
    url : "code.php",
    type : "POST",
    data: {
      'setInvoiceId': true,
    },
    success : function(response){
     // alert(response);
     
    
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          totalinvoice:response,
        },
        success : function(res){
        //  alert(res);
          rest = (res-(res*discount)/100);
          document.getElementById("subTotal").value = res; 
           document.getElementById("finalTotal").value = res; 


      // document.getElementById("invoiceId").value = response;
      // document.getElementById("in").value = response;
    }
  
  });
    }
});             



}



total();


     function dis()
          {
                 
            $.ajax({
              url : "code.php",
              type : "POST",
              data: {
                'setInvoiceId': true,
              },
              success : function(response){
               // alert(response);
               
              
                $.ajax({
                  url : "code.php",
                  type : "POST",
                  data: {
                    invoice:response,
                  },
                  success : function(res){
                   // alert(res);
                    $("#viewLiveBill").html(res);


                // document.getElementById("invoiceId").value = response;
                // document.getElementById("in").value = response;
              }
            
            });
              }
          });
          }
      
      dis();

    $("#saveBill").on("click",function(e){
      e.preventDefault();
      // alert("kiiii");

      var name = document.getElementById("custName").value;
      var invoiceId = document.getElementById("invoiceId").value;
      var phone = document.getElementById("custPhone").value;
      var date = document.getElementById("date").value;
      var purchaseType = document.getElementById("typeOfSale").value;
      var total = document.getElementById("finalTotal").value;
      var paid = document.getElementById("totalPaid").value;
      var due = document.getElementById("totalDue").value;

      // alert(name);
      // alert(invoiceId);
      // alert(phone);
      // alert(date);
      // alert(purchaseType);
      // alert(total);
      // alert(paid);
      // alert(due);

      if(name == "" || invoiceId == ""|| purchaseType == "Choose Any" || date =="" || total == "" || paid == "" || due == ""){
          document.getElementById("errorMessage").innerHTML = 'All fields are required...!';
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
          'addBill': true,
          'name': name,
          'invoiceId': invoiceId,
          'phone': phone,
          'date': date,
          'purchaseType': purchaseType,
          'total': total,
          'paid': paid,
          'due': due,
        },
        success: function(response){
          // alert(response);
          if(response == 1){
            $("#exampleModal").modal('toggle');
            document.getElementById("successMessage").innerHTML = 'Successfully updated...!';
            document.getElementById("successMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("successMessage").innerHTML = '';
                document.getElementById("successMessage").style.display = "none";
                }, 4000);
            document.getElementById("printInvoice").disabled = false;
            viewProducts();
          }
          else if(response == "duplicateInvoiceId"){
            document.getElementById("errorMessage").innerHTML = "Duplicate invoice id isn't allowed, Please generate new invoice...!";
            document.getElementById("errorMessage").style.display = "block";
            setTimeout(function(){
                document.getElementById("errorMessage").innerHTML = '';
                document.getElementById("errorMessage").style.display = "none";
                }, 4000);
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

    });

    function setInvoiceId(){
      $.ajax({
        url : "code.php",
        type : "POST",
        data: {
          'setInvoiceId': true,
        },
        success : function(response){
          document.getElementById("invoiceId").value = response;
          document.getElementById("in").value = response;
        }
      });
    }

    setInvoiceId()


    $(document).keypress(
      function(event){
        if (event.which == '13') {
          event.preventDefault();
        }
    });

    $("#printInvoice").on("click",function(e){
      e.preventDefault();
      // alert("kiiii");
      window.print();
    });
});
$(document).ready(function(){
  $("#saleType").on("change",function(e){

     var a= $("#product").val(); 
     var b= $("#saleType").val(); 
     if(a==null)
     {
       alert('Select Product')
       return false;
     }
     $.ajax({
      url: "code.php",
      type : "POST",
        data:{product:a,saletype:b},  
      success : function(data){
        $("#id").html(data);
      }
   });
  });
});
function fun(){
  var a= $("#product").val(); 
     var b= $("#saleType").val();
     $.ajax({
      url: "code.php",
      type : "POST",
        data:{product:a,saletype:b},  
      success : function(data){
        $("#id").html(data);
      }
   });

   $.ajax({
    url: "code.php",
    type : "POST",
      data:{avl:a,},  
    success : function(dat){
     // alert(dat)
      $("#avl").html(dat);
    }
 });
 $.ajax({
  url: "code.php",
  type : "POST",
    data:{upro:a,},  
  success : function(dat){
   // alert(dat)
    $("#units").html(dat);
  }
});
 

}


unit();
function dele()
{

  var invoice= $("#in").val(); 
 // alert(invoice);


  $.ajax({
    url: "code.php",
    type : "POST",
      data:{d:invoice,},  
    success : function(data){
      if(data==1)
      {
        //alert('Deleted');
      }
     // alert(data);
      //$("#id").html(data);
    }
 });


}

function del(n, v,q)
{
 // var b= $("#did").val();
 // alert(n);
   // alert(v);
  //  alert(q);
  $.ajax({
    url: "code.php",
    type : "POST",
      data:{delid:v,},  
    success : function(data){
      if(data==1)
      {
        //alert('Deleted');
      }
     // alert(data);
      //$("#id").html(data);
    }
 });

 $.ajax({
  url: "code.php",
  type : "POST",
    data:{dpro:n,dqty:q,},  
  success : function(data){
  //  alert(data);
    if(data==1)
    {
      //alert('delete');
    }
   // alert(data);
    //$("#id").html(data);
  }
});
}
