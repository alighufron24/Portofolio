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
    $_SESSION['nama_user'] = $data['nama_user'];
    $_SESSION['username'] = $data['username'];

    header('location:admin.php');
}
else
{
    echo "<SCRIPT>
        alert('Login gagal! Periksa kembali username dan password anda')
        window.location.replace('index.php');
    </SCRIPT>";
}

?>