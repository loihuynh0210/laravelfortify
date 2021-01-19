<!DOCTYPE html>
<html dir="ltr" lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
        <meta name="robots" content="noindex,nofollow">
        <title>管理画面 | {[#SITE_TITLE#]}</title>
        <link rel="stylesheet" href="/admin/css/common.css" media="all">
        <link rel="stylesheet" href="/admin/css/admin.css" media="all">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="/admin/js/admin.js"></script>
    </head>
    <body id="pageAdminLogin">
        <div class="radius5" id="loginWrapper">
            <h1 class="mb20">
                <a href="/admin/" id="logo">
                    <img alt="CB-STANDARD" src="/img/cybridge/logo.gif"/>
                </a>
            </h1>
            <form action="" class="mb20" id="loginForm" method="post" name="loginForm">
                <p class="alert">
                    パスワードが間違っています！
                </p>
                <p class="mb5">
                    <label>
                        <input class="loginInput" name="" placeholder="ユーザー名" type="text" value=""/>
                    </label>
                </p>
                <p class="mb5">
                    <label>
                        <input class="loginInput" name="" placeholder="パスワード" type="password" value=""/>
                    </label>
                </p>
                <p class="mb10">
                    <span class="checkbox">
                        <input id="rememberme" type="checkbox">
                            <label for="rememberme">
                                ログイン状態を保存する
                            </label>
                        </input>
                    </span>
                </p>
                <p class="submit">
                    <button class="button login auto mb0" id="loginBtn" type="submit">
                        ログインする
                    </button>
                </p>
            </form>
            <div class="boxText">
                <p class="textLink" id="nav">
                    <a href="/admin/">
                        管理画面トップはこちらから
                    </a>
                </p>
                <p class="text">
                    ※ログインボタンをクリックすると、エラー時のシェイクアニメーションが作動するようになっています。お好みで調整して利用してください。
                </p>
            </div>
        </div>
    </body>
</html>
