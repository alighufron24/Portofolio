<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    header('Location: admin.php');
}

$idg = $_GET['id'];

$sql = "DELETE FROM contact WHERE id='$idg'";
$query = mysqli_query($connect,$sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>