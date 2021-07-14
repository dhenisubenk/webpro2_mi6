<div class="card">
    <div class="card-header">
        Master Mahasiswa
        <?php if ($level == "Admin"): ?>
            <a href="index.php?page=mahasiswa_tambah" class="btn btn-secondary btn-sm float-end">Tambah Mahasiswa</a>
        <?php endif ?>
    </div>
    <div class="card-body">
        
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>JURUSAN</th>
                    <th>ALAMAT</th>
                    <th>EMAIL</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                    while($r = mysqli_fetch_array($sql)){
                        echo "<tr>
                                    <td>$r[nim]</td>
                                    <td>$r[nama]</td>
                                    <td>$r[kode_jurusan]</td>
                                    <td>$r[alamat]</td>
                                    <td>$r[email]</td>
                                    <td>
                                        <a href='index.php?page=mahasiswa_edit&nim=$r[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                        <a href='index.php?page=mahasiswa_delete&nim=$r[nim]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\">Hapus</a>
                                    </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>