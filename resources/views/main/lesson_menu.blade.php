<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>LESSONS</title>
</head>
<body>
  <header>
    <h1>LESSONS</h1>
    <a href="/">index</a>
    <a href="/main/about">about</a>
    <a href="/main/access">access</a>
    @if(Auth::check())
    <a href="/member_limited">videos</a>
    <a href="/member_limited/profile">{{$user->name}}</a>
    <a href="/admin/share">share</a>
    @else
    <a href="/login">login</a>
    @endif
  </header>
  <section class="menus">
    <img class="personimage" src="/images/sample4.jpg" alt="person-image" width="800px"> 
    menu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-text
    <img class="personimage" src="/images/sample5.jpg" alt="person-image" width="800px"> 
    menu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-text
    <img class="personimage" src="/images/sample6.jpg" alt="person-image" width="800px"> 
    menu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-text
    <img class="personimage" src="/images/sample4.jpg" alt="person-image" width="800px"> 
    menu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-textmenu-text
  </section>
  <section class="options">
    <img class="personimage" src="/images/sample5.jpg" alt="person-image" width="800px">
    option-text
    <img class="personimage" src="/images/sample6.jpg" alt="person-image" width="800px">
    option-text
  </section>
  <section class="caution">
    <h1>caution</h1>
    caution-textcaution-textcaution-textcaution-textcaution-textcaution-textcaution-textcaution-textcaution-textcaution-textcaution-text
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
