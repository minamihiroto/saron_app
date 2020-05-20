<x-head />
@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','ShareNews')

  <section class="share-news share">
    <h1 class="share-title">announce</h1>
    <form action="/admin/news_share" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="contact-main">
        <input type="hidden" name="id" value="1">
        @if($errors->has('news_title'))
            <div class="error_msg">{{ $errors->first('news_title') }}</div>
        @endif
        <p>news title</p>
        <p><input type="text" class="form" name="news_title" value="{{ old('news_title') }}"></p>

        @if($errors->has('news_message'))
            <div class="error_msg">{{ $errors->first('news_message') }}</div>
        @endif
          <p>message</p>
          <p><textarea class="form" name="news_message">{{ old('news_message') }}</textarea></p>
      </div>
      <input type="submit" class="create button" value="submit">
    </form>
  </section>