<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <h1>投稿</h1>
  <a href="/main">index</a>
  <a href="/member_limited">videos</a>
  <a href="/member_limited/profile">profile</a>

  <form action="/admin/share" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="1">
    @if($errors->has('video_file'))
        <div class="error_msg">{{ $errors->first('video_file') }}</div>
    @endif
    <input type="file" class="form" name="video_file" placeholder="動画" value="{{ old('video_file') }}">

    @if($errors->has('video_title'))
        <div class="error_msg">{{ $errors->first('video_title') }}</div>
    @endif
    <input type="text" class="form" name="video_title" placeholder="タイトル" value="{{ old('video_title') }}">

    @if($errors->has('video_summary'))
        <div class="error_msg">{{ $errors->first('video_summary') }}</div>
    @endif
    <div>
        <textarea class="form" name="video_summary" placeholder="メッセージ">{{ old('video_summary') }}</textarea>
    </div>
    <input type="submit" class="create" value="投  稿">
</form>
</body>
</html>