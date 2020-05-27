<x-head />
<header>
  <ul>
    <li><a href="/" class="logo">&</a></li>
    <li><a href="/member_limited/profile">{{$user->name}}</a></li>
    <li><a href="/member_limited">videos</a></li>
    @can('isAdmin')
      <li><a href="/admin/share">share</a></li>
      <li><a href="/admin/news_share">announce</a></li>
    @else
    @endcan
  </ul>
</header>
<body>
  @yield('content')
</body>
</html>
