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
        width: 300px;
        height: 400px;
    }

    div {
        margin: 10px 0px;
    }
</style>

<body>
    <form action="m_user_entry_act.php" method="POST">
        <fieldset>
            <h3>アカウント作成フォーム</h3>
            <div>
                <label>氏名</label>
                <input type="text" name="username" placeholder="むすび のりお">
            </div>

            <div>
                <label>性別</label>
                <select name="sex" placeholder="性別">
                    <option>男性</option>
                    <option>女性</option>
                    <option>その他</option>
                </select>
            </div>

            <div>
                <label>生年月日</label>
                <input type="date" name="birthday" placeholder="生年月日">

            </div>

            <div>
                <label>住所</label>
                <input type="text" name="address" placeholder="○○県△△市□□一丁目×番地">
            </div>

            <div>
                <label>配偶者</label>
                <select name="spouse">
                    <option>あり</option>
                    <option>なし</option>
                </select>
            </div>

            <div>
                <label>子供</label>
                <select name="child">
                    <?php
                    for ($child = 0; $child <= 10; $child++) {
                        echo "<option value='{$child}'>{$child}人</option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <label>メールアドレス</label>
                <input type="text" name="mail" placeholder="omusubikorori@gmail.com">
            </div>

            <div>
                <label>パスワード</label>
                <input type="text" name="password" placeholder="半角英数字6桁">
            </div>

            <button>登録</button>

            <div>
                <p>登録済みの方は<a href="m_user_login.php">こちら</a></p>
            </div>
    </form>

    </fieldset>
    </form>

    <footer>
    </footer>
</body>

</html>