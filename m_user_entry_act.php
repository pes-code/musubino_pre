<?php
include('functions.php');

if (
    !isset($_POST['username']) || $_POST['username'] == '' ||
    !isset($_POST['sex']) || $_POST['sex'] == '' ||
    !isset($_POST['birthday']) || $_POST['birthday'] == '' ||
    !isset($_POST['address']) || $_POST['address'] == '' ||
    !isset($_POST['spouse']) || $_POST['spouse'] == '' ||
    !isset($_POST['child']) || $_POST['child'] == '' ||
    !isset($_POST['mail']) || $_POST['mail'] == '' ||
    !isset($_POST['password']) || $_POST['password'] == ''
) {
    exit('paramError');
}

$username = $_POST["username"];
$sex = $_POST["sex"];
$birthday = $_POST["birthday"];
$address = $_POST["address"];
$spouse = $_POST["spouse"];
$child = $_POST["child"];
$mail = $_POST["mail"];
$password = $_POST["password"];

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM users_table WHERE username=:username';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

if ($stmt->fetchColumn() > 0) {
    echo '<p>すでに登録されているユーザです．</p>';
    echo '<a href="m_user_login.php">ログイン画面へ</a>';
    exit();
}

$sql = 'INSERT INTO users_table(id, username, sex, birthday, address, spouse, child, mail, password, is_admin, is_deleted, created_at, updated_at) VALUES(NULL, :username, :sex, :birthday, :address, :spouse, :child, :mail, :password, 0, 0, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':spouse', $spouse, PDO::PARAM_STR);
$stmt->bindValue(':child', $child, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:m_user_login.php");
exit();
