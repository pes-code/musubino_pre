<?php
// ログインしていないときに動いてほしくないPHPファイル
session_start();
include('functions.php');
check_session_id();


if (
    !isset($_POST['username']) || $_POST['username'] == '' ||
    !isset($_POST['mail']) || $_POST['mail'] == '' ||
    !isset($_POST['password']) || $_POST['password'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    exit('paramError');
}

$username = $_POST["username"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$id = $_POST["id"];

$pdo = connect_to_db();

$sql = "UPDATE users_table SET username=:username, mail=:mail, password=:password, updated_at=now() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:m_user_edit.php"); //アカウント変更に成功したという表示ページへ変更する必要がある。
exit();
