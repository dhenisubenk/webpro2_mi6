<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MI<strong>6</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php 
                if ($level == "Admin") {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=user">User</a>
            </li>
            <?php 
                }
                else
                {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
            </li>
            <?php } ?>
        </ul>
        <form class="d-flex">
            <a href="" class="text-white"><?= $user ?></a>
            <a href="logout.php" class="btn btn-sm btn-success">Logout</a>
        </form>
        </div>
    </div>
    </nav>