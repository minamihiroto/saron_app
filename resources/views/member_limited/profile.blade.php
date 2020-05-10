<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PROFILE</title>
</head>
<body>
  <h1>PROFILE</h1>
  <a href="/">index</a>
  <a href="/member_limited">videos</a>
  <a href="/admin/share">share</a>
  <form method="POST" action="/logout">
    {{ csrf_field() }}
    <a href="javascript:void(0)" onclick="this.parentNode.submit()">logout</a>
  </form>
</body>
</html>
