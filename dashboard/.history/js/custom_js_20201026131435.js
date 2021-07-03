  $(document).ready(function(){

    // code to view / get data to database from from
    function viewData(){
      $.ajax({
        url : "file_name.php",
        type : "POST",
        success : function(data){
          $("id_of_where_you_want_to_print_data").html(data);
        }
      });
    }
    viewData();

    // code to add data to database from when we click on save button whose id is save-button

    $("#save-button").on("click",function(e){
      e.preventDefault();
      var fname = $("#id_of_field").val();
      var lname = $("#id_of_field").val();

      $.ajax({
        url : "file_name.php",
        type : "POST",
        data : {first:fname, last:lname},
        success : function(data){
          viewData();
        }
      });

    })

  });