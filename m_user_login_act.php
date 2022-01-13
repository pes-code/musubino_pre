<?php

session_start();

//データベースを利用するためMysqlを読み込む関数をinclude
include('functions.php');

$username = $_POST["username"];
$password = $_POST["password"];

//DB接続
$pdo = connect_to_db();

// SQL実行//データを抽出して適合するデータがあるか検証する
$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND is_deleted=0';
//※データをANDでつなぐ。

//バインド変数
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// ユーザ有無で条件分岐
$val = $stmt->fetch(PDO::FETCH_ASSOC); //PDO形式でデータを持ってくる。以下の条件分岐で処理する。
if (!$val) {
    echo "<p>入力情報に誤りがあります</p>";
    echo "<a href=m_user_login.php>ログインへ戻る</a>";
    exit();
} else { //適合するデータがあった場合↓
    $_SESSION = array(); //一旦セッション変数を空にする。
    $_SESSION['session_id'] = session_id();
    $_SESSION['is_admin'] = $val['is_admin'];
    $_SESSION['username'] = $val['username'];
    header("Location:musubino_main.php"); //左記のURLにジャンプしてこれらの処理を終了する。
    exit();
}
