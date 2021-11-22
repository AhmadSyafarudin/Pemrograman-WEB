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
                if($_GET['alert']=='ekstensi'){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ekstensi File Tidak Didukung</h3>			
                    <?php
                }elseif($_GET['alert']=="ukuran"){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ukuran File Terlalu Besar</h3>					
                    <?php
                }
            }
        ?>

        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <label for="mail"><strong>Email</strong></label>
            <input type="email" id="mail" name="email" placeholder="Email" required="required">
            <label for="contact"><strong>Nomor Whatsapp</strong></label>
            <input type="number" id="contact" name="kontak" placeholder="Masukkan Nomor WA Aktif" required="required">
            <label for="foto"><strong>Upload Bukti Share Info Webinar</strong></label>
            <p style="font-size: 11pt; color: teal;">*format .jpg / .png / .jpeg (maks. 1mb)</p>
            <input type="file" name="foto" id="foto" required="required"> 
            <input type="submit" value="Daftar">
        </form>
    </div>

    <footer>
        <p><i>Pemrograman Web (RB) Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>

