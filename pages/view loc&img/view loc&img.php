<!DOCTYPE html>
<html lang="en">

<?php 
  require_once '../../../Controllers/modifyEmp.php';
  $emp = new Employee;
  $select = $emp->getInf();
  $emp->addEmp();

?>
<?php include '../head.php'; ?>
  <body>
    <div class="container-scroller">
    <?php include '../navbar.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <?php include '../sidebar.php'; ?>
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row income-expense-summary-chart-text">
                      <div class="col-xl-4">
                        <h5>Employees</h5>
                      </div>
                      <form class="d-flex b-rounded-right" method="GET">
                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Enter Name">
                    <button tybe="submit" class="btn btn-primary " name="filter">search</button>
                    </form>
                    </div>
                    <div class="row income-expense-summary-chart mt-3">
                      <div class="col-md-12">
                          <table id="example3" class="table table-bordered table-striped">
                              <thead style="font-size:10px">
                                  <tr>
                                      <th>phone number</th>
                                      <th>name</th>
                                      <th>status</th>
                                      <th>email</th>

                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                foreach($select as $info) {?>
                                    <tr>
                                      <td><?php echo $info['Pnumber']?></td>
                                      <td><?php echo $info['name']?></td>
                                      <td><?php echo $info['status']?></td>
                                      <td><?php echo $info['email']?></td>

                                     </tr>
                               <?php }?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
          <?php //include '../modals.php'; ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      <?php include '../scripts.php'; ?>
  </body>
</html>