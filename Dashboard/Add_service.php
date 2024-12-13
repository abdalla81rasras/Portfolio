<?php 
include "./includes/connection.php";
include "./includes/functions.php";
include "./includes/header.php";
?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHeader" aria-expanded="true"
          aria-controls="collapseHeader">
          <i class="fa fa-header"></i>
          <span>Header</span>
        </a>
        <div id="collapseHeader" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_header.php">View All</a>
            <a class="collapse-item" href="Add_header.php">Add New</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFooter" aria-expanded="true"
          aria-controls="collapseFooter">
          <i class="fa fa-long-arrow-down"></i>
          <span>Footer</span>
        </a>
        <div id="collapseFooter" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_footer.php">View All</a>
            <a class="collapse-item" href="Add_footer.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Home
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHome" aria-expanded="true"
          aria-controls="collapseHome">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
        <div id="collapseHome" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_home.php">View All</a>
            <a class="collapse-item" href="Add_home.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        About
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true"
          aria-controls="collapseAbout">
          <i class="fas fa-fw fa-users"></i>
          <span>About</span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_about.php">View All</a>
            <a class="collapse-item" href="Add_about.php">Add New</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUnder" aria-expanded="true"
          aria-controls="collapseUnder">
          <i class="fas fa-fw fa-info-circle"></i>
          <span>Under About</span>
        </a>
        <div id="collapseUnder" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_underabout.php">View All</a>
            <a class="collapse-item" href="Add_underabout.php">Add New</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseImagesUnder" aria-expanded="true"
          aria-controls="collapseImagesUnder">
          <i class="fas fa-fw fa-images"></i>
          <span>Images Under About</span>
        </a>
        <div id="collapseImagesUnder" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_imges_underabout.php">View All</a>
            <a class="collapse-item" href="Add_imges_underabout.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Services
      </div>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true"
          aria-controls="collapseService">
          <i class="fas fa-fw fa-columns"></i>
          <span>Service</span>
        </a>
        <div id="collapseService" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_service.php">View All</a>
            <a class="collapse-item active" href="Add_service.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Portfolio
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePortfolio" aria-expanded="true"
          aria-controls="collapsePortfolio">
          <i class="fas fa-fw fa-user"></i>
          <span>Portfolio</span>
        </a>
        <div id="collapsePortfolio" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_portfolio.php">View All</a>
            <a class="collapse-item" href="Add_portfolio.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Feedback
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFeedback" aria-expanded="true"
          aria-controls="collapseFeedback">
          <i class="fas fa-fw fa-comments"></i>
          <span>Feedback</span>
        </a>
        <div id="collapseFeedback" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_feedback.php">View All</a>
            <a class="collapse-item" href="Add_feedback.php">Add New</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Contact
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true"
          aria-controls="collapseContact">
          <i class="fas fa-fw fa-phone"></i>
          <span>Contact</span>
        </a>
        <div id="collapseContact" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_contact.php">View All</a>
            <a class="collapse-item" href="Add_contact.php">Add New</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include "./includes/navbar.php"; ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_service" value="<?php echo $id_service; ?>">
            <div class="row m-2">
              <div class="col-xl-12 col-md-12">
                  <?php if($update==true || $edit==true): ?>
                      <h1 class="h3 text-gray-800 mb-3">UpdateServices</h1>
                  <?php else: ?>
                      <h1 class="h3 text-gray-800 mb-3">Add New Services</h1>
                  <?php endif; ?>
              </div>
            </div>
            <div class="row m-2">
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Title 1 :</label>
                          <input type="text" name="title_service1" class="form-control" value="<?php echo htmlspecialchars($title_service1); ?>" placeholder="Enter Title ...">
                          <div class="text-danger pt-3"><?php echo $errors['title_service1'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Title 2 :</label>
                          <input type="text" name="title_service2" class="form-control" value="<?php echo htmlspecialchars($title_service2); ?>" placeholder="Enter Title ...">
                          <div class="text-danger pt-3"><?php echo $errors['title_service2'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Title 3 :</label>
                          <input type="text" name="title_service3" class="form-control" value="<?php echo htmlspecialchars($title_service3); ?>" placeholder="Enter Title ...">
                          <div class="text-danger pt-3"><?php echo $errors['title_service3'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Title 4 :</label>
                          <input type="text" name="title_service4" class="form-control" value="<?php echo htmlspecialchars($title_service4); ?>" placeholder="Enter Title ...">
                          <div class="text-danger pt-3"><?php echo $errors['title_service4'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Description 1 :</label>
                          <textarea class="form-control" name="description_service1" cols="30" rows="10" placeholder="Enter Description"><?php echo htmlspecialchars($description_service1); ?></textarea>
                          <div class="text-danger pt-3"><?php echo $errors['description_service1'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Description 2 :</label>
                          <textarea class="form-control" name="description_service2" cols="30" rows="10" placeholder="Enter Description"><?php echo htmlspecialchars($description_service2); ?></textarea>
                          <div class="text-danger pt-3"><?php echo $errors['description_service2'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Description 3 :</label>
                          <textarea class="form-control" name="description_service3" cols="30" rows="10" placeholder="Enter Description"><?php echo htmlspecialchars($description_service3); ?></textarea>
                          <div class="text-danger pt-3"><?php echo $errors['description_service3'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="form-group mb-0 pm-0">
                          <label class="text-primary font-weight-bold">Description 4 :</label>
                          <textarea class="form-control" name="description_service4" cols="30" rows="10" placeholder="Enter Description"><?php echo htmlspecialchars($description_service4); ?></textarea>
                          <div class="text-danger pt-3"><?php echo $errors['description_service4'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-around bs m-2">
              <div class="col-lg-2 col-xl-2">
                <?php if($update==true): ?>
                  <button name="update_service" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Update</button>
                <?php else: ?>
                  <button name="save_service" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Save</button>
                <?php endif; ?>
              </div>
              <div class="col-lg-2 col-xl-2 bc">
                <button name="cansel_service" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Cansel</button>
              </div>
            </div>
          </form>
          <br>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
<?php include "./includes/footer.php"; ?>