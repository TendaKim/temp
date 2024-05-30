<?php

// DBの参考
require "../db/db_config.php";

//　セッションの利用
session_start();

// ログインされているのかチェック
$is_login = isset($_SESSION["is_login"]) ? $_SESSION["is_login"] : [];

// ログインされていたら移動
if($is_login == true)
{
    header('Location: ./start.php');
    exit();
}

// ユーザーからログインデータの確認
$id = isset($_POST["user_id"]) ? $_POST["user_id"] : [];
$password = isset($_POST["user_password"]) ? $_POST["user_password"] : [];

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

var_dump($result);



// ログインページの表示
require_once "../tpl/login_tpl.php";