<?php
    //require_once 'config/koneksi.php';

    $nim = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $jurusan = filter_var($_POST['jurusan'], FILTER_SANITIZE_STRING);
    $alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (empty($nim) || empty($nama) || empty($jurusan) || empty($alamat) || empty($email)) {
        echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'index.php?page=mahasiswa_tambah';
        </script>";
    }else{
        $simpan = mysqli_query($con, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$alamat','$email')");

        if ($simpan) {
            echo "<script>
                    alert('Data Telah Ditambah');
                    window.location.href = 'index.php?page=mahasiswa';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'index.php?page=mahasiswa_tambah';
            </script>";
        }
    }

?>