<?php
include 'koneksi.php';
session_start();

  //mengatasi jika user langsung masuk menggunakan link, tanpa login
  if(empty($_SESSION['id_user']) or empty($_SESSION['username']))
  {
    echo "<script>
        alert('Maaf, untuk mengakses halaman ini, Silahkan Login terlebih dahulu!');
        document.location='index.php';
        </script>";
  }

    if(!isset($_SESSION['username'])) {
        include("index.php");
    }
    else {
    

?>

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

    <title>Portofolio</title>
    
  </head>
  <body>

    <?php

        $sql = "SELECT * FROM profil";
        $query = mysqli_query($connect,$sql);

        while($profil = mysqli_fetch_array($query)){


      ?>
    
    <div id="home"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top p-3" style="background-color: #1B95AF;">
      <div class="container-sm">
        <a href="" class="nav-link  active me-4 fs-5 fw-bold" style="color: black;"><?php echo $profil['nama'] ?></a>
    <?php 
      }
    ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse-sm navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link  active me-4 fw-boldder" aria-current="page" href="#home"><b>HOME</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#about"><b>ABOUT</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#gallery"><b>GALLERY</b></a>
            <a class="nav-link  active me-5 fw-boldder" href="#contact"><b>CONTACT</b></a>
            <a class="nav-link  active ms-5  fw-boldder" href="logout_check.php"><b>LOGOUT</b></a>
        <?php 
          }
        ?>
          </div>
        </div>
      </div>
    </nav>


    
    <!-- Jumbotron -->
    <div class="jumbotron-sm jumbotron-fluid mb-5" style="height: 600px; background-color: #1B95AF; background-size: cover; background-position-y: -150px;">
      <div class="container-sm text-light text-center">

      <?php

        $sql = "SELECT * FROM profil";
        $query = mysqli_query($connect,$sql);

        while($profil = mysqli_fetch_array($query)){


      ?>
      
        <img class="img-thumbnail rounded-circle shadow" src="<?php echo $profil['gambar'] ?>" alt="Ali Ghufron" width="250px" height="250px" style="margin-top: 220px;">
        <p class="lead text-center mt-2 fw-bold fs-2"><?php echo $profil['nama'] ?></p>

       <?php
        echo "<a class='btn btn-outline-light me-1' name='edita' href='formprofil.php?id=".$profil['id']."'>Edit Profil</a> ";
       ?>

        
      </div>
    </div>
    <?php } ?>

    <!-- Waves -->
    <svg id="about" style="margin-top: -48px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1B95AF" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>


    <?php

        $sql = "SELECT * FROM about";
        $query = mysqli_query($connect,$sql);

        while($about = mysqli_fetch_array($query)){


      ?>
    <!-- About -->
    <div class="container-sm" style="margin-top: px;">
      <h1 class="text-center fw-bold mb-5 display-5">About</h1>
      <div class="col-sm justify-content text-center fs-5">
        <p class="col-sm"><?php echo $about['about'] ?></p>
        <?php
        echo "<a class='btn btn-outline-primary me-1' name='edita' href='formabout.php?id=".$about['id']."'>Edit About</a> ";

        ?>
      </div>
    </div>

    <?php } ?>
    
    

    <!-- Waves 2 -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1B95AF" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>



    <!-- Gallery -->
    <span id="gallery"></span>
   <section class="pb-5">
    <h1 class="text-center fw-bold mb-5 display-5 text-light">Gallery</h1>
     <div class="container-sm ">
       <div class="row text-center">
       <button class="btn btn-outline-light mb-4" style="width: 100%;" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambahkan Data Baru [+]</button>

       <div class="card-group justify-content-evenly">
       <?php               
            $id = mysqli_query($connect,'SELECT * FROM gallery ORDER BY gallery.id');
            while ($isi = mysqli_fetch_array($id)){
                $idp = $isi['id'];
        ?>
         <div class="col-md-4 mb-5">
          <div class="card shadow-sm" style="width: 98%;">
            <img src="<?php echo $isi['gambar'] ?>" style="height:230px;" class="card-img-top" alt="">
            <div class="card-body" style="height: 200px;">
              <h5 class="card-title fw-bold text-center"><?php echo $isi['judul'] ?></h5>
              <p class="card-text"><?php echo $isi['isi'] ?></p>
            </div>
            <div class="card-footer bg-light">
              <?php
              echo "<a class='btn btn-outline-warning me-1' style='width:48%;' onclick='add()'' name='simpan' href='formgallery.php?id=".$isi['id']."'>Edit</a> ";
              echo "<a class='btn btn-outline-danger ms-1' style='width:48%;' href='galleryhapus.php?id=".$isi['id']."'>Hapus</a>";
              ?>
            </div>
          </div>
         </div>
        <?php 
            } 
        ?>
       </div>
       </div>
     </div>
   </section>

   


   <!-- Waves 3 -->
   <svg style="margin-top: -48px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1B95AF" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"  ></path></svg>

   <!-- Contact -->
   <br id="contact"><br><br><br>
   <div class="container-fluid">
   <div class="card" style="background-color: #1B95AF;">
       <h1 class="card-title mt-3 text-light text-center fw-bold">CONTACTS</h1>
       <div class="card-body" style="height: 400px; overflow-y: scroll;">

       <?php               
            $id = mysqli_query($connect,'SELECT * FROM contact ORDER BY contact.id');
            while ($con = mysqli_fetch_array($id)){
                $idg = $con['id'];
        ?>

       <div class="container-fluid">
        <div class="card shadow mb-3 mt-3">
            <div class="card-body p-4">
                <p class="card-title">
                    <b class="fs-5"><?php echo $con['nama'] ?></b> <br>
                    <small class="secondary"><?php echo $con['email'] ?></small><br>
                    <hr style="width: 300px;">
                </p>
                <p class="card-text">"<?php echo $con['komentar'] ?>"</p>
                <?php
                echo "<a class='btn btn-outline-danger ms-1' style='width:100%;' href='contacthapus.php?id=".$con['id']."'>Hapus</a>";
                ?>
            </div>
         </div>
        </div>
       


       <?php 
        } 
        ?>
    </div>
   </div>
   </div>



   <!-- Footer -->
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1B95AF" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
   <footer class="footer position-relative text-center pb-3" style="background-color: #1B95AF;">
     <div class="text-center fw-bolder text-light">
       <h4>Created by © Ali Ghufron</h4>
     </div>
   </footer>


   <!-- Modal Input Gallery -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header text-light" style="background-color: #1B95AF;">
            <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Gallery</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="gallery.php" method="POST">

            <input type="hidden" name="id">
                
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" aria-describedby="emailHelp">
            </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary" name="simpan">Tambahkan</button>
            </div>
        </form>
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