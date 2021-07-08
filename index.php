<?php
    require_once 'config/koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Pemrograman Web 2!</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12">
                <?php require_once 'inc/menu.php'?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-4">
              <?php require_once 'inc/sidemenu.php'?>
            </div>
            <div class="col-lg-8 col-xl-8 pt-2">
                <!-- content -->
                <?php
                    $page = @$_GET['page']; //?page=....
                    $dir = "content";
                    if($page != ""){
                        include "$dir/$page.php";
                    }else{
                      include "$dir/home.php";
                    }
                ?>  
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
