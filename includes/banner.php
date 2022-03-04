<?php
$posts = $obj->display_post_public();

?>
<div class="main-banner header-text">
   <div class="container-fluid">
      <div class="owl-banner owl-carousel">
         <?php while ($postdata = mysqli_fetch_assoc($posts)) {?>
         <div class="item">
            <img src="upload/<?php echo $postdata['post_img']; ?>" alt="">
            <div class="item-content">
               <div class="main-content">
                  <div class="meta-category">
                     <span><?php echo $postdata['cat_name']; ?></span>
                  </div>
                  <a href="single_post.php?view=postview&&id=<?php echo $postdata['post_id']; ?>">
                     <h4><?php echo $postdata['post_title']; ?></h4>
                  </a>
                  <ul class="post-info">
                     <li><a href="#"><?php echo $postdata['post_author']; ?></a></li>
                     <li><a href="#"><?php echo $postdata['post_date']; ?></a></li>
                     <li><a href="#"><?php echo $postdata['post_comment_count']; ?></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <?php }?>
      </div>
   </div>
</div>