<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM data ORDER BY nip ASC");
?>

<html>
<head>    
    <title>Mendata</title>
</head>

<body>
<a href="tambah.php">Tambah Data</a><br/><br/>

    <table width='80%' border=1>

    <tr>
       <th>NIP</th> <th>Nama</th> <th>Alamat</th> <th>Telepon</th> <th>Update</th>
    </tr>
    <?php  
    while($user = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user['nip']."</td>";
        echo "<td>".$user['nama']."</td>";
        echo "<td>".$user['alamat']."</td>";
        echo "<td>".$user['telepon']."</td>";    
        echo "<td><a href='ubah.php?nip=$user[nip]'>Edit</a> | <a href='hapus.php?nip=$user[nip]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>