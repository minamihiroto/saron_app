<x-head />
@section('title','Profile')
<body>
  <header>
    <a href="/">index</a>
    <a href="/member_limited">videos</a>
    <a href="/admin/share">share</a>
  </header>
  {{$user->name}}
  {{$user->email}}
  <form method="POST" action="/logout">
    {{ csrf_field() }}
    <a href="javascript:void(0)" onclick="this.parentNode.submit()">logout</a>
  </form>
</body>
</html>
