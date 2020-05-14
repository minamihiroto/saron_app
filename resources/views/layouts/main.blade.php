<x-head />
<body>
  <header>
    <a href="/">logo</a>
    <a href="/main/about">about</a>
    <a href="/main/lesson_menu">lessons</a>
    <a href="/main/access">access</a>
    @if(Auth::check())
    <a href="/member_limited">videos</a>
    <a href="/member_limited/profile">{{$user->name}}</a>
    <a href="/admin/share">share</a>
    <a href="/admin/news_share">announce</a>
    @else
    <a href="/login">login</a>
    @endif
  </header>
  <main>
    @yield('content')
  </main>
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
