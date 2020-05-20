<x-head />
@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','ShareVideo')

  <section class="share-video share">
    <form action="/admin/share" method="post" enctype="multipart/form-data">
      <h1 class="share-title">share video</h1>
      {{ csrf_field() }}

      <input type="hidden" name="id" value="1">
      @if($errors->has('video_file'))
          <div class="error_msg">{{ $errors->first('video_file') }}</div>
      @endif
      <input type="file" class="video-file" name="video_file" placeholder="動画" value="{{ old('video_file') }}">

      <div class="contact-main">
        @if($errors->has('video_title'))
            <div class="error_msg">{{ $errors->first('video_title') }}</div>
        @endif
        <p>video title</p>
        <p><input type="text" class="form" name="video_title" value="{{ old('video_title') }}"></p>

        @if($errors->has('video_summary'))
            <div class="error_msg">{{ $errors->first('video_summary') }}</div>
        @endif
          <p>summary</p>
          <p><textarea class="form" name="video_summary">{{ old('video_summary') }}</textarea></p>
      </div>
      <input type="submit" class="create button" value="submit">
    </form>
  </section>