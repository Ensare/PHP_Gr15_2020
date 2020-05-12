
<!DOCTYPE html>
<div>

    <head en="lang">
        <meta charset="utf-8">
        <title>Your Home</title>
        <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="lib/reset.css">
        <link rel="stylesheet" href="lib/animate.css">
        <link rel="stylesheet" href="lib/stilizimi.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="javascript\forma.js"></script>
        <script>
            $(document).ready(function () {
                $("#hide").click(function () {
                    $(".showhide").hide(function () {
                        alert("Note is gone!!");
                    });
                });
                $("#show").click(function () {
                    $(".showhide").show();
                });
            });
            $(document).ready(function () {
                $("#btn1").click(function () {
                    $("#test1").text("Thanks for choosing us!");
                });
                $("#btn2").click(function () {
                    $("#test2").html("<b>Thanks in bolder way,haha;)</b>");
                });
                $("#btn3").click(function () {
                    $("#test3").val("See U soon!!!");
                });
            });
            $(document).ready(function () {
                $(".hehe").click(function () {
                    $("#haha").remove();
                });
            });
            $(document).ready(function () {
                $(".emptyyy").click(function () {
                    $(".thanks").empty();
                });
            });


        </script>

        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans);
            @import url(https://fonts.googleapis.com/css?family=Merriweather);

            .margina {
                margin-top: 5%;
                margin-bottom: 5%;
            }

            .tabela {
                width: 90%;
                margin: 0 auto;
                resize: none;
                overflow: hidden;
            }

            legend {
                background-color: #696969;
                background-size: 15%;
                color: white;
                margin: 0 auto;
                width: 75%;
                padding: 0.35em;
                text-align: center;
                font-weight: bold;
                font-size: 30px;
            }

            fieldset {

                margin: 1em auto;
                background-color: #F5F5F5;
                width: 65%;
                -webkit-animation-name: example;
                /* Safari 4.0 - 8.0 */
                -webkit-animation-duration: 20s;
                /* Safari 4.0 - 8.0 */
                animation-name: example;
                animation-duration: 20s;
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes example {
                from {
                    background-color: #F5F5F5;
                }

                to {
                    background-color: #B58380
                }
            }

            /* Standard syntax */
            @keyframes example {
                from {
                    background-color: #F5F5F5;
                }

                to {
                    background-color: #B58380;
                }
            }

            form p {
                margin-top: 0.5em;
            }

            form input[type="text"],
            form select {
                font-size: 16px;
                height: 24px;
                padding: 3px;
            }

            form select {
                height: 30px;
            }

            .showhide,
            .thanks {
                border: 1pt solid grey;
                border-radius: 5px;
                padding: 0.5em;
                margin-bottom: 0.4em;
                width: 350px;
                word-wrap: none;
                margin-left: 35%;
                outline-offset: 8px;
                outline: 2px dashed #752424;
            }

            #show,
            .hehe,
            .emptyyy {
                margin-left: 40%;
                border-radius: 3px;
                height: 30px;
                
            }

            .rectangle {
                margin-bottom: 5px;
            }

            .error {
                background: #FFCDD2 url(error.png) no-repeat 98% center;
                box-shadow: 0 0 5px #FF5252;
                border-color: #FF1744;
            }



            .btn {
                -webkit-border-radius: 3;
                -moz-border-radius: 3;
                border-radius: 10px;
                font-size: 15px;
                height: 32px;
                color: white;
                background: #696969;
                height: 50px;
                text-decoration: none;
                width: 150px;
            }

            .btn:hover {
                background: lightslategray;
                text-decoration: none;
            }

            .borderi {
                border-radius: 5px;
            }

            .pozita {
                text-align: center;
                width: 85px;
                height: 35px;
                background-color: red;
                position: relative;
                -webkit-animation-name: example;
                /* Safari 4.0 - 8.0 */
                -webkit-animation-duration: 10s;
                /* Safari 4.0 - 8.0 */
                -webkit-animation-iteration-count: infinite;
                /* Safari 4.0 - 8.0 */
                -webkit-animation-direction: alternate;
                /* Safari 4.0 - 8.0 */
                animation-name: ex;
                animation-duration: 10s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes ex {
                0% {
                    background-color: white;
                    left: 0px;
                    top: 0px;
                }

                25% {
                    background-color: #D4D4D4;
                    left: 92%;
                    top: 0px;
                }

                50% {
                    background-color: #696969;
                    left: 92%;
                    top: 1200px;
                }

                75% {
                    background-color: #FF1744;
                    left: 0px;
                    top: 1200px;
                }

                100% {
                    background-color: #752424;
                    left: 0px;
                    top: 0px;
                }
            }

            /* Standard syntax */
            @keyframes ex {
                0% {
                    background-color: white;
                    left: 0px;
                    top: 0px;
                }

                25% {
                    background-color: #D4D4D4;
                    left: 92%;
                    top: 0px;
                }

                50% {
                    background-color: #696969;
                    left: 92%;
                    top: 1200px;
                }

                75% {
                    background-color: #FF1744;
                    left: 0px;
                    top: 1200px;
                }

                100% {
                    background-color: #752424;
                    left: 0px;
                    top: 0px;
                }
            }
        </style>

    </head>

    <body>
        <header class="animated fadeIn">

            <div id="dialogbox">
                <div>
                    <div id="dialogboxhead"></div>
                    <div id="dialogboxbody"></div>
                    <div id="dialogboxfoot"></div>
                </div>
            </div>

            <h1>Your Home</h1>
            <h3>Where dreams come true</h3>
            <nav>
                <div id="smedialinks">
                    <ul>
                        <li><a href="https://www.linkedin.com/"><img src="images/linkedin.png"></a></li>
                        <li><a href="https://www.twitter.com/"><img src="images/twitter.png"></a></li>
                        <li><a href="https://www.pinterest.com/"><img src="images/pinterest.png"></a></li>
                        <li><a href="https://plus.google.com/"><img src="images/googleplus.png"></a></li>
                        <li><a href="https://www.facebook.com/"><img src="images/facebook.png"></a></li>
                    </ul>
                </div>

                <div id="search">
                    <form method="get" action="">
                        <input type="search" name="Search">
                    </form>
                </div>


                <div class="navbar">
                    <a href="index.html">Home</a>
                    <div class="dropdown">
                        <button class="dropbtn">Interior
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropcnt">
                            <a href="interieri/dhoma_e_dites.html">Living Room</a>
                            <a href="interieri/kuzhina.html">Kitchen</a>
                            <a href="interieri/dhoma_e_gjumit.html">Bedroom</a>
                            <a href="interieri/dhoma_e_punes.html">Workroom</a>
                        </div>
                    </div>
                    <a href="tips_and_tricks.html">Tips and tricks</a>
                    <a href="porosit_online.html">Online order</a>
                    <a href="apliko_per_pune.html">Apply for job</a>
                    <a href="rreth_nesh.html">About us</a>
                </div>
            </nav>
        </header>
        <section class="margina">


            <div class="pozita" style="padding-top: 12px;">Apply</div>



            <form id="mainForm"  action="includes/apply.inc.php" method="POST" >
                <fieldset>
                    <legend>APPLY FOR JOB</legend>
                    <table class="tabela">
                        <tr>
                            <td>
                                <p><label>Name:</label><br />
                                    <input class="borderi required" type="text" name="namee"
                                        placeholder="Write your name">
                                </p>
                                <p>
                                    <label>Last name:</label><br />
                                    <input class="borderi required" type="text" name="lastname"
                                        placeholder="Write your last name">
                                </p>
                                <p>
                                    <label>Email:</label><br />
                                    <input class="borderi required" type="text" name="email"
                                        placeholder="Write your email">
                                </p>
                                <p>
                                    <label>Telephone:</label><br />
                                    <input class="borderi" style="width:188px; padding:0.5em" type="tel"
                                        name="telephonee" value="+"></p>
                            </td>
                            <td>
                                <p> <label>Country:</label><br />
                                    <input class="borderi required" style="width:188px; padding:0.5em" type="text"
                                        name="country" placeholder="Country"></p>
                                <p>
                                    <label>City:</label><br />
                                    <input class="borderi required" type="text" name="city" placeholder="City">
                                    <p>
                                        <label>Street:</label><br />
                                        <input class="borderi" type="text" name="street"
                                            placeholder="Write your street">
                                    </p>
                                    <p> <label>Upload CV:</label><br />
                                        <input type="file" alt="No file chosen"></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p> <label>Gender:</label><br />
                                    <input class="borderi" type="radio" name="type" value="1" checked>Female<br />
                                    <input class="borderi" type="radio" value="2">Male</p>
                                <p>
                                    <label>Birthdate:</label><br />
                                    <input class="borderi" style="width:188px; padding:0.5em" type="date"
                                        name="Birthdate" placeholder="Birthdate"><br /><br /></p>
                            </td>

                            <td>
                                <div class="rectangle centered">
                                    <input type="submit" class="btn"></input>
                                </div>
                            </td>
                        </tr>


                    </table>
                </fieldset>
            </form>

            <script>

              
            </script>


            <div id="haha">
                <pre class="showhide" id="haha">Note:You came here because you 
    want to be part of us.
    Do not regret and good luck.<button id="hide">...</button> </pre>
                <pre><button id="show" > Show to get that motivation!!</button></pre>
            </div>
            <br /><br />
            <div class="thanks" style="text-align: center;">
                <p id="test1"></p>
                <p id="test2"></p>

                <p><input style="text-align: center" id="test3" value="..."></p>

                <button id="btn1">Set Text</button>
                <button id="btn2">Set HTML</button>
                <button id="btn3">Set Value</button>
            </div>
            <button class="hehe" style="margin-top: 3%;">I didn't get motivated,so bye.</button><br /><br />
            <button class="emptyyy" style="margin-top:1%;margin-left: 39.2%; margin-bottom: 50px;">Sorry u little box, I'm emptying
                u.</button>
        </section>

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
						<form method="POST">
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
	<script src="javascript/allpages.js"></script>
    <script src="javascript/jquerythingz.js"></script>
    <script src="javascript/validimforma.js"></script>

</body>

</html>