<?php include("oop2.php"); ?>

<body style="background-color: #DADADA">
<?php 

$kompania = new Company;
echo "<h2 style='margin-left:45%;margin-top:3%'>Kompania e Re</h2>";
echo "<table style='border:2px solid;padding:6px;width:500px;height:530px;margin:2% auto'>
        <tr>
            <th>Emri:</th><td>";
            $kompania->set_Name("Your Home");
            $kompania->get_Name();
echo "</td></tr>";
echo "
        <tr>
            <th>Qyteti:</th><td>";
            $kompania->set_City("Prishtine");
            $kompania->get_City();
echo "</td></tr>";
echo "
        <tr>
            <th>Adresa:</th><td>";
            $kompania->set_Address("Zhuje Selmani,36");
            $kompania->get_Address();
echo "</td></tr>";
echo "
        <tr>
            <th>Numri i punetoreve:</th><td>";
            $kompania->set_Employees("85");
            $kompania->get_Employees();
echo "</td></tr>";
echo "
        <tr>
            <th>Numri i telefonit:</th><td>";
            $kompania->set_Phone("049-100-200");
            $kompania->get_Phone();
echo "</td></tr>";
echo "
        <tr>
            <th>Viti kur eshte hapur:</th><td>";
            $kompania->set_Year("2015");
            $kompania->get_Year();
echo "</td></tr>";
echo "
        <tr>
            <th>Orari i punes:</th><td>";
            $kompania->set_Time("08:00-18:00");
            $kompania->get_Time();
echo "</td></tr>";
echo "
        <tr>
            <th>Ditet e punes:</th><td>";
            $kompania->set_Days("Monday-Saturday");
            $kompania->get_Days();
echo "</td></tr>";
echo "
        <tr>
            <th>Pronari:</th><td>";
            $kompania->set_Pronari("James Lopez");
            $kompania->get_Pronari();
echo "</td></tr></table>";

$kompaniaEVjeter = new oldCompany;
echo "<h2 style='margin-left:45%;margin-top:7%'>Kompania e Vjeter</h2>";
echo "<table style='border:2px solid;padding:6px;width:500px;height:530px;margin:2% auto'>
        <tr>
            <th>Emri:</th><td>";
            $kompania->set_Name("Your Home");
            $kompania->get_Name();
echo "</td></tr>";
echo "
        <tr>
            <th>Qyteti:</th><td>";
            $kompania->set_City("Peje");
            $kompania->get_City();
echo "</td></tr>";
echo "
        <tr>
            <th>Adresa:</th><td>";
            $kompania->set_Address("Pandeli Sotiri,31");
            $kompania->get_Address();
echo "</td></tr>";
echo "
        <tr>
            <th>Numri i punetoreve:</th><td>";
            $kompania->set_Employees("50");
            $kompania->get_Employees();
echo "</td></tr>";
echo "
        <tr>
            <th>Numri i telefonit:</th><td>";
            $kompania->set_Phone("049-321-123");
            $kompania->get_Phone();
echo "</td></tr>";
echo "
        <tr>
            <th>Viti kur eshte themeluar:</th><td>";
            $kompania->set_Year("1995");
            $kompania->get_Year();
echo "</td></tr>";
echo "
        <tr>
            <th>Viti kur eshte mbyllur:</th><td>";
            $kompaniaEVjeter->set_vitiMbylljes("2010");
            $kompaniaEVjeter->get_vitiMbylljes();
echo "</td></tr>";
echo "
        <tr>
            <th>Orari i punes:</th><td>";
            $kompania->set_Time("06:00-16:00");
            $kompania->get_Time();
echo "</td></tr>";
echo "
        <tr>
            <th>Ditet e punes:</th><td>";
            $kompania->set_Days("Monday-Friday");
            $kompania->get_Days();
echo "</td></tr>";
echo "
        <tr>
            <th>Pronari:</th><td>";
            $kompania->set_Pronari("Emma Bond");
            $kompania->get_Pronari();
echo "</td></tr></table>";
?>
