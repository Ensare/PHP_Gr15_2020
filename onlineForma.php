<?php include("pregEx.php");
include("sendEmail.php"); ?>
<!DOCTYPE html>
<html manifest="home.appcache">

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
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="javascript/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="javascript\validimi.js"></script>

    <script src="javascript\produktet.js"></script>

    <?php
    $db = mysqli_connect("localhost", "root", "php123!", "phpconnection");
    $contact = $email = $mobile = $address = $country = $city = $zip = "";
    $reg = "/^[a-zA-Z\s\d\.]+$/";
    $reg2 = "/\+[0-9]/s";
    $reg3 = "/[0-9]{5}/s";
    $regex2 = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]+$/";

    if (isset($_POST['submit1'])) {
        $con = mysqli_real_escape_string($db, $_POST['contact']);
        $emaila = mysqli_real_escape_string($db, $_POST['emaili']);
        $mob = mysqli_real_escape_string($db, $_POST['mobile']);
        $add = mysqli_real_escape_string($db, $_POST['address']);
        $cont = mysqli_real_escape_string($db, $_POST['country']);
        $cit = mysqli_real_escape_string($db, $_POST['city']);
        $z = mysqli_real_escape_string($db, $_POST['zip']);
        if (preg_match($reg, $con) && preg_match($regex2, $emaila) && preg_match($reg2, $mob) && preg_match($reg, $add) && preg_match($reg, $cont) && preg_match($reg, $cit) && preg_match($reg3, $z)) {
            $contact = "<span style='color:green'>&#10004; Valid input</span>";
            $email =  "<span style='color:green'>&#10004; Valid input</span>";
            $mobile = "<span style='color:green'>&#10004; Valid input</span>";
            $address = "<span style='color:green'>&#10004; Valid input</span>";
            $country = "<span style='color:green'>&#10004; Valid input</span>";
            $city = "<span style='color:green'>&#10004; Valid input</span>";
            $zip = "<span style='color:green'>&#10004; Valid input</span>";

            $query = "INSERT INTO online (contact, email, mobile,adresa,country,city,zip)
                VALUES('$con', '$emaila', $mob','$add','$cont','$cit','$z')";
            mysqli_query($db, $query);


            $tot = $_SESSION['var'];

            confirmOrder($emaila, $con, $tot);


        } else if (empty($con) || empty($emaila) || empty($mob) || empty($add) || empty($cont) || empty($cit) || empty($z)) {
            if (empty($con)) {
                $contact = "<span style='color:red'>*Required</span>";
            }
            if (empty($emaila)) {
                $emaili = "<span style='color:red'>*Required</span>";
            }
            if (empty($mob)) {
                $mobile = "<span style='color:red'>*Required</span>";
            }
            if (empty($add)) {
                $address = "<span style='color:red'>*Required</span>";
            }
            if (empty($cont)) {
                $country = "<span style='color:red'>*Required</span>";
            }
            if (empty($cit)) {
                $city = "<span style='color:red'>*Required</span>";
            }
            if (empty($z)) {
                $zip = "<span style='color:red'>*Required</span>";
            }
        } else {
            if (!preg_match($reg, $con)) {
                $contact = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($regex2, $emaila)) {
                $emaili = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($reg2, $mob)) {
                $mobile = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($reg, $add)) {
                $address = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($reg, $cont)) {
                $country = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($reg, $cit)) {
                $city = "<span style='color:red'>&#10006; Invalid input</span>";
            }
            if (!preg_match($reg3, $z)) {
                $zip = "<span style='color:red'>&#10006; Invalid input</span>";
            }
        }
    }
    ?>


    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        @import url(https://fonts.googleapis.com/css?family=Merriweather);

        .err {
            color: #FF0000;
            font-size: 1em;
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

        table {
            border: 3px solid;
        }

        #forme {
            margin: 3% 10% 3% 15%;
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
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img src="images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img src="images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img src="images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img src="images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img src="images/facebook.png"></abbr></a></li>
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


    <form method="POST" id="mainForm" action="">
        <h1 id="shpi" style="text-align: center; margin-top:2%;">Shipping Information</h1>
        <table cellspacing="50px;" id="forme">
            <thead>
                <tr>
                    <th>Personal Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>
                            <label class="f">Contact</label><br />
                            <input class="g" type="text" name="contact" />
                            <?php if (isset($contact)) {
                                echo $contact;
                            } ?><br /><br />
                        </p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p>
                            <label class="f">Email</label><br />
                            <input class="g" type="text" name="emaili" />
                            <?php if (isset($emaili)) {
                                echo $emaili;
                            } ?><br /><br />
                        </p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p>
                            <label class="f">Mobile</label><br />
                            <input class="g" type="tel" name="mobile" id="mobnm" />
                            <?php if (isset($mobile)) {
                                echo $mobile;
                            } ?><br /><br />

                        </p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p>
                            <label class="f">Address</label><br />
                            <input type="text" class="g type=" name="address" id="addr" />
                            <?php if (isset($address)) {
                                echo $address;
                            } ?><br /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            <label class="f">Country</label><br />
                            <input class="g" type="text" name="country" list="country" />
                            <datalist id="country">
                                <option>A</option>
                                <option>Albania</option>
                                <option>Afghanistan</option>
                                <option>Algeria</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Antigua and Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>B</option>
                                <option>Bahrain</option>
                                <option>Bangladesh</option>
                                <option>Barbados</option>
                                <option>Belarus</option>
                                <option>Belgium</option>
                                <option>Belize</option>
                                <option>Benin</option>
                                <option>Bhutan</option>
                                <option>Bolivia</option>
                                <option>Bosnia and Herzegovina</option>
                                <option>Botswana</option>
                                <option>Brazil</option>
                                <option>Brunei</option>
                                <option>Bulgaria</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>C</option>
                                <option>Cabo Verde</option>
                                <option>Cambodia</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                                <option>Central African Republic</option>
                                <option>Chile</option>
                                <option>Chad</option>
                                <option>D</option>
                                <option>Denmark</option>
                                <option>Djibouti</option>
                                <option>Dominica</option>
                                <option>Dominican Republic</option>
                                <option>E</option>
                                <option>East Timor (Timor-Leste)</option>
                                <option>Ecuador</option>
                                <option>Egypt</option>
                                <option>El Salvador</option>
                                <option>Equatorial Guinea</option>
                                <option>Eritrea</option>
                                <option>Estonia</option>
                                <option>F</option>
                                <option>Fiji</option>
                                <option>Finland</option>
                                <option>France</option>
                                <option>G</option>
                                <option>Gabon</option>
                                <option>The Gambia</option>
                                <option>Georgia</option>
                                <option>Germany</option>
                                <option>Ghana</option>
                                <option>Greece</option>
                                <option>Grenada</option>
                                <option>Guatemala</option>
                                <option>H</option>
                                <option>Haiti</option>
                                <option>Honduras</option>
                                <option>Hungary</option>
                                <option>I</option>
                                <option>Iceland</option>
                                <option>India</option>
                                <option>Indonesia</option>
                                <option>Iran</option>
                                <option>Iraq</option>
                                <option>Irelan</option>
                                <option>J</option>
                                <option>Jamaica</option>
                                <option>Japan</option>
                                <option>Jordan</option>
                                <option>K</option>
                                <option>Kazakhstan</option>
                                <option>Kenya</option>
                                <option>Kiribati</option>
                                <option>Korea, North</option>
                                <option>Korea, South</option>
                                <option>Kosovo</option>
                                <option>Kuwait</option>
                                <option>L</option>
                                <option>Laos</option>
                                <option>Latvia</option>
                                <option>Lebanon</option>
                                <option>Lesotho</option>
                                <option>Liberia</option>
                                <option>Libya</option>
                                <option>M</option>
                                <option>Madagascar</option>
                                <option>Malawi</option>
                                <option>Malaysia</option>
                                <option>Maldives</option>
                                <option>Mali</option>
                                <option>Malta</option>
                                <option>Marshall Islands</option>
                                <option>N</option>
                                <option>Namibia</option>
                                <option>Nauru</option>
                                <option>Nepal</option>
                                <option>Netherlands</option>
                                <option>New Zealand</option>
                                <option>Nicaragua</option>
                                <option>P</option>
                                <option>Pakistan</option>
                                <option>Palau</option>
                                <option>Panama</option>
                                <option>Papua New Guinea</option>
                                <option>Paraguay</option>
                                <option>Peru</option>
                                <option>Q</option>
                                <option>Qatar</option>
                                <option>R</option>
                                <option>Romania</option>
                                <option>Russia</option>
                                <option>Rwanda</option>
                                <option>S</option>
                                <option>Saint Kitts and Nevis</option>
                                <option>Saint Lucia</option>
                                <option>Saint Vincent and the Grenadines</option>
                                <option>Samoa</option>
                                <option>San Marino</option>
                                <option>Sao Tome and Principe</option>
                                <option>Saudi Arabia</option>
                                <option>Senegal</option>
                                <option>T</option>
                                <option>Taiwan</option>
                                <option>Tajikistan</option>
                                <option>Tanzania</option>
                                <option>Thailand</option>
                                <option>Togo</option>
                                <option>U</option>
                                <option>Uganda</option>
                                <option>Ukraine</option>
                                <option>United Arab Emirates</option>
                                <option>United Kingdom</option>
                                <option>V</option>
                                <option>Vanuatu</option>
                                <option>Vatican City</option>
                                <option>Venezuela</option>
                                <option>Vietnam</option>
                                <option>Y</option>
                                <option>Yemen</option>
                                <option>Z</option>
                                <option>Zambia</option>
                                <option>Zimbabwe</option>
                            </datalist>
                            <?php if (isset($country)) {
                                echo $country;
                            } ?><br /><br />
                        </p>
                    </td>

                </tr>
                <tr>
                    <td>

                        <p>
                            <label class="f">City</label><br />
                            <input class="g" type="text" name="city" id="city" />
                            <?php if (isset($city)) {
                                echo $city;
                            } ?><br /><br />
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            <label class="f">Zip</label><br />
                            <input class="g" type="text" name="zip" placeholder="Zip code" maxlength="5" minlength="5" />
                            <?php if (isset($zip)) {
                                echo $zip;
                            } ?><br /><br />
                        </p>
                    </td>
                    <td>
                        <div class="confirmi">
                            <input type="hidden" name="form_number" value="1" />
                            <input type="submit" name="submit1" class="btn" value="Confirm" id="conf">
                            <input type="reset" value="Clear Form" class="btn" style="margin-top: 20px;">
                            <div id="result"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    </section>

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
    <script src="javascript\checkforma.js"></script>
</body>

</html>