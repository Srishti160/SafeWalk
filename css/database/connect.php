<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname ="safewalk_db";

$con = mysqli_connect($server, $username, $password, $dbname);

$ititle = $_POST["ititle"];
$icname = $_POST["icname"];
$iloc = $_POST["iloc"];
$idur = $_POST["idur"];
$ideadline = $_POST["ideadline"];
$idesp = $_POST["idesp"];
$ireq = $_POST["ireq"];
$iben = $_POST["iben"];
$icontact = $_POST["icontact"];

// echo"$ititle. $icname. $iloc. $idur. $ideadline. $idesp. $ireq. $iben. $icontact";

$query = "INSERT INTO `internships` (`int_tit`, `int_com_name`, `int_loc`, `int_dur`, `int_deadine`, `int_desp`, `int_req`, `int_ben`, `int_contact`) VALUES ('$ititle', '$icname', '$iloc', '$idur', '$ideadline', '$idesp', '$ireq', '$iben', '$icontact')";

mysqli_query($con, $query);
header("");

?>
?>