<?php include "admin/class/function.php";
$obj = new adminBlog();
$getcat = $obj->display_category();
$menudata = $obj->display_menu();

if (isset($_GET['view'])) {
    if ($_GET['view'] = 'postview') {
        $id = $_GET['id'];
        $single_post = $obj->get_post_info($id);
    }
}

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
   <div type=""hidden>
   <?php include_once "includes/banner.php";?>
   </div>

   <!-- Banner Ends Here -->
   <?php include_once "includes/cta.php";?>
   <section class="blog-posts">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <div class="blog-post">
                  <div class="blog-thumb">
                     <img src="upload/<?php echo $single_post['post_img']; ?>" alt="">
                  </div>
                  <div class="down-content">
                     <span><?php echo $single_post['cat_name']; ?></span>
                     <h4><?php echo $single_post['post_title']; ?></h4>
                     </a>
                     <ul class="post-info">
                        <li><a href="#"><?php echo $single_post['post_author']; ?></a></li>
                        <li><a href="#"><?php echo $single_post['post_date']; ?></a></li>
                        <li><a href="#"><?php echo $single_post['post_comment_count']; ?></a></li>
                     </ul>
                     <p><?php echo $single_post['post_summery']; ?></p>
                     <div class="post-options">
                        <div class="row">
                           <div class="col-6">
                              <?php echo $single_post['post_tag']; ?>
                           </div>
                           <div class="col-6">
                              <ul class="post-share">
                                 <li><i class="fa fa-share-alt"></i></li>
                                 <li><a href="#">Facebook</a>,</li>
                                 <li><a href="#"> Twitter</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php include_once "includes/sidebar.php";?>
         </div>
      </div>
   </section>
   <?php include_once "includes/footer.php";?>
   <?php include_once "includes/script.php";?>
</body>