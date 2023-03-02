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
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <table border="1" cellpadding="10">
        <form action="proses_daftar.php" method="post">
        <label for="nama">NAMA</label>
        <input type="text" name="nama_lengkap" placeholder="nama_lengkap" id="nama"/>
        <br>
        <br>

        <label for="alamat">ALAMAT</label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <br>
        <br>

        <label for="jenis_kelamin">JENIS KELAMIN</label>
        <Label><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</Label>
        <Label><input type="radio" name="jenis_kelamin" value="perempuan">PEREMPUAN</Label>

        <label for="agama">AGAMA</label>
        <select name="agama">
            <option value="islam">ISLAM</option>
            <option value="kristen">KRISTEN</option>
            <option value="hindu">HINDU</option>
            <option value="budha">BUDHA</option>
            <option value="atheis">ATHEIS</option>
        </select>
        <br>
        <br>

        <label for="asal_sekolah">SEKOLAH ASAL</label>
        <input type="text" name ="asal_sekolah" placeholder ="nama sekolah" />

        <br>
        <br>

        <input type="submit" value = "daftar" name = "daftar">
        <input type="reset" name = "reset" value = "Reset">

</form>
        

    </table>
</body>
</html>