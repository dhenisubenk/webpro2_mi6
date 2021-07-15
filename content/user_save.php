<?php
    //require_once 'config/koneksi.php';
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING); 
    $level = filter_var($_POST['level'], FILTER_SANITIZE_STRING);
    $pass = password_hash($password, PASSWORD_DEFAULT);

    //file
    $nama_file = $_FILES['foto']['name'];   //GAMBAR.PNG
    //$tipe_file = $_FILES['foto']['type'];
    $temp_file = $_FILES['foto']['tmp_name'];
    $size_file = $_FILES['foto']['size'];

    $tipe_file = getTipeFile($nama_file);
    $newfile = rand().".".$tipe_file;

    if ($tipe_file != "png" && $tipe_file != "jpg" && $tipe_file != "jpeg") 
    {
        echo "<script>
                    alert('File Tidak Support');
                    window.location.href = 'index.php?page=user_tambah';
        </script>";
    }
    else if($size_file >= 2000000)
    {
        echo "<script>
                    alert('File Tidak Boleh > 2MB');
                    window.location.href = 'index.php?page=user_tambah';
        </script>";
    }
    else
    {
        if (empty($username) || empty($password) || empty($level)) {
            echo "<script>
                        alert('Data Kosong');
                        window.location.href = 'index.php?page=user_tambah';
            </script>";
        }else{
            $simpan = mysqli_query($con, "INSERT INTO user (username, password, level, foto) VALUES ('$username','$pass','$level','$newfile')");
    
            if ($simpan) {
                move_uploaded_file($temp_file, "img/user/".$newfile);
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
    }
?>