<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
</head>
<body>
<div class="content"> 
    <header>    <!-- Section header  -->
        <h1>PRESENSI ONLINE KARYAWAN</h1>
    </header>
    <hr />
    <menu>      <!-- Section menu  -->
        <button type="button">Presensi</button>
        <button type="button"><a href="cekpresensi.html">Cek Presensi</a></button>
        <button type="button"><a href="cekidentitas.html">cek Identitas</a></button>
    </menu>
    <main>      <!-- Section main -->
        <p>Tolong Inputkan Data Dengan Benar !</p>
        <form method="post" action="input_aksi.php">
        <table>
            <tr>
                <td>id karyawan</td>
                <td><input placeholder="Masukkan Id karyawan Anda" type="text" name="id_karyawan"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input placeholder="Masukkan Password Anda" type="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="presensi_kehadiran" id="presensi_kehadiran" name="presensi_kehadiran">Presensi Kehadiran</label></td>
                <td>
                    <input type="radio" name="kehadiran" value="hadir">Hadir
                    <input type="radio" name="kehadiran" value="izin">izin
                    <input type="radio" name="kehadiran" value="sakit">Sakit
                </td>
            </tr>
            <tr>
                <td><input type="Submit" value="Submit"></td>
            </tr>
        </table>
    </main>
    <hr />
    <footer>    <!-- Section Footeer  -->
        <p>Create by Team9</p>
    </footer>
</div>
</body>
</html>