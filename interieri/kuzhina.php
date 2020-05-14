<!DOCTYPE html>
<html manifest="/home.appcache">

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../lib/reset.css">
    <link rel="stylesheet" href="../lib/stilizimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>

</head>

<body>
    <header>

        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img
                                    src="../images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img
                                    src="../images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img
                                    src="../images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img
                                    src="../images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img
                                    src="../images/facebook.png"></abbr></a></li>
                </ul>
            </div>

            <div id="search">
                <form method="get" action="">
                    <input type="search" name="Search">
                </form>
            </div>


            <div class="navbar">
                <a href="../index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Interior
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropcnt">
                        <a href="../interieri/dhoma_e_dites.php">Living Room</a>
                        <a href="../interieri/kuzhina.php">Kitchen</a>
                        <a href="../interieri/dhoma_e_gjumit.php">Bedroom</a>
                        <a href="../interieri/dhoma_e_punes.php">Workroom</a>
                    </div>
                </div>
                <a href="../tips_and_tricks.php">Tips and tricks</a>
                <a href="../porosit_online.php">Online order</a>
                <a href="../apliko_per_pune.php">Apply for job</a>
                <a href="../rreth_nesh.php">About us</a>
            </div>
        </nav>
    </header>
    <main>

        <section id="vid">
            <video width="520" height="440" controls>
                <source src="../video/kuzhinavid.mp4" type="video/mp4">
            </video>
            <style>
                #vid {
                    margin: 1% 25%;
                }
            </style>

        </section>

        <section class="produktet_kuzhines">
            <a href="kuzhina_produktet/produkti1.php">
                <img id="kuzhina_produkti1" class="hoveer" src="../images/imgkuzhina/a.jpg"
                    style="width:400px; height:271px"></a>
            <a href="kuzhina_produktet/produkti2.php">
                <img id="kuzhina_produkti2" class="hoveer" src="../images/imgkuzhina/b.jpg"
                    style="width:400px; height:271px"> </a>
            <a href="kuzhina_produktet/produkti3.php">
                <img id="kuzhina_produkti3" class="hoveer" src="../images/imgkuzhina/c.jpg"
                    style="width:400px; height:271px"></a>
            <a href="kuzhina_produktet/produkti4.php">
                <img id="kuzhina_produkti4" class="hoveer" src="../images/imgkuzhina/d.jpg"
                    style="width:400px; height:271px"></a>
            <a href="kuzhina_produktet/produkti5.php">
                <img id="kuzhina_produkti5" class="hoveer" src="../images/imgkuzhina/e.jpg"
                    style="width:400px; height:271px"></a>
            <a href="kuzhina_produktet/produkti6.php">
                <img id="kuzhina_produkti6" class="hoveer" src="../images/imgkuzhina/kitchen2.jpg"
                    style="width:400px; height:271px"></a>
        </section>


        <footer>
            <section class="foot">
                <div class="A">

                    <div id="a">
                        <h5>ABOUT US</h5>
                        <img src="../images/imgau/fotokryesore.jpg" style="width:200px ; height:90px">
                        <p id="au">
                            Your Home is a furniture store that
                            operates since the 80s. With our bold
                            and hardworking crew, we have expanded
                            our store to three new locations,
                            bringing ourselves closer to the customers!
                            <a href="../rreth_nesh.html">Read More>></a>
                        </p>
                    </div>

                    <div id="b">
                        <h5 id="links">BEST PRODUCTS</h5>
                        <ol>
                            <li><a href="dhoma_dites_produktet/dhd_produkti1.php">Natalia</a></li>
                            <li><a href="dhoma_gjumit_produktet/dhgj_produkti3.php">Tommy Bahama</a></li>
                            <li><a href="dhoma_dites_produktet\dhd_produkti6.php">Starmore</a></li>
                            <li><a href="kuzhina_produktet\produkti3.php">Zobel and Co Kitchen</a></li>
                            <li><a href="dhoma_gjumit_produktet\dhgj_produkti4.php">Wayfair</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti3.php">Palma</a></li>
                            <li><a href="kuzhina_produktet\produkti6.php">Bescope Kitchen</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti5.php">Edelmar</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti2.php">Oisin</a></li>
                            <li><a href="dhoma_dites_produktet\dhd_produkti5.php">Wystfield</a></li>
                            <li><a href="kuzhina_produktet\produkti4.php">Calgary Kitchen</a></li>
                            <li><a href="dhoma_gjumit_produktet\dhgj_produkti5.php">Tuft and Needle</a></li>
        
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
					if(isset($_POST['submit'])){
						if(preg_match($regex,$_POST['name'])){
							$name = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['name'])){
							$name = "<span style='color:red'>*Required</span>";
						}
						else{
							$name = "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex2,$_POST['email'])){
							$email = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['email'])){
							$email = "<span style='color:red'>*Required</span>";
						}else {
							$email =  "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex1,$_POST['subject'])){
							$subject = "<span style='color:green'>&#10004; Valid input</span>";
						}else{
							$subject = "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex1,$_POST['message'])){
							$message = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['message'])){
							$message = "<span>No input added</span>";
						}
						else{
							$message = "<span style='color:red'>&#10006; Invalid input</span>";
						}
					}
					?>
						<form method="POST" action="">
							<input type="text" name="name" placeholder="Name" class="f" /><?php if(isset($name)){echo $name;}?><br /><br /> 
							<input type="text" name="email" placeholder="Email" class="f" /><?php if(isset($email)){echo $email;}?><br /><br />
							<input type="type" name="subject" placeholder="Subject" class="f" /><?php if(isset($subject)){echo $subject;}?><br /><br />
							<textarea name="message" rows="5" cols="20" placeholder="Message" class="f"></textarea><?php if(isset($message)){echo $message;}?>
							<br /><br />
							<input id="submit" type="submit" name="submit">
						</form>
					</div>
				</div>
				<div>
					<address>
						<?php
							$copy_date = "Copyright 2019";
							$copy_date = preg_replace("([0-9]+)","2020",$copy_date);
						?>
						<p id="copyright">&copy; <?php echo $copy_date; ?> Fundamentals of Web Development

							.........email: <a href="mailto:yourhome@gmail.com ">yourhome@gmail.com</a><br />
							
						</p>
						
					</address>
					
				</div>

            </section>
        </footer>
    </main>
    <script src="../javascript/allpages.js"></script>
    <script src="../javascript/jquerythingz.js"></script>
</body>

</html>