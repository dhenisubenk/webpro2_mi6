<?php
    $nim = $_GET['nim'];
    $sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $r = mysqli_fetch_array($sql);
    //var_dump($r);
?>

<div class="card">
    <div class="card-header">
        Edit Mahasiswa
    </div>
    <div class="card-body">
        <form action="index.php?page=mahasiswa_update" method="POST">
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $r['nim']?>" readonly="" required>
            </div>
            <div class="form-group">
                <label for="">Nama</label> 
                <input type="text" name="nama" class="form-control" value="<?= $r['nama']?>" required>
            </div>
            <div class="form-group">
                <label for="">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="J001">Teknik Informatika</option>
                    <option value="J002">Sistem Informasi</option>
                    <option value="J003">Manajemen Informatika</option>
                    <option value="J004">Komputerisasi Akuntansi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']?>" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $r['email']?>" required>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=mahasiswa" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>