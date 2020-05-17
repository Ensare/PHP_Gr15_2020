<?php include('pregEx.php'); ?>
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
    <style>
        #title{
         background-image: url('images/imgtat/tenor.gif'), url('images/imgtat/paper.jpeg');
         background-position: right bottom, left top;
         background-repeat: no-repeat, repeat;
         padding: 25px;
         background-size: 200px 150px, 200px, 200px;
         background-origin: content-box, content-box;
      }  
        #senepalidhje {
            margin: 5% 2%;
            display: flex;
        }

        #buni {
            border-radius: 6px;
            margin-top: 5%;
            border-collapse: collapse;
            width: 40%;
        }

        #buni thead {
            background-image: url("images/imgtat/bckimg.png");
            background-repeat: repeat-x;
            background-attachment: local;
            background-position: initial;
            color: white;
        }
        .rot:hover{
            -webkit-transform:rotateX(150deg);
            transform:rotateX(150deg);
        }
        .rot1:hover{
            -webkit-transform:rotateY(150deg);
            transform:rotateY(150deg);
        }
    </style>
     <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

<body>
    <header class="animated fadeIn">

        <h1><a name="top"></a>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
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
                <input type="text" size="20" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
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

    <div>
        <h2 id="title">What You Need To Know About Interior Design</h2>
        <section class="tipsandtricks">

            <div id="tip1">
                <img class="rot" src="images/imgtat/id1.jpg" style="width: 300px; height: 169px">
                <h3 style="text-shadow: 2px 2px #CCCCCC">Best interior decorating secrets</h3>
                <p style="width: 300px">Some people have a natural eye for design, but if you're more in the camp of
                    those who can't do
                    anything
                    without consulting...
                    <a href="tip1.php" target="_blank">Read more</a></p>
            </div>
            <div id="tip2">
                <img class="rot" src="images/imgtat/id2.jpg" target="_blank">
                <h3 style="text-shadow: 2px 2px #CCCCCC"> How to Decorate for Christmas </h3>
                <p style="width: 300px">Wondering how to decorate for Christmas? We're here to help you deck the
                    halls—while staying true to
                    your
                    budget and style...
                    <a href="tip2.php" target="_blank">Read more</a>
                </p>
            </div>
            <div id="tip3">
                <img class="rot" src="images/imgtat/id3.jpg">
                <h3 style="text-shadow: 2px 2px #CCCCCC">Timeless Interior Design Ideas For Your Home</h3>
                <p style="width: 300px">The interior design of your home speaks volumes. Not only does it showcase style
                    and class, it can
                    also
                    be an
                    extension of your personality. While design ideas come and go, there are a few...
                    <a href="tip3.php" target="_blank">Read more</a>
                </p>
            </div>

            <div id="tip4">
                <img class="rot1" src="images/imgtat/id4.jpg">
                <h3 style="text-shadow: 2px 2px #CCCCCC"> Minimalism in Interior Design</h3>
                <p style="width: 300px">Stark, cold and boring? Simple and sleek? Regardless of how you view minimalist
                    interior design,
                    there’s
                    more
                    to this widely embraced concept than most of us think.<a href="tip4.php" target="_blank">Read more</a></p>
            </div>

            <div id="tip5">
                <img class="rot1" src="images/imgtat/id6.jpg">
                <h3 style="text-shadow: 2px 2px #CCCCCC"> Colorful interior design ideas </h3>
                <p style="width: 300px"> If you are not sure how to add pops of color to your space you came to the
                    right place. The
                    following
                    ideas
                    share tricks and ideas for reinvigorating your décor with a rainbow of hues.
                    <a href="tip5.php">Read more</a></p>
            </div>
            <div id="tip6">
                <img class="rot1" src="images/imgtat/id5.jpg">
                <h3 style="text-shadow: 2px 2px #CCCCCC"> Best modern living room design</h3>
                <p style="width: 300px">A living room needs to be welcoming for you and your guests. More people will be
                    able to visualize it
                    as
                    their own. Checkout 25 best modern living room designs<a href="tip6.php" target="_blank">Read more</a></p>
            </div>
        </section>

        <section id="senepalidhje">

            <div>
                <table cellpadding="5" border="1" id="buni">
                    <thead colspan="2">
                        <tr>
                            <td colspan="5">Best Universities to study Interior Design</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rank</td>
                            <td>University</td>
                            <td>City</td>
                            <td>Address</Address>
                            </td>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>The Florence Design Academy</td>
                            <td>Firenze</td>
                            <td>Piazza della Libertà 13</td>
                            <td>contact@infofda.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>The Interior Design School</td>
                            <td>London</td>
                            <td>1a Sheldon Square,Paddington Central</td>
                            <td>ideas@idschool.co.uk </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>SCAD</td>
                            <td>Savannah</td>
                            <td>1600 Peachtree St</td>
                            <td>contact@scad.edu</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Pratt Institute</td>
                            <td>New York City</td>
                            <td>200 Willoughby Avenue, Brooklyn</td>
                            <td>admissions@pratt.edu</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Visual College of Art and Design</td>
                            <td>Vancouver</td>
                            <td>500-626 West Pender Street</td>
                            <td>vcad.ca/</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Rhode Island Institute of Design</td>
                            <td>Providence</td>
                            <td>Two College Street </td>
                            <td>admissions@risd.edu</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div>
                <h5 style="color:brown">Things To Remember</h5>
                <dl>
                    <dt>Design</dt>
                    <dd>The process of imagining and planning the creation of objects, systems.</dd>
                    <dt>Interior Designer</dt>
                    <dd>works with a client to create aesthetic rooms and spaces.</dd>
                </dl>
                <h5 style="color:brown">Benefits of Using an Interior Designer:</h5>
                <ul style="list-style-type:disc">
                    <li>Designers are experts.</li>
                    <li>Designers are well connected.</li>
                    <li>Economical Budget & Time Management:
                        <ul style="margin-left:5%">
                            <li>Designers save you time and money.</li>
                            <li>designers add value.</li>
                        </ul>
                    </li>
                    <li>Designers tie the entire project together.</li>
                    <li>Designers deliver the latest trends.</li>
                    <li>Handy Skills & Experience:
                        <ul style="margin-left:5%">
                            <li>Interior design is as much an art as it is a science. </li>
                            <li>Designers make spaces more functional and appealing.</li>
                            <li> interior designer can lend credibility and quality to any space.</li>
                        </ul>
                    </li>
                </ul>
            </div>

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

</body>

</html>
