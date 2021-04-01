<?php
include 'koneksi.php';

if(isset($_POST['editp'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE profil SET nama='$nama', gambar='$gambar' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);

    $message = 'Berhasil mengedit data';

    if ($query) {
        echo "<SCRIPT>
        alert('$message')
        window.location.replace('admin.php');
    </SCRIPT>";
    }else{
        header('location: editprofil.php?status=gagal');
    }
}
?>