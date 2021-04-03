<?php
include 'koneksi.php';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="css/body.css">

    <title>MPDF</title>
    
  </head>
  <body>

  <div class="container-fluid">
  <div class="card" style="background-color: #1B95AF;">
      <h1 class="card-title mt-3 text-light text-center fw-bold">CONTACTS</h1>
      <div class="card-body" style="height: 400px; overflow-y: scroll;">';

                  
           $id = mysqli_query($connect,"SELECT * FROM contact ORDER BY contact.id");
           while ($con = mysqli_fetch_array($id)){
               $idg = $con["id"];
       

       $html .= '
      <div class="container-fluid">
       <div class="card shadow mb-3 mt-3">
           <div class="card-body p-4">
               <p class="card-title">
                   <b class="fs-5">'.$con['nama'].'</b> <br>
                   <small class="secondary">'.$con['email'].'</small><br>
                   <hr style="width: 100%;">
               </p>
               <p class="card-text">"'.$con['komentar'].'"</p>
           </div>
        </div>
       </div>';
      


      
       } 

       $html .= '
   </div>
  </div>
  </div>

        




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
';


$mpdf->WriteHTML($html);
$mpdf->Output();