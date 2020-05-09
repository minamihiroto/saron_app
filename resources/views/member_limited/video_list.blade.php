<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VIDEOS</title>
</head>
<body>
  <h1>VIDEOS</h1>
  <a href="/main">index</a>
  <a href="/member_limited/profile">profile</a>
  <a href="/admin/share">share</a>

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
