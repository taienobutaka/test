<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール認証</title>
</head>
<body>
    <h1>メール認証</h1>
    <p>登録したメールアドレスに認証リンクを送信しました。メールを確認して認証を完了してください。</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">認証メールを再送信</button>
    </form>
</body>
</html>