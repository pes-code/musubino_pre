<?php
include('functions.php');

// DB接続
$pdo = connect_to_db(); //elama_functions.phpで関数を定義してある。

// SQL作成&実行
$sql = 'SELECT * FROM musubino_tabel WHERE is_deleted=0 ORDER BY date ASC';
$stmt = $pdo->prepare($sql);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// SQL実行の処理
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//var_dump($result);
//echo '</pre>';

$output = "";

foreach ($result as $record) {
    $output .= "
    <tr>
     <td>{$record["med1"]}</td> 
     <td>{$record["med2"]}</td>
     <td>{$record["med3"]}</td>
     <td>{$record["med4"]}</td>   
     <td>{$record["med5"]}</td> 
     <td>{$record["med6"]}</td> 
     <td>{$record["med7"]}</td> 
     <td>{$record["med8"]}</td> 
     <td>{$record["med9"]}</td> 
     <td>{$record["med10"]}</td> 
     <td>{$record["med11"]}</td> 
     <td>{$record["med12"]}</td> 
     <td>{$record["med13"]}</td> 
     <td>{$record["other"]}</td>
     <td>{$record["date"]}</td>
     <td>{$record["name"]}</td>
       <td>
       <a href='musubino_edit.php?id={$record["id"]}'>変更</a>
       </td>
         <td>
       <a href='musubino_delete.php?id={$record["id"]}'>削除</a>
       </td> 
    </tr>
  ";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>

<body>
    <fieldset>
        <legend>確認画面</legend>
        <a href="musubino_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>希望する医療行為</th>
                    <th>その他の希望</th>
                    <th>記入日</th>
                    <th>氏名</th>
                    <?= $output ?>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </fieldset>
</body>

</html>