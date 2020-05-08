<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INDEX</title>
</head>
<body>
  <h1>INDEX</h1>
  <a href="/main">index</a>
  <a href="/main/about">about</a>
  <a href="/main/lesson_menu">lessons</a>
  <a href="/main/access">access</a>
  @if(Auth::check())
  <a href="/member_limited">videos</a>
  <a href="/member_limited/profile">{{$user->name}}</a>
  <a href="/admin/share">share</a>
  @else
  <a href="/login">login</a>
  @endif
</body>
</html>
