<!DOCTYPE html>
<html>

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/animate.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <script src="javascript/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <style>
        #zbritjet {
            display: none;
        }

        svg {
            margin: 3% 0;
        }

        #kanvasi {
            outline: 1px solid #d3d3d3;
        }

        mark {
            background-color: #d3d3d3;
        }

        #zbrteksti {
            margin: 2% 20%;
            font-size: x-large;
        }

    </style>

</head>


<body>
    <header class="animated fadeIn">

        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <ul>
                        <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img src="images/linkedin.png"
                                        alt="Link."></abbr></a></li>
                        <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img src="images/twitter.png"
                                        alt="Tweet"></abbr></a></li>
                        <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img src="images/pinterest.png"
                                        alt="Pint"></abbr></a></li>
                        <li><a href="https://plus.google.com/"><abbr title="+Google"><img src="images/googleplus.png"
                                        alt="+"></abbr></a></li>
                        <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img src="images/facebook.png"
                                        alt="Fb"></abbr></a></li>
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
                <a href="apliko_per_pune.php">Apply for job</a>
                <a href="rreth_nesh.php">About us</a>
            </div>
        </nav>
    </header>

    <main>

        <canvas id="MovingCanvas" width="1263" height="150">
        </canvas>

        <div>
            <p id="zbrteksti"><b>This New Year comes with a lot of <mark>NEW</mark> suprises. See which products you can
                    get a discount
                    on!</b></p>
        </div>


        <div id="elsvg">
            <svg height="210" width="100%">
                <path d="M300 50 L225 200 L375 200 Z" style="fill: white;stroke:#752424;stroke-width:4" />
                <circle cx="525" cy="120" r="80" style="fill: white;stroke:#752424;stroke-width:4" />
                <rect x="675" y="50" width="150" height="150" style="fill: white;stroke:#752424;stroke-width:4" />
                <path d="M900 50 L1050 50 L975 200 Z" style="fill: white;stroke:#752424;stroke-width:4" />
                <a href="interieri/dhoma_gjumit_produktet/dhgj_produkti1.html">
                    <text x="275" y="150" fill="#752424" font-size="2em">20%</text>
                </a>
                <a href="interieri/dhoma_dites_produktet/dhd_produkti2.html">
                    <text x="500" y="130" fill="#752424" font-size="2em">30%</text>
                </a>
                <a href="interieri/kuzhina_produktet/produkti1.html">
                    <text x="725" y="130" fill="#752424" font-size="2em">40%</text>
                </a>
                <a href="interieri/dhoma_punes_produktet/dhp_produkti5.html">
                    <text x="950" y="125" fill="#752424" font-size="2em">50%</text>
                </a>

            </svg>
        </div>



        <div id="zbritjet">

            <img id="zbr1" src="images/imggjumi/dhgj1.jpeg" width="300" height="220">
            <img id="zbr2" src="images/dhd_produkti2.jpg" style="width: 450px; height: 320px">
            <img id="zbr3" src="images/a.jpg" style="width: 450px; height: 320px">
            <img id="zbr4" src="images/longtable.jpg" style="width: 450px; height: 320px">


        </div>
        <div>
            <canvas id="kanvasi" width="1263" height="750">
            </canvas>
        </div>
        <script>
            window.onload = function () {

                var canvas = document.getElementById("MovingCanvas"),
                    canv = canvas.getContext("2d");

                var grd = canv.createLinearGradient(0, 100, 0, 150);
                grd.addColorStop(1, "white");
                grd.addColorStop(0, "#752424");


                canv.fillStyle = grd;
                canv.fillRect(0, 0, canvas.width, canvas.height);

                canv.fillStyle = "white";
                canv.font = "2em David Libre";
                canv.textAlign = "center";
                canv.fillText("Sale", 600, 75);

                var start = 0;
                setInterval(function () {
                    start += 3;

                    canv.fillStyle = grd;
                    canv.fillRect(0, 0, canvas.width, canvas.height);

                    canv.fillStyle = "white";
                    canv.font = "2em David Libre";
                    canv.textAlign = "center";
                    canv.fillText("Sale!!!", start, 75);

                }, 40)


                var kanvas = document.getElementById("kanvasi");
                var c = kanvas.getContext("2d");

                var img1 = document.getElementById("zbr1");
                c.drawImage(img1, 50, 30);

                var img2 = document.getElementById("zbr2");
                c.drawImage(img2, 750, 30);

                var img3 = document.getElementById("zbr3");
                c.drawImage(img3, 50, 380);

                var img4 = document.getElementById("zbr4");
                c.drawImage(img4, 750, 380);


                c.fillStyle = "#752424";
                c.font = "1.5em David Libre";
                c.fillText("Sale!", 60, 62);
                c.fillText("Sale!", 760, 62);
                c.fillText("Sale!", 60, 412);
                c.fillText("Sale!", 760, 412);

                c.beginPath();
                c.lineWidth = 5;
                c.strokeStyle = "#752424";
                c.fillStyle = "#752424"
                c.moveTo(50, 30);
                c.lineTo(170, 30);
                c.lineTo(50, 120);
                c.lineTo(50, 27);
                c.stroke();

                c.beginPath();
                c.lineWidth = 5;
                c.strokeStyle = "#752424";
                c.fillStyle = "#752424"
                c.moveTo(750, 30);
                c.lineTo(870, 30);
                c.lineTo(750, 120);
                c.lineTo(750, 27);
                c.stroke();

                c.beginPath();
                c.lineWidth = 5;
                c.strokeStyle = "#752424";
                c.fillStyle = "#752424"
                c.moveTo(50, 380);
                c.lineTo(170, 380);
                c.lineTo(50, 470);
                c.lineTo(50, 377);
                c.stroke();


                c.beginPath();
                c.lineWidth = 5;
                c.strokeStyle = "#752424";
                c.fillStyle = "#752424"
                c.moveTo(750, 380);
                c.lineTo(870, 380);
                c.lineTo(750, 470);
                c.lineTo(750, 377);
                c.stroke();

            }

            function myFunction() {
                var str = "Wait! None of these products interest you? Well, we have just the thing for you. Start playing the game below and if you win you get 35% discount in <mark>ANY</mark> of the products that you like!";
                var patt = new RegExp("discount");
                var res = patt.exec(str);
                document.getElementById("demo").innerHTML = res;
            }
            function testmethod() {
                var variabla = "Wait! None of these products interest you? Well, we have just the thing for you. Start playing the game below and if you win you get 35% discount in <mark>ANY</mark> of the products that you like!";
                var vari = new RegExp("35%");
                var rez = vari.test(variabla);
                document.getElementById("testi").innerHTML = rez;
            }
            function krk() {
                var s = "Wait! None of these products interest you? Well, we have just the thing for you. Start playing the game below and if you win you get 35% discount,discount,discount in <mark>ANY</mark> of the products that you like!";
                var patt1 = /discount/g;
                var result = s.match(patt1);
                document.getElementById("dem").innerHTML = result;
            }
            function kerkesa() {
                var dis = "DISCOUNT";
                var pa = /discount/i;
                var result = dis.match(pa);
                document.getElementById("njeid").innerHTML = result;
            }

        </script>


        <p id="zbrteksti">Wait! None of these products interest you? Well, we have just the thing for you. Start
            playing the game below and if you win you get 25% discount in <mark>ANY</mark> of the products
            that you like!<br /><br /><button style="border-radius: 3px;" onclick="myFunction()">Wait,You Said
                Discount?</button>
            <p style="margin-left:20%;font-weight: bolder; color:#752424;" id="demo"></p>

            <button style=" margin-left:20%;border-radius: 3px;" onclick="testmethod()">25%?</button>
            <p style="margin-left:20%;font-weight: bolder; color:#752424;" id="testi"></p>

            <button style=" margin-left:20%;border-radius: 3px;" onclick="krk()">I can't believe!!!</button>
            <p style=" margin-left:20%;font-weight: bolder; color:#752424;" id="dem"></p>

            <button style=" margin-left:20%;border-radius: 3px;" onclick="kerkesa()">SCREAAAAM</button>
            <p style="margin-left:20%;font-weight: bolder; color:#752424;" id="njeid"></p>
        </p>



        <div id="gameCanvas">
            <button id="stbtn" onclick="clickCounter()">Start Game! </button>
            <canvas id="myCanvas" width="480" height="320"></canvas>
        </div>
        <style>
            #myCanvas {
                display: none;
                background: #eee;
            }

            #stbtn {
                margin: 2% 20%;
                border: 2px #752424;
                background-color: #752424;
                padding: 5px;
                font-size: 30px;
                color: aliceblue;
                border-radius: 10px;
            }

            #gameCanvas {

                margin: 5% 30%;
            }

            #jBells {
                margin: 3% 1%;
            }
        </style>

        <p id="zbrteksti">Go to our online order page if you already know what you want!
        </p>


        <script>

            function clickCounter() {
                if (typeof (Storage) !== "undefined") {
                    if (sessionStorage.clickcount) {
                        sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
                    } else {
                        sessionStorage.clickcount = 1;
                    }
                    if (sessionStorage.clickcount > 1) {
                        alert("You can't play again!");
                        $("#stbtn").click(function () {
                            $("#myCanvas").remove();
                        });
                    }

                } else {
                    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                }
            }


            function onlineorder() {
                window.location.href = "porosit_online.html";
            }
        </script>

        <div class="empty" ondrop="onlineorder();">
            <div class="fill" draggable="true"> </div>
        </div>

        <div class="empty" ondrop="onlineorder();">
        </div>


        <div id="jBells">

            <audio autoplay>
                <source src="audio/jingleBells.mp3" type="audio/mpeg">
                <source src="audio/jingleBellsogg.ogg" type="audio/ogg">
                This text displays if the audio tag isn't supported.
            </audio>
        </div>

    </main>


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
    <script src="javascript/allpages.js"></script>
    <script src="javascript/jquerythingz.js"></script>
    <script src="javascript/dragndrop.js"></script>
    <script src="javascript/loja.js"></script>
</body>

</html>