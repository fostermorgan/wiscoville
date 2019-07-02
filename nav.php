<nav class="navbar navbar-expand-lg navbar-dark " id="topbar">
    <a class="navbar-brand headquote" href="index.php">K & M Hot Sauce Co.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($page === "report"){ echo 'active';}?>">
                    <a class="nav-link" href="#about">About</a>
                </li>
            <li class="nav-item <?php if($page === "hunts"){ echo 'active';}?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
</nav>

<!-- <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197"> -->
  <!-- <ul class="nav navbar-nav">
    <li class="active headquote"><a href="index.php">K & M Hot Sauce Co.</a></li>
    <li><a href="#">Page 1</a></li>
    <li><a href="#">Page 2</a></li>
    <li><a href="#">Page 3</a></li>
  </ul>
</nav> -->
