<?php

$catdata = $obj->display_category();

?>


<div class="col-lg-12">
    <div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
        <?php while ($cat = mysqli_fetch_assoc($catdata)) {?>
        <li><a href="#">- <?php echo $cat['cat_name'] ?></a></li>
        <?php }?>
        </ul>
    </div>
    </div>
</div>
