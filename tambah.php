<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Kembali ke Halaman Awal</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NIP</td>
                <td><input type="text" name="nip"></td>
            </tr><tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Mengecek submit, kemudian input data
    if(isset($_POST['Submit'])) {
        $nip = $_POST['nip'];
		$nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        // 
        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO data (nip,nama,alamat,telepon) VALUES('$nip', '$nama','$alamat','$telepon')");

        // Pesan ketika sukses input
        echo "DATA SUKSES DITAMBAHKAN. <a href='index.php'>LIHAT DAFTAR DATA</a>";
    }
    ?>
</body>
</html>