<!DOCTYPE html>
<html manifest="home.appcache">

<head en="lang">
	<meta charset="utf-8">
	<title>Your Home</title>
	<link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="lib/reset.css">
	<link rel="stylesheet" href="lib/stilizimi.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="javascript/jquery-3.4.1.min.js"></script>

</head>

<body class="fadeBody">

	<style>
		.fadeBody {
			display: none;
		}
	</style>

	<div id="dialogoverlay"></div>

	<header>
		<h1><a name="top"></a>Your Home</h1>
		<h3>Where dreams come true</h3>
		<nav>
			<div id="smedialinks">
				<ul>
					<li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img src="images/linkedin.png" alt="Link."></abbr></a></li>
					<li><a href="https://www.twitter.com/"><abbr title="Twitter"><img src="images/twitter.png" alt="Tweet"></abbr></a></li>
					<li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img src="images/pinterest.png" alt="Pint"></abbr></a></li>
					<li><a href="https://plus.google.com/"><abbr title="+Google"><img src="images/googleplus.png" alt="+"></abbr></a></li>
					<li><a href="https://www.facebook.com/"><abbr title="Facebook"><img src="images/facebook.png" alt="Fb"></abbr></a></li>
				</ul>
			</div>

			<div id="search">
				<form method="get" action="">
					<input type="search" name="Search">
				</form>
			</div>

			<div class="navbar">
				<a href="index.php">Home</a>
				<div class="dropdown">
					<button class="dropbtn">Interior
						<i class="fa fa-angle-down"></i>
					</button>
					<div class="dropcnt">
						<a href="interieri/dhoma_e_dites.php">Living Room</a>
						<a href="interieri/kuzhina.php">Kitchen</a>
						<a href="interieri/dhoma_e_gjumit.php">Bedroom</a>
						<a href="interieri/dhoma_e_punes.php">Workroom</a>
					</div>
				</div>
				<a href="tips_and_tricks.php">Tips and tricks</a>
				<a href="porosit_online.php">Online order</a>
				<a href="rreth_nesh.php">About us</a>
			</div>
		</nav>

		<div id="dialogbox">
			<div>
				<div id="dialogboxhead"></div>
				<div id="dialogboxbody"></div>
				<div id="dialogboxfoot"></div>
			</div>
		</div>
	</header>


	<main>
		<section>
			<div class="carouselslideshow">

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>

				<div class="artikujt">

					<div class="artikulli">
						<img id="mainfig" src="images/imgtat/id2.jpg" style="width: 390px; height: 216px">
						<h2>How to decorate for Christmas</h2>
						Wondering how to decorate for <br>
						Christmas? We're here to help <br>
						you deck the halls...<br>
						<a href="https://www.tasteofhome.com/collection/how-to-decorate-for-christmas/">Read more</a>
					</div>



					<div class="artikulli">
						<img id="mainfig" src="images/imgtat/id6.jpg" style="width: 390px; height: 216px">
						<h2>Colorful interior design ideas</h2>
						If you are not sure how to add <br>
						pops of color to your space you <br>
						came to the right place. <br>
						<a href="https://www.amara.com/luxpad/colourful-interior-design-ideas/">Read more</a>
					</div>


					<div class="artikulli">
						<img id="mainfig" src="images/imgtat/id5.jpg" style="width: 390px; height: 216px">
						<h2>Best modern living room design</h2>
						A living room needs to be <br>
						welcoming for you and your <br>
						guests. More people will be <br>
						able to visualize it as...<br>
						<a href="https://www.amara.com/luxpad/colourful-interior-design-ideas/">Read more</a>
					</div>
				</div>

				<a class="next" onclick='plusSlides(1)'>&#10095;</a>

			</div>
			<br />

			<div style='text-align: center;'>
				<span class="dot" onclick='currentSlide(1)'></span>
				<span class="dot" onclick='currentSlide(2)'></span>
				<span class="dot" onclick='currentSlide(3)'></span>
				<span class="dot" onclick='currentSlide(4)'></span>
			</div>
		</section>
		<div>
			<button style="margin-left:40%"><a href="includes/aboutUsForma.php">Quick info about us</a></button>

		</div>
		<section class="pjesa2">

			<div class="wpsau">
				<h2 class="maintitle"> What People Say About Us</h2>
				<p class="src"><img src="images\qmarks.png" /> Tommy Tanker - Customer</p>
				<p>I am really happy with the quality of the products. Not only are they durable, but they are
					eco-friendly as well. They recycle everything and you can even send your old furniture there.
					Also the new prices for Christmass Holidays are so worth it and I saved a lot of money by buying.
					Talk about great deals! </p>

				<br />

				<p class="src"><img src="images\qmarks.png" /> Helena Brown - Customer</p>
				<p>Never thought I would find the perfect bedroom for my baby,
					but then I saw the products that Your Home offers and I was speechless. The baby sleeps so
					peacefully on the new bed we got for him, and the night lights... they are so cuteeeee!!!
					Definite recommend!</p>

				<br />

				<p class="src"><img src="images\qmarks.png" /> Alice Warner - Customer</p>
				<p>Last year my boyfriend left me, and I thought i'd never get my life back together. I mean I didn't
					have a place to live so I needed to start from scrap. After my friend recommended me Your Home,
					I checked it out and I'm just going to say that I easily got my life back on track. I gave them
					the old stuff and got some new things for free. Who said that shopping doesn't cure a broken heart,
					right?!</p>

				<br />

				<p class="src"><img src="images\qmarks.png" /> Mathiass Brekker - Customer</p>
				<p>So this one time, I got really high and of course while that was really good, I also made a mess
					of my favorite working table. However I immediatley replaced it with one of the working tables here
					on Your Home and let me just say... I never got to worry about breaking my table again! Also they
					offer
					so many great deals if you pay with a credit card.
				</p>
			</div>

			<div class="meetTeam">
				<h2 class="maintitle"> Meet The Team</h2>
				<p class="src1"><img class="fig1" src="images/imgau/ensarja2.jpeg" style="width: 110px; height: 110px;" /> Ensare Islami</p>
				<p id="pershkrimi"> Ensare is our great leader that we all love and respect.
					She writes the cleanest code you'll ever see and even though we differ in our religious views
					we still have a lot of fun together. Also, DO NOT call her 'CALE'! <br>
					<a href="rreth_nesh.html#ensarja">See more</a></p>

				<br />

				<p class="src1"><img class="fig1" src="images/imgau/arita2.jpg" /> Arita Alidemaj</p>
				<p id="pershkrimi">Arita is a young, hardworking woman, who we like to call 'Vogelushe' due to her
					babyface and height. However, she is three times squared the ordinary human and works more than
					you'd think possible. <br>
					<a href="rreth_nesh.html#arita">See more</a></p>
				</p>

				<br />

				<p class="src1"><img class="fig1" src="images/imgau/argjenta2.jpg" /> Argjenta Gashi</p>
				<p id="pershkrimi">Argjenta is the joy of our team. Whenever we feel down or bad she is there with her
					infectious laughter, and you'll feel better just by hearing her laugh! She keeps the group updated
					and doesn't let us worry for the stupid things that we love worrying about. <br>
					<a href="rreth_nesh.html#argjenta">See more</a></p>
				</p>


				<br />

				<p class="src1"><img class="fig1" src="images/imgau/alina2.jpg" style="width: 110px; height: 110px; " />
					Alina Fazliu</p>
				<p id="pershkrimi">Alina is our mom manager. She keeps us all together,
					however she just isn't the
					brightest bulb in the box. She loves calling herself "Alineee, budalliceeee" whenever she doesn't
					know what she's doing.
					And that's a lot. <br>
					<a href="rreth_nesh.html#alina">See more</a></p>
				</p>

			</div>
		</section>

		<div class="articles">
			<hr id="vija_larte">
			<p id="quote"> “If you want a golden rule that will fit everything, this is it:
				Have nothing in your houses that you do not know to be useful or believe to be beautiful.”</p>
			<hr id="vija_poshte">
			<figure id="galeria">
				<a href="interieri\dhoma_dites_produktet\dhd_produkti5.html">
					<img src="images/imgdhdites/dhd_produkti5.png" style="width: 280px; height: 160px"></a>
				<figcaption>
					<a href="interieri\dhoma_dites_produktet\dhd_produkti5.html">VIEW THIS PRODUCT </em></a>
				</figcaption>
				<a href="interieri\kuzhina_produktet\produkti5.html">
					<img src="images/imgkuzhina/e.jpg" style="width: 280px; height: 160px"></a>
				<figcaption>
					<a href="interieri\kuzhina_produktet\produkti5.html">VIEW THIS PRODUCT </em></a>
				</figcaption>
				<a href="interieri\dhoma_gjumit_produktet\dhgj_produkti1.html">
					<img src="images/imggjumi/dhgj1.jpeg" style="width: 280px; height: 160px"></a>
				<figcaption>
					<a href="interieri\dhoma_gjumit_produktet\dhgj_produkti1.html">VIEW THIS PRODUCT</em></a>
				</figcaption>
			</figure>
		</div>

		<button id="gg"><a href="#top">Top</a></button>
		<style>
			#gg {
				margin-left: 90%;
				margin-bottom: 2%;
				border-radius: 30px;
				width: 80px;
				height: 40px;
			}
		</style>


		<footer>
			<section class="foot">
				<div class="A">

					<div id="a">
						<h5>ABOUT US</h5>
						<img src="images/imgau/fotokryesore.jpg" style="width:200px ; height:90px">
						<p id="au">
							Your Home is a furniture store that
							operates since the 80s. With our bold
							and hardworking crew, we have expanded
							our store to three new locations,
							bringing ourselves closer to the customers!
							<a href="rreth_nesh.html">Read More>></a>
						</p>
					</div>

					<div id="b">
						<h5 id="links">BEST PRODUCTS</h5>
						<ol>
							<li><a href="interieri\dhoma_dites_produktet\dhd_produkti1.html">Natalia</a></li>
							<li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti3.html">Tommy Bahama</a></li>
							<li><a href="interieri\dhoma_dites_produktet\dhd_produkti6.html">Starmore</a></li>
							<li><a href="interieri\kuzhina_produktet\produkti3.html">Zobel and Co Kitchen</a></li>
							<li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti4.html">Wayfair</a></li>
							<li><a href="interieri\dhoma_punes_produktet\dhp_produkti3.html">Palma</a></li>
							<li><a href="interieri\kuzhina_produktet\produkti6.html">Bescope Kitchen</a></li>
							<li><a href="interieri\dhoma_punes_produktet\dhp_produkti5.html">Edelmar</a></li>
							<li><a href="interieri\dhoma_punes_produktet\dhp_produkti2.html">Oisin</a></li>
							<li><a href="interieri\dhoma_dites_produktet\dhd_produkti5.html">Wystfield</a></li>
							<li><a href="interieri\kuzhina_produktet\produkti4.html">Calgary Kitchen</a></li>
							<li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti5.html">Tuft and Needle</a></li>

						</ol></br>

						<div id="supported"></div>
						<div id="unsupported"></div>
						<button onclick="worker();" id="btn3">Subscribe</button>
						<button id="btn1">Add Products</button>
						<button id="btn2">Add in the beggining</button>

					</div>

					<div id="c">
						<h5>LATEST BLOG POSTS</h5>
						<h5>Best modern living room design </h5>
						<p style="font-size: smaller;">A living room needs to be <br>
							welcoming for you and your <br>
							guests. More people will be <br>
							able to visualize it as... </p>
						<a href="">Read More>></a></h5><br>

						<h5>Best interior decorating secrets<h5></h5>
							<p style="font-size: smaller;">Some people have a natural <br>
								eye for design, but if you're <br>
								more in the camp of those who <br>
								can't do anything without <br>
								consulting Pinterest... </p>
							<a href="">Read More>></a>
						</h5><br>

					</div>


					<div id="d">
						<h5>CONTACT US</h5>
						<?php
						$regex = "/^[a-zA-Z\s]+$/";
						$regex1 = "/^[a-zA-Z\s\d\.]+$/";
						$regex2 = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]+$/";
						if (isset($_POST['submit'])) {
							if (preg_match($regex, $_POST['name'])) {
								$name = "<span style='color:green'>&#10004; Valid input</span>";
							} else if (empty($_POST['name'])) {
								$name = "<span style='color:red'>*Required</span>";
							} else {
								$name = "<span style='color:red'>&#10006; Invalid input</span>";
							}
							if (preg_match($regex2, $_POST['email'])) {
								$email = "<span style='color:green'>&#10004; Valid input</span>";
							} else if (empty($_POST['email'])) {
								$email = "<span style='color:red'>*Required</span>";
							} else {
								$email =  "<span style='color:red'>&#10006; Invalid input</span>";
							}
							if (preg_match($regex1, $_POST['subject'])) {
								$subject = "<span style='color:green'>&#10004; Valid input</span>";
							} else {
								$subject = "<span style='color:red'>&#10006; Invalid input</span>";
							}
							if (preg_match($regex1, $_POST['message'])) {
								$message = "<span style='color:green'>&#10004; Valid input</span>";
							} else if (empty($_POST['message'])) {
								$message = "<span>No input added</span>";
							} else {
								$message = "<span style='color:red'>&#10006; Invalid input</span>";
							}
						}
						?>
						<form method="POST" action="">
							<input type="text" name="name" placeholder="Name" class="f" /><?php if (isset($name)) {
																								echo $name;
																							} ?><br /><br />
							<input type="text" name="email" placeholder="Email" class="f" /><?php if (isset($email)) {
																								echo $email;
																							} ?><br /><br />
							<input type="type" name="subject" placeholder="Subject" class="f" /><?php if (isset($subject)) {
																									echo $subject;
																								} ?><br /><br />
							<textarea name="message" rows="5" cols="20" placeholder="Message" class="f"></textarea><?php if (isset($message)) {
																														echo $message;
																													} ?>
							<br /><br />
							<input id="submit" type="submit" name="submit">
						</form>
					</div>
				</div>
				<div>
					<address>
						<?php
						$copy_date = "Copyright 2019";
						$copy_date = preg_replace("([0-9]+)", "2020", $copy_date);
						?>
						<p id="copyright">&copy; <?php echo $copy_date; ?> Fundamentals of Web Development

							.........email: <a href="mailto:yourhome@gmail.com ">yourhome@gmail.com</a><br />

						</p>

					</address>

				</div>

			</section>

		</footer>
	</main>
	<script src="javascript/carousel.js"></script>
	<script src="javascript/confirm.js"></script>
	<script src="javascript/allpages.js"></script>
	<script src="javascript/jquerythingz.js"></script>

</body>

</html>