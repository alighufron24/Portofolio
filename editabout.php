<?php
include 'koneksi.php';

if(isset($_POST['edita'])) {
    $id = $_POST['id'];
    $about = $_POST['about'];

    $sql = "UPDATE about SET about='$about' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);

    $message = 'Berhasi mengedit data';

    if ($query) {
        echo "<SCRIPT>
        alert('$message')
        window.location.replace('admin.php');
    </SCRIPT>";
    }else{
    header('Location: editabout.php?status=gagal');
    }
}
?>