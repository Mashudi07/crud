<?php

include_once("config.php");

// cek data update
if(isset($_POST['update']))
{   
    $nip = $_POST['nip'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    // update data
    $result = mysqli_query($mysqli, "UPDATE data SET nip='$nip', nama='$nama',alamat='$alamat',telepon='$telepon' WHERE nip=$nip");

    // menampilkan data ke home
    header("Location: index.php");
}
?>
<?php
// tampilan data
$nip = $_GET['nip'];

$result = mysqli_query($mysqli, "SELECT * FROM data WHERE nip=$nip");

while($user = mysqli_fetch_array($result))
{
    $nip = $user['nip'];
	$nama = $user['nama'];
    $alamat = $user['alamat'];
    $telepon = $user['telepon'];
}
?>
<html>
<head>  
    <title>Ubah Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="ubah.php">
        <table border="0">
            <tr> 
                <td>NIP</td>
                <td><input type="text" name="nip" value=<?php echo $nip;?>></td>
            </tr>
			<tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text" name="telepon" value=<?php echo $telepon;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>