<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'editimg') {
        $id = $_GET['id'];
    }
}

if (isset($_POST['change_img_btn'])) {
    $msg = $obj->edit_img($_POST);
}

?>

<div class="shadow m-5 p-5">
    <?php
if (isset($msg)) {
    echo $msg;
}
?>
    <form action="" method="POST" class="form" enctype="multipart/form-data">
        <input type="hidden" name="editimg_id" value="<?php echo $id ?>">
    <div class="form-group">
                <label class="mb-1" for="change_img">Change Thumbnail</label>
                <br>
                <input name="change_img" class="py-2" id="change_img" type="file"/>
            </div>
            <input class="btn btn-primary" type="submit" value="Change Thumnail" name="change_img_btn">
    </form>
</div>
