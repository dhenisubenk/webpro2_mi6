<?php
    //require_once 'config/koneksi.php';

    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING); 
    $level = filter_var($_POST['level'], FILTER_SANITIZE_STRING);
    $pass = password_hash($password, PASSWORD_DEFAULT);

    // md5 -> enkrip -> dekrip
    // hash 

    if (empty($username) || empty($password) || empty($level)) {
        echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'index.php?page=user_tambah';
        </script>";
    }else{
        $simpan = mysqli_query($con, "INSERT INTO user (username, password, level) VALUES ('$username','$pass','$level')");

        if ($simpan) {
            echo "<script>
                    alert('Data Telah Ditambah');
                    window.location.href = 'index.php?page=user';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'index.php?page=user_tambah';
            </script>";
        }
    }

?>