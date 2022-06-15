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
                        <h5>update profile</h5>
                      </div>
                      <div class="container">
                        <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                          <div class="card-body">
                            <div class="account-settings">
                              <div class="user-profile">
                                <div class="user-avatar">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">John Doe</h5>
                                <h6 class="user-email">John@Maxwell.com</h6>
                              </div>
                              <div class="about">
                                <h5>About</h5>
                                <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                          <div class="card-body">
                            <div class="row gutters">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label for="fullName">Full Name</label>
                                  <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                                </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label for="eMail">Email</label>
                                  <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                                </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                                </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                  <label for="website">Website URL</label>
                                  <input type="url" class="form-control" id="website" placeholder="Website url">
                                </div>
                              </div>
                            </div>
                            <div class="row gutters">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                  <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                  <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <style type="text/css">
                        body {
                            margin: 0;
                            padding-top: 40px;
                            color: #2e323c;
                            background: #f5f6fa;
                            position: relative;
                            height: 100%;
                        }
                        .account-settings .user-profile {
                            margin: 0 0 1rem 0;
                            padding-bottom: 1rem;
                            text-align: center;
                        }
                        .account-settings .user-profile .user-avatar {
                            margin: 0 0 1rem 0;
                        }
                        .account-settings .user-profile .user-avatar img {
                            width: 90px;
                            height: 90px;
                            -webkit-border-radius: 100px;
                            -moz-border-radius: 100px;
                            border-radius: 100px;
                        }
                        .account-settings .user-profile h5.user-name {
                            margin: 0 0 0.5rem 0;
                        }
                        .account-settings .user-profile h6.user-email {
                            margin: 0;
                            font-size: 0.8rem;
                            font-weight: 400;
                            color: #9fa8b9;
                        }
                        .account-settings .about {
                            margin: 2rem 0 0 0;
                            text-align: center;
                        }
                        .account-settings .about h5 {
                            margin: 0 0 15px 0;
                            color: #007ae1;
                        }
                        .account-settings .about p {
                            font-size: 0.825rem;
                        }
                        .form-control {
                            border: 1px solid #cfd1d8;
                            -webkit-border-radius: 2px;
                            -moz-border-radius: 2px;
                            border-radius: 2px;
                            font-size: .825rem;
                            background: #ffffff;
                            color: #2e323c;
                        }

                        .card {
                            background: #ffffff;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                            border: 0;
                            margin-bottom: 1rem;
                        }


                                            </style>

                    <script type="text/javascript">

                    </script>
                    </div>
                    <div class="row income-expense-summary-chart mt-3">
                      <div class="col-md-12">
                          <table id="example3" class="table table-bordered table-striped">
                              <thead style="font-size:10px">
                                  <tr>
                                 
                              </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  
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