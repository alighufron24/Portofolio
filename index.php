<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="https://smktarunabhakti.net/wp-content/uploads/2020/07/logotbvector-copy.png">

    <title>Login</title>
    <style>
      @font-face {
        font-family: helvetica;
        src: url(Font/Helvetica.ttf);
      }
      body{
        font-family: helvetica;
        background-color: #1B95AF;
        background: cover;
      }
      .tengah{
        width: 100%;
        height: 100%;
        margin: 12% auto;
        display: flex;
      }
      .card-login{
        width:100%;
        height: auto;
        /* background-color: brown; */
        /* text-align: center; */
        /* color: white; */
        margin: auto;
        display: flex;
        
      }
      html{
        overflow: hidden;
      }
    </style>
  </head>
  <body>

    <!-- Login -->
    <div class="col-sm tengah">
      <div class="card-login shadow bg-light">
        <div class="card-body">
          <h1 class="text-center"><b>Login sebagai Admin</b></h1>
          <hr>
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

              <form class="user" action="login_check.php" method="POST">

                <div class="form-group mt-3">
                  <label for="uusername"><b>Username</b></label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Username" required style="border-radius: 10px;">
              </div>
              <br>
              <div class="form-group">
                <label for="ppassword"><b>Password</b></label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required style="border-radius: 10px;">
              </div>
              <br>
              <div class="mb-3 form-check">
                <div class="row">
                    <div class="col-6">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                      <button class="btn form-control btn-p btn-block mb-2 mt-5 shadow" type="submit" name="login" style="border-radius: 50px; width: 200px; color: white; background-color: #1B95AF; width: 100%;"><b>Masuk</b></button>
              
                  </div>
                  <div class="col-sm-6">
                      <a href="main.php" class="btn form-control btn-p btn-block mb-2 mt-5 shadow" type="submit" style="border-radius: 50px; width: 200px; color: white; background-color: #1B95AF; width: 100%;"><b>Masuk sebagai User</b></a>
                  </div>
              </div>

            </form>
            
            </div>
            
          
            <div class="col-2">
            </div>
          </div>
        <br>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d3285099a.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>