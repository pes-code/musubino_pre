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

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    fieldset {
        background-color: whitesmoke;
        width: 200px;
        height: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
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