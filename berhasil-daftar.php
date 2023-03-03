<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat! Berhasil Mendaftar</title>
</head>
<body><br><br><br><br><br><br><br><br>
    <style>
        * {
    padding: 0;
    margin: 0;
}
body {
    font-family: helvetica;
    background: rgb(233, 233, 233);
}
.wadah {
    background: white;
    padding: 20px;
    width: 30%;
    border-radius: 5px;
    box-shadow: 0px 3px 10px gray;
}
a {
    color: white;
    background: rgb(56, 160, 56);
    border: none;
    border-radius: 3px;
    text-decoration: none;
    padding: 6px 40px;
}
a:hover {
    background: green;
    transition: 0.3s;
}
h1 {
    color: navy;
}
p {
    font-size: 18px;
}
    </style>

<center>
<div class="wadah"><br>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<h1>SELAMAT</h1><br>";
                echo "<p>Pendaftaran siswa baru berhasil!<p>";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?><br><br>
<a href="home.php">OK</a><br><br>
</div>
</center>

</body>
</html>