<?php
session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'php_login');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}

$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM regist_list WHERE name='$name' and pass='$pass'";
$result = $mysqli->query($sql);
if ($result->num_rows == 1) {
    $result->close();
    header('Location: index_signup.php');
    exit;
}

$sql = "INSERT INTO regist_list (name, pass) values ('$name', '$pass');";
if ($mysqli->query($sql)) {
    header('Location: index.php');
    exit;
} else {
    header('Location: index_signup.php');
    exit;
}
?>