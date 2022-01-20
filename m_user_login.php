<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSUBINO</title>
</head>
<style>
    body {
        background: url(MUSUBINOlogin_sample.png);
        background-size: cover;
    }

    fieldset {
        background-color: whitesmoke;

        position: absolute;
        padding-top: 20px;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 200px;
        height: 150px;
    }
</style>

<body>
    <form action="m_user_login_act.php" method="POST">
        <fieldset>
            <div>
                <input type="text" name="username" placeholder="おなまえ">
            </div>
            <div>
                <input type="text" name="password" placeholder="パスワート">
            </div>

            <button>ログイン</button>
            <div>
                <p>アカウント登録は<a href="m_user_entry.php">こちら</a></p>
            </div>
        </fieldset>
    </form>
</body>

</html>