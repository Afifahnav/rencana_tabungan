
<?php
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="home.php">Rencana Tabungan</a></p>
</div>

<div class="right-links">

<?php
 $id= $_SESSION['id'] ;
 $query=mysqli_query($con,"SELECT * FROM user WHERE id=$id");

 while ($result =mysqli_fetch_assoc($query)){
    $res_nama = $result['nama'];
    $res_email = $result['email'];
    $res_password = $result['password'];
 }

 

?>

<?php
$server= "localhost";
$user= "root";
$password= "";
$database= "rencana_tabungan";
$conn=mysqli_connect($server,$user,$password,$database);
if(!$conn){
    die("database error:".mysqli_connect_error);
}
?>



           
        </div>

        <div class="main-box.top">
            <a href="tabung.php">tambah tabungan</a>
            <a href="logout.php"><button class="btn">logout</button></a>
        </div>
    </div>

    <main>
            <div class="main">
            <div class="box">
            <p>Selamat datang, <b><?php echo $_SESSION['nama']; ?>!<b><p>
            </div>
            </div>
</div>
<div class="main">
            <div class="box">
            <p>tabungan anda ↧<p>
            </div>
</div>

            <div class="bottom">
            <div class="box">

            <?php
	 
	 $query=mysqli_query($conn,"SELECT * from tabung ORDER BY id DESC");
	 ?>

     <a href="menabung.php">menabung?</a>

<table border="1" cellpadding="2" cellspacing="10">
		<tr>
		<td>NO</td>
			<td>NAMA TABUNGAN</td>
			<td>NOMINAL TABUNGAN</td>
			<td>TANGGAL MENABUNG</td>
            <td>TUJUAN</td>
            <td>TARGET</td>

</tr>

<?php
if(mysqli_num_rows($query)>0){
	$no=1;
	while($data=mysqli_fetch_array($query)){
	
		?>
	<tr>
    <td><?php echo $no ?></td>
		<td><?php echo $data["nama"];?></td>
		<td><?php echo $data["nominaltabungan"];?></td>
		<td><?php echo $data["tanggaltabung"];?></td>
		<td><?php echo $data["tujuan"];?></td>
		<td><?php echo $data["target"];?></td>


    

	<?php $no++;}?>
	<?php }?>
</div>
        </div>
    </main>
</body>
</html>