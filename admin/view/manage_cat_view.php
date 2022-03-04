<?php

$catdata = $obj->display_category();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delid = $_GET['id'];
        $msg = $obj->delete_category($delid);
    }
}

?>

<div class="container-fluid mt-5">

<h3>Category List</h3>

<?php if (isset($msg)) {
    echo $msg;
}?>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($cat = mysqli_fetch_assoc($catdata)) {?>
            <tr>
                <td><?php echo $cat['cat_id'] ?></td>
                <td><?php echo $cat['cat_name'] ?></td>
                <td><?php echo $cat['cat_des'] ?></td>
                <td>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-warning" href="?status=delete&&id=<?php echo $cat['cat_id'] ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>