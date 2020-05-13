@extends('layouts.main')
@section('title','News')
@section('content')
  <section class="introduction">
    @foreach($items as $item)
          <div class="alert alert-primary" role="alert">
              {{ $item->news_title }}
              {{ $item->news_message }}
              <form action="/admin/news_destroy/{{ $item->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="delete" value="削除">
              </form>
          </div>
      @endforeach
  </section>
@endsection 
