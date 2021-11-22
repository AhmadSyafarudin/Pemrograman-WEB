<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Form Pendaftaran Peserta Webinar</h1>
    </header>

    <div class="daftar">
        <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=="sukses"){
                    ?>
                    <h4 style="background-color: teal; color: white; text-align :center; padding : 5px; width : 105%;">Pendaftaran Anda Telah Berhasil <br> Nantikan Info Selanjutnya via Email dan WA</h4>						
                    <?php
                }
            }
        ?>
        
        <form action="user.php" method="GET">
            <label for="username"><strong>Nama</strong></label>
            <input type="text" id="username" name="nama" placeholder="Masukkan Nama Anda" required="required">
            <label for="nim"><strong>Nomor Induk Mahasiswa</strong></label>
            <input type="number" id="nim" name="nim" placeholder="Masukkan NIM Anda" required="required">
            <label for="from"><strong>Instansi</strong></label>
            <input type="text" id="from" name="instansi" placeholder="Asal Instansi" required="required"> 
            <input type="submit" value="Lanjut >>">
        </form>
    </div>
    
    <footer>
        <p><i>Pemrograman Web (RB) Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>

