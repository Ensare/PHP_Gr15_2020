<!DOCTYPE html>
<html>

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

<style>
    #const {
        text-align: center;
    }

    #btn6 {
        border-radius: 5px;
        background-color: F1F1F1;
        font-family: Alegreya Sans SC;
        margin-top: 17px;
        font-size: 20px;

    }

    #btn4 {
        border-radius: 5px;
        background-color: F1F1F1;
        font-family: Alegreya Sans SC;
        margin-top: 5px;
        margin-left: 45%;
        font-size: 20px;

    }

    #btn5 {
        border-radius: 5px;
        background-color: F1F1F1;
        font-family: Alegreya Sans SC;
        margin-top: 2px;
        margin-left: 48%;
        font-size: 20px;
    }
</style>

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
                <source src="../video/dhpunesvid.mp4" type="video/mp4">
            </video>
            <style>
                #vid {
                    margin: 1% 25%;
                }
            </style>

        </section>

        <section class="produktet_dh_punes">
            <a href="dhoma_punes_produktet/dhp_produkti1.html">
                <img id="dh_produkt1" class="hoveer" src="../images/imgdhpunes/fotele.jpg"
                    style="width: 400px; height: 271px"></a>

            <a href="dhoma_punes_produktet/dhp_produkti2.html">
                <img id="dh_produkt2" class="hoveer" src="../images/imgdhpunes/bigworktable.jpg"
                    style="width: 400px; height: 271px"></a>

            <a href="dhoma_punes_produktet/dhp_produkti3.html">
                <img id="dh_produkt3" class="hoveer" src="../images/imgdhpunes/beanbags.jpg" style="width: 400px"></a>

            <a href="dhoma_punes_produktet/dhp_produkti4.html">
                <img id="dh_produkt4" class="hoveer" src="../images/imgdhpunes/longtable.jpg"
                    style="width: 400px; height: 271px"></a>

            <a href="dhoma_punes_produktet/dhp_produkti5.html">
                <img id="dh_produkt5" class="hoveer" src="../images/imgdhpunes/room.jpg"
                    style="width: 400px; height: 271px"></a>

            <a href="dhoma_punes_produktet/dhp_produkti6.html">
                <img id="dh_produkt6" class="hoveer" src="../images/imgdhpunes/shelf.jpg"
                    style="width: 400px; height: 271px"></a>

        </section>

        <script type="text/javascript">
            const percent = Math.pow(5, 2);
            const sale = "sale";
            const x = 38344851533;
            const kompania = "YOUR HOME"
            const date = new Date('May 17, 2020 23:59:59');
            var newParagraph = document.createElement("p");
            var newText = document.createTextNode(" If you want to take a " + sale + " in one of products what we have in stock, please start a game and win " + percent + "% sale in every product. If you win call in this number +" + x + " and tell us which product you want in " + kompania + ". Valid until date: " + date);
            newParagraph.appendChild(newText);
            document.body.appendChild(newParagraph);
            document.body.appendChild(newParagraph).style.textAlign = "center";

            function myFunction() {

                var n = percent.toExponential(5);
                const m = "€ <br> Se tani po thojne Matematika svyn sen!";
                document.getElementById("det").innerHTML = n + m;
                document.getElementById("det").style.color = "black";


            }
            function myFunction1() {
                var str = "The Your Home, is Your Home. If you want to bye smth for Your Home you have in " + " Your Home";
                var res = str.match(/Your Home/g);
                document.getElementById("det1").innerHTML = res;
                document.getElementById("det1").style.textAlign = "center";
                document.getElementById("det1").style.color = "black";

            }
            function myFunction2() {
                var str = document.getElementById("det2").innerHTML;
                var res = str.replace("Arita", "Alina");
                document.getElementById("det2").innerHTML = res;
            }
        </script>
        </div>
        <div id="const">
            <h1>About us in three points...</h1>
            <button onclick="myFunction()" id="btn6">Click for surprise</button>
            <p id="det">FOR YOU WE HAVE:</p>
        </div>
        <div>

            <button onclick="myFunction1()" id="btn4">4X Your Home</button>

            <p id="det1"></p>

            <p id="det2" style="text-align: center;">Visit Arita!</p>

            <button onclick="myFunction2()" id="btn5">Try it</button>
        </div>
        </div>
        <p id="det3"></p>
        <script type="text/javascript">
            function Person(first, last, age, eye) {
                this.firstName = first;
                this.lastName = last;
                this.age = age;
                this.eyeColor = eye;
            }

            var partner1 = new Person("Arita", "Alidemaj", 20, "brown");
            var partner2 = new Person("Argjenta", "Gashi", 21, "green");
            var partner3 = new Person("Alina", "Fazliu", 19, "brown");
            var partner4 = new Person("Ensare", "Islami", 19, "brown");

            document.getElementById("det3").innerHTML =
                "Arita is " + partner1.age + " years old, Argjenta is " + partner2.age + " years old and Ensare&Alina have " + partner4.eyeColor + " color eyes.";
            document.getElementById("det3").style.textAlign = "center";



        </script>
        <p id="det4"></p>
        <script type="text/javascript">
            var q = myFunction3(1900, 86);

            function myFunction3(w, v) {
                return w + v;
            }
            document.getElementById("det4").innerHTML = "With you " + q + " years.";
            document.getElementById("det4").style.textAlign = "center";

        </script>

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
                            <li><a href="dhoma_dites_produktet/dhd_produkti1.html">Natalia</a></li>
                            <li><a href="dhoma_gjumit_produktet/dhgj_produkti3.html">Tommy Bahama</a></li>
                            <li><a href="dhoma_dites_produktet\dhd_produkti6.html">Starmore</a></li>
                            <li><a href="kuzhina_produktet\produkti3.html">Zobel and Co Kitchen</a></li>
                            <li><a href="dhoma_gjumit_produktet\dhgj_produkti4.html">Wayfair</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti3.html">Palma</a></li>
                            <li><a href="kuzhina_produktet\produkti6.html">Bescope Kitchen</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti5.html">Edelmar</a></li>
                            <li><a href="dhoma_punes_produktet\dhp_produkti2.html">Oisin</a></li>
                            <li><a href="dhoma_dites_produktet\dhd_produkti5.html">Wystfield</a></li>
                            <li><a href="kuzhina_produktet\produkti4.html">Calgary Kitchen</a></li>
                            <li><a href="dhoma_gjumit_produktet\dhgj_produkti5.html">Tuft and Needle</a></li>

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