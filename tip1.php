<?php
	if(isset($_POST['submit'])){
		session_start(); // Start the session

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: session2.php');
	}
?>

<!DOCTYPE html>
<html>

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

<body>
    <header>
        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img
                                    src="images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img
                                    src="images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img
                                    src="images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img
                                    src="images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img
                                    src="images/facebook.png"></abbr></a></li>
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
        <article>
            <style>
                #imgtip1 {
                    margin: 2% 25%;
                }

                #blob {
                    margin: 2% 22%;
                    padding-bottom: 3%;
                    width: 600px;
                }

                #showmore {
                    font-size: 1.5em;
                    color: #696969;
                    border-radius: 5px;
                    background-color: F1F1F1;
                    font-family: Alegreya Sans SC;
                }

                #btnsm {
                    padding-left: 35%;
                }

                .tipi1 {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    grid-template-rows: repeat(12, 1fr);
                    grid-column-gap: 0px;
                    grid-row-gap: 5px;
                    margin: 2% 7%;
                    padding-left: 5%;
                }

                #div1,
                #div4,
                #div5,
                #div8,
                #div9,
                #div12 {
                    margin: 15% 5%;
                }

                #div1 {
                    grid-area: 1 / 1 / 3 / 2;
                }

                #div2 {
                    grid-area: 1 / 2 / 3 / 3;
                }

                #div3 {
                    grid-area: 3 / 1 / 5 / 2;
                }

                #div4 {
                    grid-area: 3 / 2 / 5 / 3;
                }

                #div5 {
                    grid-area: 5 / 1 / 7 / 2;
                }

                #div6 {
                    grid-area: 5 / 2 / 7 / 3;
                }

                #div7 {
                    grid-area: 7 / 1 / 9 / 2;
                }

                #div8 {
                    grid-area: 7 / 2 / 9 / 3;
                }

                #div9 {
                    grid-area: 9 / 1 / 11 / 2;
                }

                #div10 {
                    grid-area: 9 / 2 / 11 / 3;
                }

                #div11 {
                    grid-area: 11 / 1 / 13 / 2;
                }

                #div12 {
                    grid-area: 11 / 2 / 13 / 3;
                }
            </style>
            <img src="images/imgtat/id1.jpg" style="width: 400px; height: 250px" id="imgtip1" class="hoveer">
            <div id="blob">
                <h3>Best interior decorating secrets</h3>
                <p>Some people have a natural eye for design, but if you're more in the camp of those who can't do
                    anything without consulting Pinterest board upon Pinterest board before making any major changes,
                    we feel you. We'd love to have an interior designer on speed dial before deciding exactly where and
                    how hang to hang that sweet new wall art we bought on a whim. But until we win the lottery, we'll
                    have
                    to settle for trusting our guts, and taking plenty of design tips where we can get them. We've
                    compiled
                    some secrets straight from the pros to help you with all your decorating needs.</p>
                <div id="btnsm">
                    <button id="showmore">Read more!</button>
                </div>

                <script>
                    $(document).ready(function () {
                        $(".tipi1").hide();

                        $("#showmore").click(function () {
                            $(".tipi1").toggle(1000);
                        });
                    });
                </script>
            </div>


            <div class="tipi1">


                <p id="div1" style="width: 250px" id="div2">"If punk rock has taught me anything, it's to do everything
                    yourself.
                    All of my favorite interior designers were self-taught."—Max Humphrey</p>
                <img src="images/tip1.1.jpg" style="width: 320px; height: 350px" id="div2" class="hoveer">


                <p id="div4" style="width: 250px">"Old and new belong together. A mix of modern pieces and antiques
                    never
                    tires."—Caleb Anderson
                </p>
                <img src="images/tip1.2.jpg" style="width: 320px; height: 350px" id="div3" class="hoveer">

                <p id="div5" style="width: 250px">“I love to use wallpaper in mundane spaces. Hallways,
                    pantries, powder rooms—all become moments of joy and funkiness.
                    Areas of transition can be places you enjoy spending time in.”—Fawn Galli</p>
                <img src="images/tip1.3.jpg" style="width: 320px; height: 350px" id="div6" class="hoveer">


                <p id="div8" style="width: 250px">"Choosing the right light bulb is very important.
                    LED bulbs are energy efficient, and they can look great."—Paloma Contreras</p>
                <img src="images/tip1.4.jpeg" style="width: 320px; height: 350px" id="div7" class="hoveer">

                <p id="div9" style="width: 250px">“Wicker is an element I love for its texture and versatility.
                    Wicker baskets are so functional for storage, but a wicker animal brings a sense of whimsy.” —Amy
                    Berry
                </p>
                <img src="images/tip1.5.jpg" style="width: 320px; height: 350px" id="div10" class="hoveer">

                <p id="div12" style="width: 250px">“Update your light switches! Elegant controls add a spectacular
                    element
                    to an older home or character to a new one.” —Courtney Hill
                </p>
                <img src="images/tip1.6.jpg" style="width: 320px; height: 350px" id="div11" class="hoveer">

            </div>

        </article>

    </main>
</body>
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
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return checkForm(this);">
                    <input type="text" name="name" placeholder="Name" class="f" /><br /><br />
                    <input type="text" name="email" placeholder="Email" class="f" /><br /><br />
                    <input type="type" name="subject" placeholder="Subject" class="f" /><br /><br />
                    <textarea name="message" rows="5" cols="20" placeholder="Message" class="f"></textarea>
                    <br /><br />
                    <input id="submit" type="submit" name="submit">
                </form>
            </div>
        </div>
        <div>
            <address>

                <p id="copyright">Copyright &copy; 2017 Fundamentals of Web Development

                    .........email: <a href="mailto:yourhome@gmail.com ">yourhome@gmail.com</a><br />
                </p>
                </addrress>
        </div>

    </section>
</footer>
</main>
<script src="javascript/allpages.js"></script>
<script src="javascript/jquerythingz.js"></script>
</body>

</html>
