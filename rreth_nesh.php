<?php 
include('pregEx.php');
$apiKey = "eab060642a2ff7ce3f9388548e13cc36";
$cityId = "786714";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<!DOCTYPE html>
<html manifest="home.appcache">

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCMqFg25fYARDPgH7_Fcqt60GzMROprDEA&sensor=true"></script>
    <style>
        #shortquote {
            display: none;
        }

        #meetOurTeam {
            font-size: 1.5em;
            color: #696969;
            border-radius: 5px;
            background-color: F1F1F1;
            font-family: Alegreya Sans SC;
        }

        #btnmt {
            padding-left: 25%;
        }
    </style>

    <script>
        $(document).ready(function () {
            $(".meettheTeam").hide();

            $("#meetOurTeam").click(function () {
                $(".meettheTeam").toggle(1000);
            });
        });


    </script>

</head>

<body class="fadeBody">


    <header>

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
    </header>

    <main>
        <img id="fotokryesore" src="images/imgau/fotokryesore.jpg">
        <h1 id="shortquote"> Thirty years of making people feel home!</h1>
        <script>
            $(document).ready(function () {
                $("#shortquote").fadeIn(3000);

            });

        </script>


        <div id="desc">
            <h2>About us</h2>

            <p>Your Home is a furniture store that operates since the 80s.
                With our bold and hardworking crew, we have expanded our store to three new locations,
                bringing ourselves closer to the customers!<br>
                So without further ado...
            </p>
            <div id="btnmt">
                <button id="meetOurTeam">Meet our team!</button>
            </div>
        </div>

        <div class="meettheTeam">
            <div id='ensarja'>
                <p class="src1"><img class="mtfig" src="images/imgau/ensarja.jpeg" /> Ensare Islami</p>
                <p id="pershkrimi"> Ensare is our great leader that we all love and respect.
                    She writes the cleanest code you'll ever see and even though we differ in our religious views
                    we still have a lot of fun together.</p>


            </div>
            <div id='alina'>

                <p class="src1"><img class="mtfig" src="images/imgau/alina.jpg" /> Alina Fazliu</p>
                <p id="pershkrimi">Alina is our mom manager. She keeps us all together, however she just isn't the
                    brightest bulb in the box. While working she loves calling herself "Alineee, budalliceeee"
                    whenever she
                    doesn't
                    know what she's doing. And that's a lot.</p>
            </div>
            <div id='arita'>
                <p class="src1"><img class="mtfig" src="images/imgau/arita.jpg" /> Arita Alidemaj</p>
                <p id="pershkrimi">Arita is a young, hardowrking woman, who we like to call 'Vogelushe' due to her
                    babyface and height. However, do not let that fool you! She is three times squared the
                    ordinary human and works more than her physique lets you know.</p>

            </div>
            <div id='argjenta'>
                <p class="src1"><img class="mtfig" src="images/imgau/argjenta.jpg" /> Argjenta Gashi</p>
                <p id="pershkrimi">Argjenta is the joy of our team. Whenever we feel down or bad she is there with
                    her
                    infectious laughter, and you'll feel better just by hearing her laugh! She keeps the group
                    updated
                    with almost everything and doesn't let us worry for the stupid things that we love worrying
                    about.
                </p>
            </div>


        </div>
        </section>



        <h2 id="visit"> Visit our stores: </h2>
        <script>
            $(document).ready(function () {
                $("#visit").click(function () {
                    $(".map").remove();
                });
            });


        </script>
        <section class="map">
            <p> <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.16240130711!2d21.12362200557275!3d42.66643785383894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPrishtina!5e0!3m2!1sen!2s!4v1577470590151!5m2!1sen!2s"
                    width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </p>
            <p> <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46780.1845996892!2d20.820138607186014!3d42.87787708565547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135345063679ba21%3A0xc24c0fe075e868e2!2sMitrovica!5e0!3m2!1sen!2s!4v1577470638191!5m2!1sen!2s"
                    width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </p>

            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46944.5069511221!2d20.263113555528943!3d42.66068395976845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352fdc097e0cba1%3A0x2d9296d8cc0eba51!2sPeja!5e0!3m2!1sen!2s!4v1577469888315!5m2!1sen!2s"
                    width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </p>
        </section>

        <section id="adresa">
            <address style="width: 380px;">
                Address:Bajram Kelmendi <br />
                City: Pristina <br />
                Region: Pristina <br />
                Country: Kosovo <br />
                Postal Code: 10000 <br />
                Phone: 24233444 <br />
                Email: yourhome@gmail.com
            </address>
            <address style="width: 400px;">
                Address:Ferit Preteni <br />
                City: Mitrovica <br />
                Region: Mitrovica <br />
                Country: Kosovo <br />
                Postal Code: 40000 <br />
                Phone: 24233444 <br />
                Email: yourhome@gmail.com
            </address>
            <address style="width: 350px;">
                Address:Zhuj Selmani <br />
                City: Peja <br />
                Region: Peja <br />
                Country: Kosovo <br />
                Postal Code: 30000 <br />
                Phone: 24233444 <br />
                Email: yourhome@gmail.com
            </address>
        </section>

        <style>
        #adresa{
            margin: 3%;
            display: flex;
        }
        
        </style>

        <h2 id="cord" align='center'>Get your coordinates and see which store is nearest to you!</h2>
        <section class="coordinates">
            <div id="div-btn" align='center'> <button id="btn-pos" onclick="getLocation()">Your Position!</button>
                <p id="pos"></p>
            </div>
            <style>
                #btn-pos {
                    font-size: 1.5em;
                    color: #696969;
                    border-radius: 5px;
                    background-color: F1F1F1;
                    font-family: Alegreya Sans SC;
                }
            </style>
            <div id="map" align='center'>
                <iframe id="google_map" width="400" height="325" frameborder="0" style="border:0"
                    src="https://maps.google.com?output=embed">
                </iframe>
            </div>

        </section>

        <div class="report-container" align='center' style="margin-bottom: 3%;">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /></br>
             <?php echo $data->main->temp_max; ?>°C</br>
            <?php echo $data->main->temp_min; ?>°C
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
    </main>

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
                        <a href="rreth_nesh.php">Read More>></a>
                    </p>
                </div>

                <div id="b">
                    <h5 id="links">BEST PRODUCTS</h5>
                    <ol>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti1.php">Natalia</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti3.php">Tommy Bahama</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti6.php">Starmore</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti3.php">Zobel and Co Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti4.php">Wayfair</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti3.php">Palma</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti6.php">Bescope Kitchen</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti5.php">Edelmar</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti2.php">Oisin</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti5.php">Wystfield</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti4.php">Calgary Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti5.php">Tuft and Needle</a></li>

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
                        <input id="submit" type="submit" name="submit2">
                        <input type="hidden" name="form_number" value="2" />
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
<script src="javascript/getPosition.js"></script>

</body>

</html>