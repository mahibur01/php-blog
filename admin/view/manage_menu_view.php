<?php

$menudata = $obj->display_menu();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delid = $_GET['id'];
        $msg = $obj->delete_menu($delid);
    }
}

?>

<div class="container-fluid mt-5">

<h3>Menu List</h3>

<?php if (isset($msg)) {
    echo $msg;
}?>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu Name</th>
                <th>Menu Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($menu = mysqli_fetch_assoc($menudata)) {?>
            <tr>
                <td><?php echo $menu['id'] ?></td>
                <td><?php echo $menu['menu_name'] ?></td>
                <td><?php echo $menu['menu_link'] ?></td>
                <td>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-warning" href="?status=delete&&id=<?php echo $menu['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>