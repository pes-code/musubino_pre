<?php
// ログインしていないときに動いてほしくないPHPファイル
include('functions.php');
session_start();
check_session_id();


$id = $_GET["id"];

$pdo = connect_to_db();

$sql = "DELETE FROM users_table WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:m_user_exit.php"); //退会しました的なメッセージ画面
exit();
//MUSUBINO入力情報も削除する