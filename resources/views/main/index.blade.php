@extends('layouts.main')
@section('title','Top')
@section('content')
  <section class="foreword">
    <img class="topimage" src="images/sample5.jpg" alt="top-image" width="1000px">
    top-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-texttop-text
  </section>
  <section class="explanation">
    <div class="news">
      <h1>news</h1>
      @if(count($items) > 0)
      @foreach($items as $item)
          <div class="alert alert-primary" role="alert">
              <a href="/main/news">{{ $item->news_title }}</a>
          </div>
      @endforeach
    @else
      <div>投稿記事がありません</div>
    @endif
    </div>
    <div class="sub">
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <img class="subimage" src="images/sample2.jpg" alt="sub-image" width="300px">
      sub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-textsub-text
      <h1>title</h1>
      messagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessage
    </div>
  </section>
  <section class="product">
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
    <a href="/"><img class="product" src="images/sample1.jpg" alt="product-image" width="500px"></a>
  </section>
@endsection  
