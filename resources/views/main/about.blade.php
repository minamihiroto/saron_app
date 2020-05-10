<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>ABOUT</title>
</head>
<body>
  <header>
    <h1>ABOUT</h1>
    <a href="/">index</a>
    <a href="/main/lesson_menu">lessons</a>
    <a href="/main/access">access</a>
    @if(Auth::check())
    <a href="/member_limited">videos</a>
    <a href="/member_limited/profile">{{$user->name}}</a>
    <a href="/admin/share">share</a>
    @else
    <a href="/login">login</a>
    @endif
  </header>
  <section class="introduction">
    <img class="personimage" src="/images/sample4.jpg" alt="person-image" width="700px"> 
    person-textperson-textperson-textperson-textperson-textperson-textperson-textperson-text
    <img class="roomimage" src="/images/sample5.jpg" alt="room-image" width="700px">
    room-textroom-textroom-textroom-textroom-textroom-textroom-textroom-textroom-textroom-textroom-textroom-textroom-text
  </section>
  <section class="box_images">
    <img class="boximage" src="/images/sample1.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample2.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample3.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample2.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample3.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample1.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample3.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample1.jpg" alt="box-image" width="400px">
    <img class="boximage" src="/images/sample2.jpg" alt="box-image" width="400px">
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
