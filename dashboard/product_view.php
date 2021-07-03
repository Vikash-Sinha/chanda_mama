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
                    <span class="h5 text-white">Product Details</span>
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
                                                  <th>name</th>
                                                  <th>Group</th>
                                                  <th>Unit</th>
                                                  <th>Purchases Rate</th>
                                                  <th>Reatil Rate</th>
                                                  <th>Wholesale Rate</th>
                                                  <th>Alert Qty</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                                  
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
                                          <tbody class="bg-white" id="viewProducts">
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>


          <!-- Modal to update data-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <form id="updateProductForm">
                      <div class="form-group border-bottom bg-info p-2 text-center">
                        <h6 class="text-white pt-1">Item (Product) Update</h6>
                      </div>
                
                        <div class="form-row" id="editProductData">
                            
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="updateProduct" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </main>
</div>




<?php 
  include 'include/footer.php'
?>