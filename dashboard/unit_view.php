<?php 
  include 'include/header.php';
  include 'include/top-header.php';
  include 'include/menu.php';
?>
  
<div id="layoutSidenav_content">
    <main class="mt-1">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 bg-info"  style="box-shadow: 0px 0px 10px #e1e1e1;">
                  <div class="text-dark p-1 pr-3 m-1 text-center">
                    <span class="h5 text-white">Unit Details</span>
                  </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-12">
                 <div class="card mb-4">
                            <div class="card-header text-white bg-secondary">
                                <i class="fas fa-table mr-1"></i>
                                Unit Details
                            </div>
                              <div class="card-body" style="background-color: #F0FFFF">
                                  <div class="table-responsive text-center">
                                      <table class="table table-bordered w-100" id="dataTable">
                                          <thead>
                                              <tr>
                                                  <th>S.No</th>
                                                  <th>Unit Name</th>
                                                  <th>Unit Symbol</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <!-- <tfoot>
                                              <tr>
                                                  <th>Name</th>
                                                  <th>Position</th>
                                                  <th>Office</th>
                                                  <th>Age</th>
                                                  <th>Start date</th>
                                                  <th>Salary</th>
                                              </tr>
                                          </tfoot> -->
                                          <tbody id="viewItemUnit" class="bg-white">
                                              

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
        </div>
    </main>
</div>




<?php 
  include 'include/footer.php'
?>