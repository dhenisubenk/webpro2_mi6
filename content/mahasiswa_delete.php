<?php
    $nim = $_GET['nim'];
    $sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");

    if ($sql) {
        echo "<script>
                alert('Data Telah Dihapus');
                window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }else{
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
?>