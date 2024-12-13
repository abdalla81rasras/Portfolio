<?php 
include "./Dashboard/includes/connection.php";
include "./includes/header.php";
?>

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area" id="home">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<?php  
							$select="SELECT * FROM `home`";
							$query=mysqli_query($conn , $select);
							while($row=mysqli_fetch_assoc($query)):
						?>
							<div class="banner_content">
								<h3 class="text-uppercase">Hell0</h3>
								<h1 class="text-uppercase">I am <?php echo $row['name_home']; ?></h1>
								<h5 class="text-uppercase">senior <?php echo $row['department']; ?> developer</h5>
								<div class="d-flex align-items-center">
									<a class="primary_btn popup-with-zoom-anim popup-with-move-anim" href="#test-popup" data-effect="mfp-zoom-out"><span>Hire Me</span></a>
									<div id="test-popup" class="white-popup mfp-hide">
										<p class="mt-1 mb-2">Phone Number : <?php echo $row['phone_home']; ?></p>
										<p class="mb-2">Email : <?php echo $row['email_home']; ?></p>
										<p class="mb-2">Zoom : <?php echo $row['zoom']; ?></p>
										<p  class="mb-1">Messenger : <?php echo $row['messenger']; ?></p>
									</div>
									<a class="primary_btn tr-bg" target="_blank" href="Dashboard/Upload/<?php echo $row['cv_home']; ?>"><span>Get CV</span></a>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap_bottom" id="about"><br>
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<?php 
						$select="SELECT * FROM `about`";
						$query=mysqli_query($conn , $select);
						while($row=mysqli_fetch_assoc($query)):
					?>
						<div class="main_title text-left">
							<h2>let’s <br>
								Introduce about <br>
								myself</h2>
							<p>
								<?php echo $row['description_about'] ?>
							</p>
							<a class="primary_btn" target="_blank" href="Dashboard/Upload/<?php echo $row['cv_about']; ?>"><span>Download CV</span></a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
						<?php 
							$select="SELECT * FROM `imgs_underabout`";
							$query=mysqli_query($conn , $select);
							while($row=mysqli_fetch_assoc($query)):
						?>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-brand-item d-table">
									<div class="d-table-cell text-center">
										<img src="Dashboard/Upload/<?php echo $row['img_imgs_underabout']; ?>" alt="">
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<?php 
							$select="SELECT * FROM `under_about`";
							$query=mysqli_query($conn , $select);
							while($row=mysqli_fetch_assoc($query)):
						?>
							<div class="d-flex mb-50">
								<span class="lage"><?php echo $row['experience'] ?></span>
								<span class="smll">Years Experience Working</span>
							</div>
							<div class="call-now d-flex">
								<div>
									<span class="fa fa-phone"></span>
								</div>
								<div class="ml-15">
									<p>call us now</p>
									<h3><?php echo $row['P_E'] ?></h3>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area" id="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>service offers </h2>
						<p>
							Is give may shall likeness made yielding spirit a itself togeth created 
							after sea <br> is in beast beginning signs open god you're gathering ithe
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<?php 
					$select="SELECT * FROM `service`";
					$query=mysqli_query($conn , $select);
					while($row=mysqli_fetch_assoc($query)):
				?>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="img/services/s1.png" alt="">
							<h4><?php echo $row['title_service1']; ?></h4>
							<p><?php echo $row['description_service1']; ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="img/services/s2.png" alt="">
							<h4><?php echo $row['title_service2']; ?></h4>
							<p><?php echo $row['description_service2']; ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="img/services/s3.png" alt="">
							<h4><?php echo $row['title_service3']; ?></h4>
							<p><?php echo $row['description_service3']; ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<img src="img/services/s4.png" alt="">
							<h4><?php echo $row['title_service4']; ?></h4>
							<p><?php echo $row['description_service4']; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<?php 
						$select="SELECT * FROM `portfolio`";
						$query=mysqli_query($conn , $select);
						while($row=mysqli_fetch_assoc($query)):
					?>
						<div class="col-lg-4 col-md-6 all <?php echo $row['state'] ?> <?php echo $row['state2'] ?>">
							<div class="portfolio_box">
								<div class="single_portfolio">
									<img class="img-fluid w-100" src="Dashboard/Upload/<?php echo $row['img_portfolio']; ?>" alt="">
									<div class="overlay"></div>
									<a href="Dashboard/Upload/<?php echo $row['img_portfolio']; ?>" class="img-gal">
										<div class="icon">
											<span class="lnr lnr-cross"></span>
										</div>
									</a>
								</div>
								<div class="short_info">
									<h4><a href="javascript:void()"><?php echo $row['name_portfolio'] ?></a></h4>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>client say about me</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
					<?php
						$select="SELECT * FROM `feedback`";
						$query=mysqli_query($conn , $select);
						while($row=mysqli_fetch_assoc($query)):
					?>
						<div class="testi_item">
							<div class="row">
								<div class="col-lg-4">
									<img src="Dashboard/Upload/<?php echo $row['img_feedback']; ?>" alt="">
								</div>
								<div class="col-lg-8">
									<div class="testi_text">
										<h4><?php echo $row['name_client']; ?></h4>
										<p><?php echo $row['feed_client']; ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
        		</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

<?php include "./includes/footer.php"; ?>