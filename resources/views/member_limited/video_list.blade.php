@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','Videos')

<section class="video-list">
  <h1>videos</h1>
  @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <div class="video"><video src="{{ $moviePath }}{{ $item->video_file }}" width="700" controls></video></div>
                <h2>{{ $item->video_title }}</h1>
                <p>{!! nl2br($item->video_summary) !!}</p>
                {{-- adminだけが使用できるようにしたい。今は表示させてないだけなので要編集 --}}
                @if(Auth::id()===2)
                    <form action="/admin/destroy/{{ $item->id }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="削除" class="delete">
                    </form>
                @endif
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
</section>