<x-head />
@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','ShareNews')

  <section class="share-news share">
    <form action="/admin/news_share" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="1">
      @if($errors->has('news_title'))
          <div class="error_msg">{{ $errors->first('news_title') }}</div>
      @endif
      <input type="text" class="form" name="news_title" placeholder="タイトル" value="{{ old('news_title') }}">

      @if($errors->has('news_message'))
          <div class="error_msg">{{ $errors->first('news_message') }}</div>
      @endif
      <div>
          <textarea class="form" name="news_message" placeholder="メッセージ">{{ old('news_message') }}</textarea>
      </div>
      <input type="submit" class="create" value="投  稿">
    </form>
  </section>