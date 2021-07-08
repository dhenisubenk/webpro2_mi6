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
        $update = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', kode_jurusan = '$jurusan', alamat = '$alamat', email = '$email' WHERE nim = '$nim'");

        if ($update) {
            echo "<script>
                    alert('Data Telah Diubah');
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