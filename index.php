<!DOCTYPE HTML>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="fr">
<head>
	<title>Mathilde Malenfant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/custo.css" />
</head>
<body>

	<!-- Header -->
	<header id="header">
		<div class="logo"><a href="#">Mathilde Malenfant <span>Musicienne</span></a></div>
	</header>
	<div id="site-menu-icon">&#9834;</div>

<?php include('modules/menu.php'); ?>


	<!-- Main -->
	<section id="main">
		<div class="inner">

			<!-- One -->
			<section id="one" class="wrapper style1">

				<div class="image fit flush">
					<img src="images/bg/mathilde01_truncated.jpg" alt="" />
				</div>
				<header class="special">
					<h2>Prochaines dates</h2>
					<!--p>vehicula urna sed justo bibendum</p-->

					<?php 
					$nextDates = [
						["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"],
						["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"],
						["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"]
					];

					if(count($nextDates) > 0) {
						?>

						<ul id="homepage-dates-list">
							<?php
							foreach($nextDates as $item) {
								?>
								<li>
									<article class="one-date">
										<h1 class="date-name"><?php echo $item['Name']; ?></h1>
										<h2 class="date-value"><?php echo $item['Date']; ?></h2>
										<h3 class="address"><?php echo $item['Address']; ?></h3>
									</article>
								</li>
								<?php
							}
							?>
						</ul>

					<?php } ?>
				</header>
				<div class="content">
					<?php
					$todaysMessage = "Curabitur eget semper ante. Morbi eleifend ultricies est, a blandit diam vehicula vel. Vestibulum porttitor nisi quis viverra hendrerit. Suspendisse vel volutpat nibh, vel elementum lacus. Maecenas commodo pulvinar dui, at cursus metus imperdiet vel. Vestibulum et efficitur urna. Duis velit nulla, interdum sed felis sit amet, facilisis auctor nunc. Cras luctus urna at risus feugiat scelerisque nec sed diam.";

					if( strlen($todaysMessage) > 0) { 
						?>

						<p id="example-text" class="hide"><?php echo $todaysMessage; ?></p>
						<?php 
					}
					?>
					<!--p>Curabitur eget semper ante. Morbi eleifend ultricies est, a blandit diam vehicula vel. Vestibulum porttitor nisi quis viverra hendrerit. Suspendisse vel volutpat nibh, vel elementum lacus. Maecenas commodo pulvinar dui, at cursus metus imperdiet vel. Vestibulum et efficitur urna. Duis velit nulla, interdum sed felis sit amet, facilisis auctor nunc. Cras luctus urna at risus feugiat scelerisque nec sed diam. </p-->
					<!--p>Nunc fringilla metus odio, at rutrum augue tristique vel. Nulla ac tellus a neque ullamcorper porta a vitae ipsum. Morbi est sapien, hendrerit quis mi in, aliquam bibendum orci. Vestibulum imperdiet nibh vitae maximus posuere. Aenean sit amet nibh feugiat, condimentum tellus eu, malesuada nunc. Mauris ac pulvinar turpis, sit amet pharetra est. Ut bibendum justo condimentum, vehicula ex vel, venenatis libero. Etiam vehicula urna sed justo bibendum, ac lacinia nunc pulvinar. Integer nec velit orci. Vestibulum pellentesque varius dapibus. Morbi ullamcorper augue est, sed luctus orci fermentum dictum. Nunc tincidunt, nisl consequat convallis viverra, metus nisl ultricies dui, vitae dapibus ligula urna sit amet nibh. Duis ut venenatis enim.</p-->
				</div>
			</section>

			<!-- Two Pictures Gallery -->
					<!--section id="two" class="wrapper style2">
						<header>
							<h2>Vestibulum Convallis</h2>
							<p>vehicula urna sed justo bibendum</p>
						</header>
						<div class="content">
							<div class="gallery">
								<div>
									<div class="image fit flush">
										<a href="images/pic03.jpg"><img src="images/pic03.jpg" alt="" /></a>
									</div>
								</div>
								<div>
									<div class="image fit flush">
										<a href="images/pic01.jpg"><img src="images/pic01.jpg" alt="" /></a>
									</div>
								</div>
								<div>
									<div class="image fit flush">
										<a href="images/pic04.jpg"><img src="images/pic04.jpg" alt="" /></a>
									</div>
								</div>
								<div>
									<div class="image fit flush">
										<a href="images/pic05.jpg"><img src="images/pic05.jpg" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section-->

					<!-- Three Picture + Text -->
					<!--section id="three" class="wrapper">
						<div class="spotlight">
							<div class="image flush"><img src="images/pic06.jpg" alt="" /></div>
							<div class="inner">
								<h3>Viverra Hendrerit</h3>
								<p>Curabitur eget semper ante. Morbi eleifend ultricies est, a blandit diam vehicula vel. Vestibulum porttitor nisi quis viverra hendrerit. Suspendisse vel volutpat nibh, vel elementum lacus. Maecenas commodo pulvinar dui, at cursus metus imperdiet vel.</p>
							</div>
						</div>
						<div class="spotlight alt">
							<div class="image flush"><img src="images/pic07.jpg" alt="" /></div>
							<div  class="inner">
								<h3>Curabitur Eget</h3>
								<p>Curabitur eget semper ante. Morbi eleifend ultricies est, a blandit diam vehicula vel. Vestibulum porttitor nisi quis viverra hendrerit. Suspendisse vel volutpat nibh, vel elementum lacus. Maecenas commodo pulvinar dui, at cursus metus imperdiet vel.</p>
							</div>
						</div>
						<div class="spotlight">
							<div class="image flush"><img src="images/pic08.jpg" alt="" /></div>
							<div class="inner">
								<h3>Morbi Eleifend</h3>
								<p>Curabitur eget semper ante. Morbi eleifend ultricies est, a blandit diam vehicula vel. Vestibulum porttitor nisi quis viverra hendrerit. Suspendisse vel volutpat nibh, vel elementum lacus. Maecenas commodo pulvinar dui, at cursus metus imperdiet vel.</p>
							</div>
						</div>
					</section-->

				</div> <!-- end .inner -->
			</section> <!-- end #main -->

			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						<li><a class="icon fa-comment"><span class="label">Show test text</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
				</div>
			</footer>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/custo.js"></script>

		</body>
		</html>