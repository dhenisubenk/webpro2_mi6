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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                          </li>
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-footer">
                      Card footer
                    </div>
                  </div>
            </div>
            <div class="col-lg-8 pt-2">
                <div class="card">
                    <div class="card-header">
                        Form Hitung Rawat Inap
                    </div>
                    <div class="card-body">
                        <?php
                            $total = 0; 
                            function cekHargaKamar($kode)
                            {
                                $harga = 0;
                                switch ($kode) 
                                {
                                    case 'Ekonomi':
                                        $harga = 70000;
                                        break;
                                    case 'VIP':
                                        $harga = 100000;
                                        break;
                                    case 'VVIP':
                                        $harga = 150000;
                                        break;
                                }
                                return $harga;
                            }

                            if(isset($_POST['hitung']))
                            {
                                $no_pasien = $_POST['no_pasien'];
                                $nama_pasien = $_POST['nama_pasien'];
                                $kode_kamar = $_POST['kode_kamar'];
                                $lama_rawat = $_POST['lama_rawat'];

                                $biayakamar = cekHargaKamar($kode_kamar);
                                $total = $biayakamar * $lama_rawat;
                                //var_dump($total);
                            }

                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">No Pasien</label>
                                <input type="text" name="no_pasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Kamar</label>
                                <select name="kode_kamar" class="form-control">
                                    <option>Ekonomi</option>
                                    <option>VIP</option>
                                    <option>VVIP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Lama Rawat Inap</label>
                                <input type="number" name="lama_rawat" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                            </div>
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" value="<?= $total; ?>" class="form-control" readonly>
                            </div>
                        </form>
                    </div>
                </div>
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
