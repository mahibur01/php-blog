<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="./"><h2>Hello Blog<em>.</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php while ($menu = mysqli_fetch_assoc($menudata)) {?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $menu['menu_link'] ?>">
              <?php echo $menu['menu_name']; ?>
              <!-- <span class="sr-only">active current</span> -->
            </a>
          </li>
          <?php }?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</header>
