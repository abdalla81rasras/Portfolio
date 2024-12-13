	<!--================Footer Area =================-->
	<footer class="footer_area" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
                                <?php 
                                    $select="SELECT * FROM `footer`";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?>
                                    <img src="Dashboard/Upload/<?php echo $row['img_footer']; ?>" alt="">
                                <?php endwhile; ?>
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
                            <?php 
                                $select="SELECT * FROM `contact`";
                                $query=mysqli_query($conn , $select);
                                while($row=mysqli_fetch_assoc($query)):
                            ?>
                                <a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo $row['instagram']; ?>"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                            <?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with Clever Mind <i class="fa fa-heart-o" aria-hidden="true"></i> by Abdallah Rasras
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="./magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script src="js/secroll.js"></script>
	<script src="js/popup.js"></script>
</body>

</html>