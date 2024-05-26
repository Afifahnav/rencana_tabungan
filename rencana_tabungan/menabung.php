<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menabung</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="nav">
        <div class="logo">
        <p><a href="home.php">Rencana Tabungan</a></p>
</div>


<div class="container">
        <div class="box form-box">
<header>menabung</header>
            <form action="" method="post">
<div class="field input">
                        <div class="field input">
                    <label for="nominaltabungan">nominal tabungan</label>
                    <input type="text" name="nominaltabungan" id="nominaltabungan" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="tanggaltabung">tanggal menabung</label>
                    <input type="date" name="tanggaltabung" id="tanggaltabung" autocomplete="off" required>
                </div>
                <input type="submit" value="perbarui" class="btn" onclick="return confirm('Yes/No')">

                <a href="home.php">kembali</a>
</body>
</html>