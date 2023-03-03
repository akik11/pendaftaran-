<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Assalaam</title>
    <link rel="stylesheet" href="css/formdaftar.css">
    <link rel="shortcut icon" href="img/assalaam.png" type="image/x-icon">
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
<fieldset><br>
    <table>
    <form action="proses-daftar.php" method="POST">
    <tr>
        <p><td width=120>
            <label for="nama">Nama</td><td>:</td> </label>
            <td><input type="text" name="nama_lengkap" placeholder="nama lengkap" /></td>
        </p></tr>
        <tr>
        <p><td>
            <label for="alamat">Alamat</td><td>:</td> </label>
            <td><textarea name="alamat"></textarea></td>
        </p></tr>
        <tr>
        <p><td>
            <label for="jenis_kelamin">Jenis Kelamin</td><td>:</td> </label>
            <td><label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label></td>
        </p></tr>
        <tr>
        <p><td>
            <label for="agama">Agama</td><td>:</td> </label>
            <td><select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select></td>
        </p></tr>
        <tr>
        <p><td>
            <label for="asal_sekolah">Sekolah Asal</td><td>:</td> </label>
            <td><input type="text" name="asal_sekolah" placeholder="nama sekolah" /></td>
        </p></tr>
        <tr>
        <p><td></td><td></td><td>
            <input type="submit" value="Daftar" name="daftar" />
            <input type="reset" name="reset" value="Reset"></td>
        </p></tr>
        
    </form>
</table><br></fieldset>
    </body>
</html>