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
                    <span class="h5 text-white">Invoice</span>
                  </div>
              </div>
            </div>
                      
                        <div class="row mt-4">
              <div class="col-md-12">
                 <div class="card mb-4">
                            <div class="card-header text-white bg-secondary">
                                <i class="fas fa-table mr-1"></i>
                                Bill Details
                            </div>
                              <div class="card-body" >
                                  <div class="table-responsive text-center">
                                      <table class="table table-bordered w-100" id="dataTable">
                                          <thead>
                                              <tr>
                                                  <th>S.No</th>
                                                  <th>Invoice</th>
                                                  <th>Customer Name</th>
                                                  <th>Phone No.</th>
                                                  <th>Date</th>
                                                  <th>Purchases Type</th>
                                                  <th>Total</th>
                                                  <th>Paid</th>
                                                  <th>Due</th>
                                                  <th>View</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                                  
                                              </tr>
                                          </thead>
                                          <tbody id="billView">
                                            
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