
<?php 
  require_once '../../../Controllers/modifyEmp.php';
  $emp = new Employee;
  $select = $emp->getInf();
  $emp->addEmp();
  $emp->delete();

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
  <body>
    <div class="container-scroller">
      <?php include '../navbar.php'; ?>
      <div class="container-fluid page-body-wrapper">
          
        <?php include '../sidebar.php'; ?>
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="modal-content">
            <div class="modal-body">
                <form role="form" method="POST" action="../employees/employees_Admin.php">
                    <div class="card-body">
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">phone number</label>
                            <input type="text" class="form-control" placeholder="enter your phone number" name="Pnumer" required>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">status</label>
                            <input type="text" id="disabledTextInputPassword" class="form-control" placeholder="enter your status " name="status" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">name</label>
                            <input type="text" id="disabledTextInputFirstName" class="form-control" placeholder="enter your name" name="name" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" id="disabledTextInputEmail" class="form-control" placeholder="enter your Email" name="email" required>
                        </div>
                        
                        
                        <div class="form-group col-md-3">
                            <label for="Date of Birth"></label>
                            <!-- <input type="text" class="form-control" id="Date of Birth" placeholder="absent"> -->
                        </div>
                             <div class="form-group col-md-3">
                                <label for=" Account ID" class="col-md-12"></label>
                                <button type="submit" id="add" class="btn btn-primary col-md-5" name="submitEmp" >Submit</button>
                                <button type="button" class="btn btn-default col-md-5" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include '../footer.php'; ?>
          <!-- partial -->
        </div>
          <?php //include '../modals.php'; ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
      <?php include '../scripts.php'; ?>
      <script src="../../js/rejex.js"></script>
  </body>
</html>