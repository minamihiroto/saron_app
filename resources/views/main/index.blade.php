<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>INDEX</title>
</head>
<body>
  <header>
    <h1>INDEX</h1>
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
  </header>
  <section class="foreword">
    <img class="topimage" src="images/sample5.jpg" alt="top-image" width="1000px">
    top-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-text
  </section>
  <section class="explanation">
    <div class="news">
      <h1>news</h1>
      <a href="/">news-title</a>
      <a href="/">news-title</a>
      <a href="/">news-title</a>
      <a href="/">news-title</a>
      <a href="/">news-title</a>
    </div>
    <div class="sub">
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <h1>title</h1>
      messagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessage
    </div>
  </section>
  <section class="product">
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
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
