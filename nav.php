<nav class="navbar navbar-expand-lg navbar-light col mb-3">
    <a class="navbar-brand" href="index.php">K&M</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if(isset($_SESSION['username'])) { ?>
                <li class="nav-item <?php if($page === "report"){ echo 'active';}?>">
                    <a class="nav-link" href="#about">About</a>
                </li>
            <?php } ?>
            <li class="nav-item <?php if($page === "hunts"){ echo 'active';}?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        <div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle text-dark" data-toggle="dropdown"><b><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo 'Login';} ?></b>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right modal-xl pr-3 pl-3 m-0 " style="min-width: 200px;">
                        <?php include 'loginModal.php' ?>
                    </ul>
                </li>
            </ul>
        </div>
</nav>
