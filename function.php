<?php
include_once 'config.php';


//create

$result = [];
$success = '';

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $pos = $_POST['pos'];

    $sql = ("INSERT INTO `users`( `name`, `last_name`, `pos`) VALUES (?,?,?)");
    $query = $pdo->prepare($sql);

    $query->execute([$name, $last_name, $pos]);
    // Перенаправление на другую страницу
    header('Location: success.php');
    exit();

}

//read

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$result = $sql->fetchAll();

//update


if (isset($_POST['edit-submit'])) {
    $edit_name = $_POST['edit_name'];
    $edit_last_name = $_POST['edit_last_name'];
    $edit_pos = $_POST['edit_pos'];
    $id = $_GET['id'];

    $sqll = ("UPDATE `users` SET `name`=?, `last_name`=?, `pos`=? WHERE `id`=?");
    $query_upd = $pdo->prepare($sqll);
    $query_upd->execute([$edit_name, $edit_last_name, $edit_pos, $id]);
   // header('Location: '. $_SERVER['HTTP_REFERER']);
//    $success = 'vse ok';
}


//delete
if (isset($_POST['delete_submit']));{
    $id = $_GET['id'];
    $sql_d = ("DELETE FROM `users` WHERE `id`=?");
    $query_d = $pdo->prepare($sql_d);
    $query_d->execute([$id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);
//    $success = 'vse ok';
}
//DELETE FROM `users` WHERE 0