<?php

include_once("config.php");

$nip = $_GET['nip'];
$result = mysqli_query($mysqli, "DELETE FROM data WHERE nip=$nip");
header("Location:index.php");
?>