<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
include("php/config.php");
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //verifying the unique email//

    $verify_query = mysqli_query($con, "SELECT email  FROM user WHERE email='$email'");

    if(mysqli_num_rows($verify_query) !=0) {
        echo"<div class='message'>
        <p>email sudah digunakan,silahkan coba yang lain</p>
        </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>kembali</button";

    }   
    else{
        mysqli_query($con, "INSERT INTO user(nama,email,password)VALUES('$nama','$email','$password')") or die("error");

        echo"<div class='message'>
        <p>registrasi berhasil</p>
        </div> <br>";
       

    }
}else{


?>
            <header>SIGN UP</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email"autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password"autocomplete="off" required>
                </div>
                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>
                <div class="links">
                    sudah punya akun?<a href="index.php">klik disini</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>