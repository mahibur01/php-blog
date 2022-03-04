<?php include "admin/class/function.php";

$obj = new adminBlog();
$getcat = $obj->display_category();
$menudata = $obj->display_menu();

?>



<?php include_once "includes/head.php";?>

  <body>

    <!-- ***** Preloader Start ***** -->
 <?php include_once "includes/preloader.php";?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once "includes/header.php";?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once "includes/banner.php";?>
    <!-- Banner Ends Here -->

    <?php include_once "includes/cta.php";?>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <?php include_once "includes/blogpost.php";?>
          <?php include_once "includes/sidebar.php";?>
        </div>
      </div>
    </section>


  <?php include_once "includes/footer.php";?>

  <?php include_once "includes/script.php";?>

</body>
