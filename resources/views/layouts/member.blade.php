<x-head />
<header>
  <ul>
    <li><a href="/" class="logo">&</a></li>
    <li><a href="/member_limited/profile">{{$user->name}}</a></li>
    <li><a href="/member_limited">videos</a></li>
    {{-- GETメソッドなので、直接打ち込むと見れてしまう --}}
    @if(Auth::user()!=null)
      @if(Auth::user()->admin_flg=='admin')
        <li><a href="/admin/share">share</a></li>
        <li><a href="/admin/news_share">announce</a></li>
      @endif
    @endif
  </ul>
</header>
<body>
  @yield('content')
</body>
</html>
