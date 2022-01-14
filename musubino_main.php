<?php
// 不正なログインを防ぐ処理
include('functions.php');
session_start();
check_session_id();


$pdo = connect_to_db();

$sql = 'SELECT * FROM users_table';

$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll関数でtableのデータ自体を取得する



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <a href='musubino_input.php?'>MUSUBINOを作成</a>
    </h1>
    <p>
        <a href='m_user_edit.php?id='>アカウント情報変更</a>
    </p>
    <p>
        <a href='m_user_delete.php?id='>退会</a>
    </p>
</body>

</html>