<?php if ($level == "Admin"): ?>

<div class="card">
    <div class="card-header">
        Master User
        <a href="index.php?page=user_tambah" class="btn btn-secondary btn-sm float-end">Tambah User</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($con, "SELECT * FROM user");
                    while($r = mysqli_fetch_array($sql)){
                        echo "<tr>
                                    <td>#</td>
                                    <td>$r[username]</td>
                                    <td>$r[level]</td>
                                    <td>
                                        <a href='' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\">Hapus</a>
                                    </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif ?>