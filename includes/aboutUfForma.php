<?php include("oop.php");?>

<body style="background-color: #DADADA">
<div>
<?php
    $person1 = new Person("Arita","Alidemaj","Pejë","aritaalidemaj@gmail.com","049-111-000","20","Manager","09:00-14:00","Monday-Wednesday","02/03/2017","3 Years");
    $person2 = new Person("Alina","Fazliu","Mitrovicë","alinafazliu@gmail.com","049-555-522","20","Manager","11:00-16:00","Tuesday-Friday","11/05/2016","4 Years");
    $person3 = new Person("Ensare","Islami","Prishtinë","ensareislami@gmai.com","049-888-777","20","Manager","12:00-18:00","Thursday-Saturday","19/12/2018","2 Years");

    echo "<table style='border: 2px solid; float:left;padding:10px;margin:10% 4%; width:370px; height:440px;font-size:18px; '>
            <tr>
                <th>Name:</th><td>".$person1->name."</td>
            </tr>";
    echo    "<tr>
                <th>Last Name:</th><td>".$person1->lastName."</td>
            </tr>";
    echo    "<tr>
                <th>City:</th><td>".$person1->city."</td>
            </tr>";
    echo    "<tr>
                <th>Post:</th><td>".$person1->email."</td>
            </tr>";
    echo    "<tr>
            <th>Phone Number:</th><td>".$person1->phoneNumber."</td>
        </tr>";
    echo    "<tr>
                <th>Age:</th><td>".$person1->age."</td>
            </tr>";
    echo    "<tr>
                <th>Post:</th><td>".$person1->post."</td>
            </tr>";
    echo    "<tr>
                <th>Works from:</th><td>".$person1->time."</td>
            </tr>";
    echo    "<tr>
                <th>Working Days:</th><td>".$person1->day."</td>
            </tr>";
    echo    "<tr>
                <th>Works since:</th><td>".$person1->started."</td>
            </tr>";
    echo    "<tr>
                <th>Experience:</th><td>".$person1->experience."</td>
            </tr>";
    echo "</table>";

    echo "<table style='border: 2px solid; float:left;padding:10px; margin:10% 4%;width:370px; height:440px;font-size:18px; '>
            <tr>
                <th>Name:</th><td>".$person2->name."</td>
            </tr>";
    echo    "<tr>
                <th>Last Name:</th><td>".$person2->lastName."</td>
            </tr>";
    echo    "<tr>
                <th>City:</th><td>".$person2->city."</td>
            </tr>";
            echo    "<tr>
                <th>Post:</th><td>".$person2->email."</td>
            </tr>";
    echo    "<tr>
            <th>Phone Number:</th><td>".$person2->phoneNumber."</td>
        </tr>";
    echo    "<tr>
                <th>Age:</th><td>".$person2->age."</td>
            </tr>";
    echo    "<tr>
                <th>Post:</th><td>".$person2->post."</td>
            </tr>";
    echo    "<tr>
                <th>Works from:</th><td>".$person2->time."</td>
            </tr>";
    echo    "<tr>
                <th>Working Days:</th><td>".$person2->day."</td>
            </tr>";
    echo    "<tr>
                <th>Works since:</th><td>".$person2->started."</td>
            </tr>";
    echo    "<tr>
                <th>Experience:</th><td>".$person2->experience."</td>
            </tr>";
    echo "</table>";

    echo "<table style='border: 2px solid; float:left;padding:10px;margin:10% 4%; width:370px; height:440px;font-size:18px; '>
            <tr>
                <th>Name:</th><td>".$person3->name."</td>
            </tr>";
    echo    "<tr>
                <th>Last Name:</th><td>".$person3->lastName."</td>
            </tr>";
    echo    "<tr>
                <th>City:</th><td>".$person3->city."</td>
            </tr>";
            echo    "<tr>
                <th>Post:</th><td>".$person3->email."</td>
            </tr>";
    echo    "<tr>
            <th>Phone Number:</th><td>".$person3->phoneNumber."</td>
        </tr>";
    echo    "<tr>
                <th>Age:</th><td>".$person3->age."</td>
            </tr>";
    echo    "<tr>
                <th>Post:</th><td>".$person3->post."</td>
            </tr>";
    echo    "<tr>
                <th>Works from:</th><td>".$person3->time."</td>
            </tr>";
    echo    "<tr>
                <th>Working Days:</th><td>".$person3->day."</td>
            </tr>";
    echo    "<tr>
                <th>Works since:</th><td>".$person3->started."</td>
            </tr>";
    echo    "<tr>
                <th>Experience:</th><td>".$person3->experience."</td>
            </tr>";
    echo "</table>";
?> 
