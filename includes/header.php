<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php 
        $select="SELECT * FROM `header`";
        $query=mysqli_query($conn , $select);
        while($row=mysqli_fetch_assoc($query)):
    ?>
        <link rel="icon" href="Dashboard/Upload/<?php echo $row['img_tab']; ?>" type="image/png">
        <title>
            <?php echo $row['name_tab']; ?> 
        </title>        
    <?php endwhile; ?>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="magnific-popup/magnific-popup.css">	
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="./css/styles.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
                    <?php 
                        $select="SELECT * FROM `header`";
                        $query=mysqli_query($conn , $select);
                        while($row=mysqli_fetch_assoc($query)):
                    ?>
                        <img src="Dashboard/Upload/<?php echo $row['img_logo']; ?>" alt="">
                    <?php endwhile; ?>
                    </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse div-links offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ul-links justify-content-end">
							<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
							<li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->