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
            $(document).ready(function() {
                $("#hide").click(function() {
                    $(".showhide").hide(function() {
                        alert("Note is gone!!");
                    });
                });
                $("#show").click(function() {
                    $(".showhide").show();
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
                <input type="text" size="20" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
                </form>
            </div>


                <div class="navbar">
                    <a href="index.html">Home</a>
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
        <section class="margina">

            <form id="mainForm" action="includes/apply.inc.php" method="POST">
                <fieldset>
                    <legend>APPLY FOR JOB</legend>
                    <table class="tabela">
                        <tr>
                            <td>
                                <p><label>Name:</label><br />
                                    <input class="borderi required" type="text" name="namee" placeholder="Write your name">
                                </p>
                                <p>
                                    <label>Last name:</label><br />
                                    <input class="borderi required" type="text" name="lastname" placeholder="Write your last name">
                                </p>
                                <p>
                                    <label>Email:</label><br />
                                    <input class="borderi required" type="text" name="email" placeholder="Write your email">
                                </p>
                                <p>
                                    <label>Telephone:</label><br />
                                    <input class="borderi" style="width:188px; padding:0.5em" type="tel" name="telephonee" value="+"></p>
                            </td>
                            <td>
                                <p> <label>Country:</label><br />
                                    <input class="borderi required" style="width:188px; padding:0.5em" type="text" name="country" placeholder="Country"></p>
                                <p>
                                    <label>City:</label><br />
                                    <input class="borderi required" type="text" name="city" placeholder="City">
                                    <p>
                                        <label>Street:</label><br />
                                        <input class="borderi" type="text" name="street" placeholder="Write your street">
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
                                    <input class="borderi" style="width:188px; padding:0.5em" type="date" name="Birthdate" placeholder="Birthdate"><br /><br /></p>
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
                        <form method="POST">
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
        <script src="javascript/allpages.js"></script>
        <script src="javascript/jquerythingz.js"></script>
        <script src="javascript/validimforma.js"></script>

    </body>

    </html>