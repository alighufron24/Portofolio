<?php
session_start();
include "koneksi.php";

//password diamankan dengan enkripsi kriptografi md5
@$pass = md5($_POST['password']);

//mysqli_escape_string fungsinya untuk mengamankan karakter aneh yang diinputkan user, seperti sql injection

@$username = mysqli_escape_string($connect, $_POST['username']);
@$password = mysqli_escape_string($connect, $pass);

$login = mysqli_query($connect, "SELECT * from tbl_user WHERE username='$username' and password = '$password' ");
$data = mysqli_fetch_array($login);
if($data)
{
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama_user'] = $data['nama_user'];

    header('location:admin.php');
}
else
{
    header('location:index.php');
}

?>
