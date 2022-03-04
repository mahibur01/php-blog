<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'editpost') {
        $id = $_GET['id'];
        $obj->get_post_info($id);
        $postdata = $obj->get_post_info($id);
    }
}

if (isset($_POST['update_post'])) {
    $msg = $obj->update_post($_POST);
}

?>

<div class="shadow m-5 p-5">
    <?php if (isset($msg)) {echo $msg;}?>
    <form action="" method="POST" class="form">
        <input type="hidden" name="edit_post_id" value="<?php echo $id ?>">
            <div class="form-group">
                <label class="mb-1" for="change_title">Change Titile</label><br>
                <input value="<?php echo $postdata['post_title']; ?>"  name="change_title" class=" form-control py-2" id="change_title" type="text"/>
            </div>
            <div class="form-group">
                <label class="mb-1" for="change_content">Change Content</label><br>
                <textarea class="form-control py-2" name="change_content" id="change_content" cols="30" rows="10"><?php echo $postdata['post_content']; ?></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Update Post" name="update_post">
    </form>
</div>
