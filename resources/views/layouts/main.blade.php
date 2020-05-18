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
    <a href="/">index</a>
    <a href="/main/about">about</a>
    <a href="/main/lesson_menu">menu</a>
    <a href="/main/access">access</a>
    address
    phone-number
  </footer>
</body>
</html>
