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
			<!--header id="header">
				<div class="logo"><a href="#">Mathilde Malenfant <span>Musicienne</span></a></div>
			</header-->
			<div id="site-menu-icon">&#9834;</div>


			<!-- Menu -->
			<?php include('modules/menu.php'); ?>

			<?php
			$chosenProject = [
				"Nom" => "Très Improbable Trio",
				"Distribution" => "Truc Bidule au didgeridoo, Machin Chose aux gobelets, Mathilde Malenfant aux flechettes",
				"Description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores asperiores inventore incidunt, eius blanditiis necessitatibus quia sequi quaerat repudiandae unde animi, quisquam sed quo temporibus.",
				"photos" => "pic01.jpg;pic02.jpg;pic03.jpg",
				"vidéos" => "co2YpUypvAI;hZE3hgXjYLE",
				"dates" => "1,2,5,6"
			];




			$pics = explode(";", $chosenProject['photos']);
			$vids = explode(";", $chosenProject['vidéos']);


			$nextDates = [
				["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"],
				["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"],
				["Name"=> "Le printemps siffle", "Date"=> "12/12/2018", "Address"=> "12 rue du gros tas de plumes <br>45678 Innsmouth"]
			];

			?>





			<!-- Main -->
			<section id="main" class="project-page">
				<div class="inner">

					<!-- One -->
					<section id="one" class="wrapper style1">

						<div class="image fit flush">
							<img src="images/bg/mathilde01_truncated.jpg" alt="" />
						</div>

						<div class="content">
							<!--
							Nom
							Distribution (avec roles)
							Description
							Caroussel de photos (ou 1 photo)
							Quelques vidéos
								si compo seule : Label de la video (artiste, lieu...)
							Liste des dates (passées et à venir) [ encadré ? dans le flux de la page ? ]
							Dossier de presse à télécharger (affichage possible en pdf dans le navigateur)
						-->

						<h2 class="project-name"><?php echo $chosenProject['Nom']; ?></h2>
						<h4 class="project-distribution"><?php echo $chosenProject['Distribution'] . '.'; ?></h4>

						<p class="project-description"><?php echo $chosenProject['Description']; ?></p>

						<?php if(count($pics) > 0) { ?>
							<h4 class="project-pics-title" title="Images bientôt cliquables ;)">Images</h4>
							<ul class="pics-gallery">
								<?php 
								foreach($pics as $pic) {
									echo '<li><img src="images/' . $pic . '" alt=""></li>';
								}
								?>
							</ul>
						<?php } ?>

						<?php if(count($vids) > 0) { ?>
							<h4 class="project-vids-title">Vidéos</h4>
							<ul class="vids-gallery">
								<?php 
								foreach($vids as $vid) {
									echo '<div class="vid-container"><iframe width="280" height="160" src="https://www.youtube.com/embed/' . $vid . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
								}
								?>
							</ul>
						<?php } ?>



						<?php if(count($nextDates) > 0) { ?>
							<h4 class="project-dates-title">Prochaines dates</h4>
							<div class="table-wrapper">
								<table id="dates" class="one-project-dates-list">
									<tbody>
										<?php foreach($nextDates as $item) { ?>
											<tr>
												<td><?php echo $item['Name']; ?></td>
												<td><?php echo $item['Date']; ?></td>
												<td><?php echo $item['Address']; ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						<?php } ?>



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