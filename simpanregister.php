<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$id = $_POST['id'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO tbl_user (id_user, nama_user, username, password) VALUES ('$id', '$nama_user', '$username', MD5('$password'));
";
$query = mysqli_query($connect,$sql);

if($query) {
    header('Location: index.php');
}else{
    header('Location: simpanregister.php?status=gagal');
}
}
?>