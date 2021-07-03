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

    $("#register_admin").on("click",function(e){
      e.preventDefault();
      var name = $("#name").val();
      var post = $("#post").val();
      var email = $("#email").val();
      var password = $("#password").val();

      $.ajax({
        url : "file_name.php",
        type : "POST",
        data : {name:name, post:post, email:email, password:password},
        success : function(data){
          viewData();
        }
      });

    })

  });