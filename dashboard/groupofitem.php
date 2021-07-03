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
                  </a><span><b> Group of Item </b></span><span style="color: orangered; font-size: 18px;"><b> > Create</b></span>
                </div>
              </div>
            </div>

          		<div class="row mt-5">
          			<div class="col-md-3"></div>
          			<div class="col-md-6 p-3" style="box-shadow: -10px 10px 5px #e1e1e1;">
	          			<form id="groupNameRegistration">
	      					<div class="form-group border-bottom bg-info p-2 text-center">
	      						<h6 class="text-white pt-1">Group of Item</h6>
	      					</div>
						  <div class="form-group">
						    <label><b>Group Name</b></label>
						    <input type="text" class="form-control" id="name" placeholder="Enter Group Name">
						  </div>
						  <div class="form-group">
						    <input type="submit" class="btn btn-success btn-sm" id="registerGroupName" value="Create">
						    <input type="reset" class="btn btn-danger btn-sm ml-3" value="Reset">
						  </div>
						</form>
					</div>
					<div class="col-md-3"></div>
          		</div>
         </div>
    </main>
</div>


<?php 
	include 'include/footer.php'
?>