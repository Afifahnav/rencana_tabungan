<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah tabungan</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">logo</a></p>
        </div>

        <div class="right-links">
            <a href="home.php">kembali</a>
            <a href="logout.php"><button class="btn">logout</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">

        <?php
include("php/config.php");
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $nominaltabungan = $_POST['nominaltabungan'];
    $tanggaltabung = $_POST['tanggaltabung'];
    $tujuan = $_POST['tujuan'];
    $target = $_POST['target'];


        mysqli_query($con, "INSERT INTO tabung(nama,password,nominaltabungan,tanggaltabung,tujuan,target)VALUES('$nama','$password','$nominaltabungan','$tanggaltabung','$tujuan','$target')") or die("error");

        echo"<div class='message'>
        <p>registrasi berhasil</p>
        </div> <br>";
        echo "<a href='home.php'><button class='btn'>kembali</button";

    }
?>
            <header>tambah tabungan</header>
            <form action="" method="post">
            <div class="field input">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="nominaltabungan">nominal tabungan</label>
                    <input type="text" name="nominaltabungan" id="nominaltabungan" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="tanggaltabung">tanggal menabung</label>
                    <input type="date" name="tanggaltabung" id="tanggaltabung" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="tujuan">tujuan</label>
                    <input type="text" name="tujuan" id="tujuan" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="foto">foto</label>
                    <input type="image" name="foto" id="foto" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="target">target</label>
                    <input type="date" name="target" id="target" autocomplete="off" required>
                </div>
                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="tambah" required>
                </div>
            
            </form>
        </div>
    </div>
</body>
</html>