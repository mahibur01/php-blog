<?php

if (isset($_POST['add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}

?>

<?php if (isset($return_msg)) {
    echo $return_msg;

}?>

<div class="container-fluid mt-5">
    <form action="" method="POST">
        <div class="form-group">
            <label class="mb-1" for="cat_name">Category Name</label>
            <input name="cat_name" class="form-control py-4" id="cat_name" type="text"/>
        </div>
        <div class="form-group">
            <label class="mb-1" for="cat_des">Category Description</label>
            <input name="cat_des" class="form-control py-4" id="cat_des" type="text"/>
        </div>
            <input type="submit" name="add_cat" class="form-control btn btn-primary btn-block" value="Add Category">
    </form>
</div>
