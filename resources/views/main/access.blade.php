<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>ACCESS</title>
</head>
<body>
  <header>
    <h1>ACCESS</h1>
    <a href="/">index</a>
    <a href="/main/about">about</a>
    <a href="/main/lesson_menu">lessons</a>
    @if(Auth::check())
    <a href="/member_limited">videos</a>
    <a href="/member_limited/profile">{{$user->name}}</a>
    <a href="/admin/share">share</a>
    @else
    <a href="/login">login</a>
    @endif
  </header>
  <section class="reservation">
    <h1>reservation</h1>
    reservation-table
  </section>
  <section class="contact">
    <h1>contact</h1>
    <input type="text">
    <input type="text">
    <textarea cols="30" rows="10"></textarea>
  </section>
  <section class="map">
    <h1>map</h1>
    map
  </section>
  <footer>
    <a href="/">index</a>
    <a href="/main/about">about</a>
    <a href="/main/lesson_menu">lessons</a>
    <a href="/main/access">access</a>
    address
    phone-number
  </footer>
</body>
</html>
