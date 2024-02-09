<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand text-dark" href="index.php">Arasy</a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active text-dark" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <?= $_SESSION['nama']; ?>
                    </a>

                    <div class="user-menu dropdown-menu">


                        <a class="nav-link" href="../proses-logout.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
</header>