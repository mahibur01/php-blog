<?php

if (isset($_POST['add_menu'])) {
    $return_msg = $obj->add_menu($_POST);
}

?>

<?php if (isset($return_msg)) {
    echo $return_msg;

}?>

<div class="container-fluid mt-5">
    <form action="" method="POST">
        <div class="form-group">
            <label class="mb-1" for="menu_name">Menu Name</label>
            <input name="menu_name" class="form-control py-4" id="menu_name" type="text"/>
        </div>
        <div class="form-group">
            <label class="mb-1" for="menu_link">Menu Link</label>
            <input name="menu_link" class="form-control py-4" id="menu_link" type="text"/>
        </div>
            <input type="submit" name="add_menu" class="form-control btn btn-primary btn-block" value="Add Menu">
    </form>
</div>
