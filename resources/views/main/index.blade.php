@extends('layouts.main')
@section('css','style.css')
@section('css2','nav.css')
@section('title','Top')
@section('content')

  <section class="top">
    <h1 class="sub-title">May I help you???</h1>
    <h2 class="sub-text">Your little joy is here.....↓↓↓</h2>
    <div class="top-img">
      <h1>&</h1>
      <p>-coffee-</p>
    </div>
  </section>

  <section class="news">
      <h1>news</h1>
    @if(count($items) > 0)
      @foreach($items as $item)
          <div class="announce" role="alert">
            <a href="/main/news/{{$item->id}}">{{ $item->news_title }}</a>
          </div>
      @endforeach
    @else
      <div>投稿記事がありません</div>
    @endif
  </section>

  <div class="spend-image"><img src="/images/spend.png" alt="spend"></div>
 
  {{-- <section class = "introduce">
    <div class="introduce-beans">
      <img src="images/beans.png" class="introduce-image">
      <h1 class="introduce-title">Beans</h1>   
      <p class ="introduce-text"> 当店の豆は香り高く、程よくえぐみのあるボリビア産のリベリカ豆を使用しています。リベリカ豆は世界幅広く栽培されている品種ですが、ボリビア産のものはより濃厚で香り高いものに仕上がっています。というのもボリビアは全般的に高度が高く気圧が低い国であるため、豆により空気が浸透し要素が豆全体に均等に広がるためです。 マスターが数多くの豆の中から選んだ豆の一杯を堪能ください。</p>
    </div>
    <div class="introduce-roast">
      <img src="images/roast.png" class="introduce-image">
      <h1 class="introduce-title">Roast</h1>
      <p class ="introduce-text">焙煎深度はきめ細やかな極深煎り。イタリアンローストと呼ばれるこの煎り方は,調整が難しく、焦げてしまうことで定評ですが、当店自慢のスクリューピラスという独自の豆の保存方法によって、苦すぎず、水気のない濃厚
      なものに仕上げました。</p>
    </div>
    <div class="introduce-shop">
      <img src="images/shop.png" class="introduce-image">
      <h1 class="introduce-title">Shop</h1>
      <p class ="introduce-text">当店では生豆のバイヤーが季節ごとに旬のコーヒーを吟味し、最も美味しいとされるコーヒー豆をご自宅でも楽しんで頂けるように、豆の店頭販売も行っています。加えて、４月より深煎り専用のコーヒー豆、リベリカ種の豆の販売も開始しましたので、そちらも併せてお楽しみください。その他、当店オリジナルタンブラーなどの限定商品も多数取り扱っています。</p>
    </div>
  </section>

  <section class="spend">
    <h2>How to spend</h2>
    <h3>in the store/////</h3>
    <p><span class="mgr-150">for</span>Togertherness with friends</p>
    <p><span class="mgr-150">for</span>Part of work style</p>
    <p><span class="mgr-150">for</span>Study boddy</p>
    <p><span class="mgr-150">for</span>spanYou who like photogaphy</p>
    <p><span class="mgr-150">for</span>On a date with a lover</p>
    <p><span class="mgr-150">for</span>When you have a problem</p>
    <p><span class="mgr-150">for</span>A place for families to relax</p>
    <img src="images/enjoy.jpg" class="spend-image">
  </section> --}}

  <section class="topics-container">
    <div class="title-one"><a href="/main/access#reservation">Reservation</a></div>
    <div class="title-two"><a href="/main/access#contact">Contact</a></div>
    <div class="title-three"><a href="/main/about#job">Job</a></div>
    <div class="title-four"><a href="/main/access#map">Map</a></div>
  </section>

@endsection  
