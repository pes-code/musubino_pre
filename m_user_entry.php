<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSUBINO</title>
</head>

<body>
    <form action="m_user_entry_act.php" method="POST">
        <fieldset>
            <div>
                <input type="text" name="username" placeholder="おなまえ">
            </div>
            <div>
                <input type="text" name="mail" placeholder="メールアドレス">
            </div>
            <div>
                <input type="text" name="password" placeholder="パスワート">
            </div>
            <div>
                <!--顔写真（任意）-->
            </div>
    </form>
    <button>登録</button>
    </fieldset>
    <p>既に登録がお済みの方は<a href="m_user_login.php">こちら</a></p>
    </form>
</body>

</html>