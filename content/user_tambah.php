<div class="card">
    <div class="card-header">
        <strong>Tambah User</strong>
    </div>
    <div class="card-body">
        <form action="index.php?page=user_save" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Level</label>
                <select name="level" class="form-control">
                    <option>Admin</option>
                    <option>User</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php?page=user" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>