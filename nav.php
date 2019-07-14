<!-- <div class="jumbotron"></div>
<div id="main_menu">
  <div class="logo">
    <a href=""><img class="mx-auto d-block img-fluid pt-3" src="logocenter.png" alt="Logo"></a>
  </div>
  <div class="inner_main_menu">
    <ul class="">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ivory" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="thesauce.php">The Sauce</a>
          <a class="dropdown-item" href="creators.php">The Creators</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

    </ul>
  </div>
</div> -->

<div class="sticky-top">
  <div class="jumbotron shadow-lg"></div>
  <div class="logo d-none d-md-block">
    <a href="index.php"><img class="mx-auto d-block img-fluid pt-3" src="logocenter.png" alt="Logo"></a>
  </div>
  <div class="logosmall d-block d-md-none">
    <a href="index.php"><img class="mx-auto d-block img-fluid pt-3" src="logocenter.png" alt="Logo"></a>
  </div>
  <nav class="navbar navbar-expand sticky-top">
    <div class="container pt-3">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse inner_main_menu p-0" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-2 <?php if($page == 'home'){echo 'active';}?>"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item dropdown <?php if($page == 'creators' || $page == 'sauce'){echo 'active';}?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="thesauce.php">The Sauce</a>
              <a class="dropdown-item" href="creators.php">The Creators</a>
              <a class="dropdown-item" href="news_reviews.php">News/Reviews</a>

            </div>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2 <?php if($page == 'shop'){echo 'active';}?>"><a class="nav-link" href="shop.php">Shop</a></li>

          <li class="nav-item <?php if($page == 'contact'){echo 'active';}?>"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
