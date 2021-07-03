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
                  </a><span><b>Admin View</b></span></span>
                </div>
              </div>
          </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <form>
                <table class="table text-center table-bordered table-responsive-md w-100">
                   <thead>
                        <tr>
                            <th>S.No</th>
                            <th>name</th>
                            <th>Post</th>
                            <th>Email</th>
                            <th>Action</th>                          
                        </tr>
                    </thead>
                    <tbody id="viewAdmin">
                        
                    </tbody>
                </table>
            </form>
          </div>
        </div>

         


      </div>
  </main>
</div>



<?php 
  include 'include/footer.php';
?>