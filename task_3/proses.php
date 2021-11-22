<?php
include "koneksi.php";
session_start();

$nim = $_SESSION["nim"];
$email = $_POST['email'];
$kontak = $_POST['kontak'];


$foto = $_FILES['foto']['name'];
$ekstensi = array('png', 'jpg', 'jpeg');
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($foto, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location : form.php?alert=ekstensi");
}
else {
    if ($ukuran < 1500000) {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);
        $sql = "UPDATE webinar SET email='$email', wa='$kontak', foto='$foto' WHERE nim='$nim'";
        $query = mysqli_query($kon, $sql);
        session_destroy();
        header("location:index.php?alert=sukses");
    }
    else {
        header("location:form.php?alert=ukuran");
    }
}



if (!$query) {
    die("Data Gagal Ditambahkan, Coba Lagi".mysqli_error($kon));
}
?>