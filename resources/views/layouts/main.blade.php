<x-head />
<body>
  <header>
    <ul>
      <li><a class="header-logo" href="/">&</a></li>
      <li><a href="/main/about">about</a></li>
      <li><a href="/main/lesson_menu">menu</a></li>
      <li><a href="/main/access">access</a></li>
    @if(Auth::check())
      <li><a href="/member_limited">videos</a></li>
      <li><a class="header-user" href="/member_limited/profile">{{$user->name}}</a></li>
    </ul>
    @else
    <a class="header-user" href="/login">login</a>
    @endif
  </header>
  <main>
    @yield('content')
  </main>

  <footer>
    <h1><a href="/">&</a></h1>
    <img src="/images/footer-image.png">
    <ul class="footer-list">
      <li><a href="/main/about">about</a></li>
      <li><a href="/main/lesson_menu">menu</a></li>
      <li><a href="/main/access">access</a></li>
    </ul>
    <div class="ad">  
      <h2>adress</h2>
      <p>京都府京都市復興寺通り3-3-1</p>
    </div>
    <div class="tel">
      <h2>TEL</h2>
      <p>06-1515-1717</p>
    </div>
  </footer>
</body>
</html>
