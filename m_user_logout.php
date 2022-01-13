<?php
session_start();

$_SESSION = array(); //session変数を空にする。

//ブラウザー上の情報も使えなくする↓
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy(); //セッションそのものを破壊して使用できないようにする。
header('Location:m_user_login.php');
exit();
