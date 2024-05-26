<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php
            include("php/config.php");
            if(isset($_POST['submit'])){
                $email= mysqli_real_escape_string($con,$_POST['email']);
                $password= mysqli_real_escape_string($con,$_POST['password']);

                $result=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'")or die("select error");
                $row=mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['id'] = $row['id'];


                    


                }else{
                    echo"<div class='message'>
                    <p>password atau email salah</p>
                    </div> <br>";
                    echo "<a href='index.php'><button class='btn'>kembali</button></a>";
            
                } 
                  if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                    exit();
                    
                }
                }else{
            
            ?>
            <header>LOGIN</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>
                <div class="links">
                    tidak punya akun?silahkan klik <a href="register.php">disini</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>