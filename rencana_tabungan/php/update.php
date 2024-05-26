
<?php
include("php/config.php");
$nama=$_POST['nama'];
$nominaltabungan = $_POST['nominaltabungan'];
    $tanggaltabung = $_POST['tanggaltabung'];


mysqli_query($conn," UPDATE tabung SET nominaltabungan='$nominaltabungan',tanggaltabung='$tanggaltabung' where nama='$nama'");

header ("location:home.php");
?>