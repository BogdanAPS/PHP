<?php
include_once 'postConfig.php';


//create

$postResult  = [];
$info = '';

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $story = $_POST['story'];

    $sql = ("INSERT INTO `posts`( `name`, `description`, `story`) VALUES (?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $description, $story]);
    $info = 'vse ok';
    // стоп добавл при перезагрузке
    header('Location: postModal.php');
    exit();

}

//read

$sql = $pdo->prepare("SELECT * FROM `posts`");
$sql->execute();
$postResult  = $sql->fetchAll();

//update


if (isset($_POST['edit-submit'])) {
    $edit_name = $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];
    $edit_story = $_POST['edit_story'];
    $id = $_GET['id'];

    $sqll = ("UPDATE `posts` SET `name`=?, `description`=?, `story`=? WHERE `id`=?");
    $query_upd = $pdo->prepare($sqll);
    $query_upd->execute([$edit_name, $edit_description, $edit_story, $id]);
    // header('Location: '. $_SERVER['HTTP_REFERER']);

}


//delete
if (isset($_POST['delete_submit'])){
    $id = $_GET['id'];
    $sql_d = ("DELETE FROM `posts` WHERE `id`=?");
    $query_d = $pdo->prepare($sql_d);
    $query_d->execute([$id]);
    //header('Location: '. $_SERVER['HTTP_REFERER']);

}
//DELETE FROM `users` WHERE 0
