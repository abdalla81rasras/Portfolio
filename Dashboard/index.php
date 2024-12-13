<?php 
include "./includes/connection.php";
include "./includes/functions.php";
include "./includes/header.php";
?>
      <style>
        .contents{
          align-items: center;
          justify-content: center;
          display: grid;
          min-height: 73vh;
        }

        .contents .img_logo{
          position: relative;
          padding-bottom: 8px;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .contents .img_logo img {
          width: 150px;
        }
      </style>
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true"
          aria-controls="collapseAbout">
          <i class="fas fa-fw fa-users"></i>
          <span>About</span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_about.php">View All</a>
            <a class="collapse-item active" href="Add_about.php">Add New</a>
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true"
          aria-controls="collapseService">
          <i class="fas fa-fw fa-columns"></i>
          <span>Service</span>
        </a>
        <div id="collapseService" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="View_service.php">View All</a>
            <a class="collapse-item" href="Add_service.php">Add New</a>
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
        <div class="contents">
          <div class="container-fluid" id="container-wrapper">
            <div class="row">
              <div class="col-xl-12 col-md-12 mb-12">
                <div class="img_logo">
                  <img src="./img/Website Logo.png" alt="img">
                </div>
                <h4 class="text-center">
                  Dashboard Satner Master
                </h4>                        
              </div>
            </div>
          </div>
        </div>    
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
<?php include "./includes/footer.php"; ?>