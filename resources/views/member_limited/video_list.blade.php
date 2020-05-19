@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','Videos')

<section class="video-list">
  <h1>videos</h1>
  @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <div class="video"><video src="{{ $moviePath }}{{ $item->video_file }}" width="320" height="240" autoplay controls></video></div>
                <h2>{{ $item->video_title }}</h1>
                <p>{{ $item->video_summary }}</p>
                <form action="/admin/destroy/{{ $item->id }}" method="POST" class="delete">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
</section>