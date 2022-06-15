
<?php 
  require_once '../../../Controllers/modifyEmp.php';
  $id = $_GET['edit'];
  // require_once 'modify Employee.php';
  $emp = new Employee;
  $data = $emp->update();
  $select = $emp->getOne($id);

//   $userId = '';
//   $password = '';
//   $firstName = '';
//   $lastName = '';
//   $birthDate = '';
//   $salary =  '';
//   $email = '';
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
                <form role="form" method="POST" action="modify Employee.php">
                    <div class="card-body">
                    <?php foreach($select as $info){?>
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">phone number</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="phone number" name="Pnumber" value="<?php echo $info['Pnumber']?>"  required>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">status</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="status" name="status"  value="<?php echo $info['status']; ?>" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">name</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="name" name="name"  value="<?php echo $info['name']; ?>" required>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="disabledTextInput" class="form-label">E-mail</label>
                            <input type="email" id="disabledTextInput" class="form-control"  placeholder="email" name="email"  value="<?php echo $info['email']; ?>" required>
                        </div>
                        
                        
                        <div class="form-group col-md-3">
                            <label for="Date of Birth"></label>
                            <!-- <input type="text" class="form-control" id="Date of Birth" placeholder="absent"> -->
                        </div>
                             <div class="form-group col-md-3">
                                <label for=" Account ID" class="col-md-12"></label>
                                <button type="submit" class="btn btn-primary col-md-5" name="update">Update</button>
                                <button type="button" class="btn btn-default col-md-5" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                        <?php }?>
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
  </body>
</html>