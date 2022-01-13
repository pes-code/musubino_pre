<?php
// ログインしていないときに動いてほしくないPHPファイル
include('functions.php');
session_start();
check_session_id();


$id = $_GET["id"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM users_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSUBINO（アカウント編集画面）</title>
</head>

<body>
    <form action="m_user_update.php" method="POST">
        <fieldset>
            <legend>MUSUBINO（編集画面）</legend>
            <div>
                <input type="text" name="username" value="<?= $record["username"] ?>">
            </div>
            <div>
                <input type="text" name="mail" value="<?= $record["mail"] ?>">
            </div>
            <div>
                <input type="text" name="password" value="<?= $record["password"] ?>">
            </div>
            <div>
                <button>変更</button>
            </div>
            <input type="hidden" name="id" value="<?= $record["id"] ?>">
        </fieldset>
    </form>

</body>

</html>