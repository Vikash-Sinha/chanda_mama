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
                  </a><span><b>Admin</b></span></span>
                </div>
              </div>
          </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-1"></div>
                  <div class="col-md-10 p-4" style="box-shadow: -10px 5px 5px #e1e1e1;">
                    <form id="adminRegisterForm">
                      <div class="form-group border-bottom bg-info p-2 text-center">
                        <h6 class="text-white pt-1">Login</h6>
                      </div>
                
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label>Post</label>
                              <select class="form-control" id="post">
                                <option selected disabled>Choose Post</option>
                                <option value="Admin">Admin</option>
                                <option value="Biller">Biller</option>
                                <option value="Data Handler">Data Handler</option>
                              </select>
                            </div>
                             <div class="form-group col-md-6">
                              <label>Email</label>
                              <input type="email" class="form-control" id="email" placeholder="@gmail.com">
                            </div>
                             <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" id="password">
                                <!-- <input type="password" name="password" id="password-field password" class="form-control" placeholder="Password" required> -->
                                <!-- <input type="checkbox" toggle="#password-field" class="toggle-password"><span> Show Password</span> -->
                            </div>

                           
                            
                      <div class="form-group">
                        <input type="submit" id="register_admin" class="btn btn-success btn-sm" value="Add">
                        <input type="reset" class="btn btn-danger btn-sm ml-3" value="Reset">
                      </div>
                    </form>
                  </div>
                <div class="col-md-1"></div>
          </div>

      </div>
  </main>
</div>

<!-- <script type="text/javascript">
  $(".toggle-password").click(function() {
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

</script> -->

<?php 
  include 'include/footer.php';
?>