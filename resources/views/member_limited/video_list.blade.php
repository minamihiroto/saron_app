<x-head />
@section('title','Videos')
<header>
  <a href="/">index</a>
  <a href="/member_limited/profile">{{$user->name}}</a>
  <a href="/member_limited">videos</a>
  <a href="/admin/share">share</a>
  <a href="/admin/news_share">announce</a>
</header>

  @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <h1>{{ $item->video_file }}</h1>
                <h1>{{ $item->video_title }}</h1>
                <h1>{{ $item->video_summary }}</h1>
                <form action="/admin/destroy/{{ $item->id }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="delete" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
</body>
</html>
