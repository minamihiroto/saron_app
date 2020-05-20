<x-head />
<header>
  <ul>
    <li><a href="/" class="logo">&</a></li>
    <li><a href="/member_limited/profile">{{$user->name}}</a></li>
    <li><a href="/member_limited">videos</a></li>
    {{-- adminだけが使用できるようにしたい。今は表示させてないだけなので要編集 --}}
    @if(Auth::id()===2)
      <li><a href="/admin/share">share</a></li>
      <li><a href="/admin/news_share">announce</a></li>
    @endif
  </ul>
</header>
<body>
  @yield('content')
</body>
</html>
