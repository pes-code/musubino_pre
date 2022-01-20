<?php
include('functions.php');

$med1 = $_POST['med1'];
$med2 = $_POST['med2'];
$med3 = $_POST['med3'];
$med4 = $_POST['med4'];
$med5 = $_POST['med5'];
$med6 = $_POST['med6'];
$med7 = $_POST['med7'];
$med8 = $_POST['med8'];
$med9 = $_POST['med9'];
$med10 = $_POST['med10'];
$med11 = $_POST['med11'];
$med12 = $_POST['med12'];
$med13 = $_POST['med13'];
$other = $_POST['other'];
$name = $_POST['name'];
$date = $_POST['date'];

// DB接続//各種項目設定
$pdo = connect_to_db();

// SQL作成&実行
$sql = 'INSERT INTO musubino_tabel (id, med1, med2, med3, med4, med5, med6, med7, med8, med9, med10, med11, med12, med13, other, name, date, created_at, updated_at) VALUES (NULL, :med1, :med2, :med3, :med4, :med5, :med6, :med7, :med8, :med9, :med10, :med11, :med12, :med13, :other, :name, :date, now(), now())';
$stmt = $pdo->prepare($sql);

// バインド変数を設定//悪意あるコード入力をただの文字列に変換して防御する。
$stmt->bindValue(':med1', $med1, PDO::PARAM_STR);
$stmt->bindValue(':med2', $med2, PDO::PARAM_STR);
$stmt->bindValue(':med3', $med3, PDO::PARAM_STR);
$stmt->bindValue(':med4', $med4, PDO::PARAM_STR);
$stmt->bindValue(':med5', $med5, PDO::PARAM_STR);
$stmt->bindValue(':med6', $med6, PDO::PARAM_STR);
$stmt->bindValue(':med7', $med7, PDO::PARAM_STR);
$stmt->bindValue(':med8', $med8, PDO::PARAM_STR);
$stmt->bindValue(':med9', $med9, PDO::PARAM_STR);
$stmt->bindValue(':med10', $med10, PDO::PARAM_STR);
$stmt->bindValue(':med11', $med11, PDO::PARAM_STR);
$stmt->bindValue(':med12', $med12, PDO::PARAM_STR);
$stmt->bindValue(':med13', $med13, PDO::PARAM_STR);
$stmt->bindValue(':other', $other, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header('Location:musubino_input.php');
exit();
