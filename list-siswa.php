<?php include("koneksi.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3> Siswa baru yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>

    <table border="1" cellpadding="10" >
        <thead>

        <tr>
            <th> NIS</th>
            <th> Nama Lengkap</th>
            <th> Alamat </th>
            <th> Jenis Kelamin</th>
            <th> Agama</th>
            <th> Asal Sekolah</th>
            <th> Tindakan</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";


            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama_lengkap']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['asal_sekolah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=" .$siswa['id']."'>EDIT</a> | ";
            echo "<a href= 'hapus.php?id=" .$siswa['id']."'>HAPUS</a>";
            echo "</td>";

            echo "</tr>";

        }
        ?>

        </tbody>

    </table>
    <p>  Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>