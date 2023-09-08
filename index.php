<?php
if (isset($_POST['tampil'])) {
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];

    $message1 = 'Nama: ' . $nama . '\nTempat, Tanggal Lahir :' . $ttl . '\nAlamat :' . $alamat . '\nJenis Kelamin' . $gender . '\nAgama :' . $agama . '\nHobi :' . $hobi . ',';
    echo "<script>
    alert('$message1');
    </script>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Data Diri</title>
</head>

<body>



    <div class="container">
        <h1 class="text-center">Form Data Diri</h1>
        <form action="" method="post">
            <table border="0">
                <tbody>
                    <tr>
                        <td><label for="nama">Nama Lengkap</label></td>
                        <td>:</td>
                        <td><input type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="ttl">Tempat Tanggal Lahir</label></td>
                        <td>:</td>
                        <td><textarea name="ttl" id="ttl" cols="25" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td>:</td>
                        <td><textarea name="alamat" id="alamat" cols="25" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Jenis Kelamin</label></td>
                        <td>:</td>

                        <td>
                            <input type="radio" id="lakilaki" name="gender" value="Laki-laki">
                            <label for="lakilaki">Laki-Laki</label>
                            <input type="radio" id="perempuan" name="gender" value="Perempuan">
                            <label for="perempuan">Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Agama</label></td>
                        <td>:</td>
                        <td><select name="agama" id="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Hobi</label></td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" id="bacabuku" name="hobi" value="Baca Buku">
                            <label for="bacabuku">Baca Buku</label>
                            <input type="checkbox" id="olahraga" name="hobi" value="Olah Raga">
                            <label for="olahraga">Olah Raga</label>
                            <input type="checkbox" id="maingame" name="hobi" value="Main Game">
                            <label for="maingame">Main Game</label>
                            <input type="checkbox" id="hiking" name="hobi" value="Hiking">
                            <label for="hiking">Hiking</label>
                        </td>
                        </td>
                    </tr>
                </tbody>

            </table>
            <button type="submit" name="tampil">Tampilkan</button>
        </form>
    </div>



</body>

</html>