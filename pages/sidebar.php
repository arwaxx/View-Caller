<!-- partial:../../partials/_sidebar.html -->
<?php require_once '../../../Controllers/AuthController.php';
      session_start();
?>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">USER</p>
                  <!-- <p class="designation"></p> -->
                </div>
              </a>
            </li>
              
            <li class="nav-item">
                  <a class="nav-link" href="../employees/employees_Admin.php">
                      <span class="menu-title">profile</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../view loc&img/view loc&img.php">
                      <span class="menu-title">Home</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../modify Employee/modify Employee.php">
                      <span class="menu-title">modify</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../view loc&img/chat.php">
                      <span class="menu-title">chat</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="../modify Employee/feedback.php">
                      <span class="menu-title">feedback</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                  </a>
              </li>
                
          </ul>
        </nav>
        <!-- partial -->