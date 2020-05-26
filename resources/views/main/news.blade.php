@extends('layouts.main')
@section('title','News')
@section('css','style.css')
@section('css2','nav.css')
@section('content')
<section class="news-content">
  <h1>{{ $item->news_title }}</h1>
  <h5>{{$item->created_at}}</h5>
  <p>{!! nl2br($item->news_message) !!}</p>
  @if(Auth::user()!=null)
    @if(Auth::user()->admin_flg=='admin')
      <form action="/admin/news_destroy/{{ $item->id }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="delete delete-news" value="削除">
      </form>
    @endif
  @endif
</section>
  @endsection 
