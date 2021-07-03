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
                  </a><span><b> Unit of Item </b></span><span style="color: orangered; font-size: 18px;"><b> > Create</b></span>
                </div>
              </div>
          </div>

           <div class="row mt-5">
                <div class="col-md-3"></div>
                  <div class="col-md-6 p-3" style="box-shadow: -10px 10px 5px #e1e1e1;">
                    <form id="registerUnit">
                      <div class="form-group border-bottom bg-info p-2 text-center">
                        <h6 class="text-white pt-1">Unit of Item</h6>
                      </div>
                      <div class="form-group">
                        <label><b>Unit Name</b></label>
                        <input type="text" class="form-control" id="unitName" placeholder="Pieces/kiloGram/liter">
                      </div>
                      <div class="form-group">
                        <label><b>Symbol</b></label>
                        <input type="text" class="form-control" id="unitSymbol" placeholder="Pcs/kg/g/m">
                      </div>
                      <div class="form-group">
                        <input type="submit" id="registerUnitName" class="btn btn-success btn-sm" value="Create">
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
  include 'include/footer.php';
?>