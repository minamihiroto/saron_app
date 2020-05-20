@extends('layouts.main')
@section('css','style.css')
@section('css2','nav.css')
@section('title','Access')
@section('content')

<div class="access">
  <section class="reservation" id="reservation">
    <h1>reservation</h1>
    {{-- Airリザーブ --}}
    <iframe type="text/html" frameborder="0" width="80%" height="1250px" src="//airrsv.net/andocoffee/calendar/embed/" ></iframe>
  </section>

  <section class="contact" id="contact">
    <h1 class="contact-title">Contact</h1>
    <div class="contact-main">
      <p>name</p>
      <p><input type="text"></p>
      <p>mail</p>
      <p><input type="text"></p>
      <p>phone-number</p>
      <p><input></p>
      <p>message</p>
      <p><textarea></textarea></p>
    </div>  
    <p class="submit-button"><input type="submit" value="submit" class="button"></p>

  </section>

  <section class="shop-overview">
    <h1>shop overview</h1>
    <div class="condition"><p class="condition-title">cafe</p><p class="condition-text">&coffee</p></div>
    <div class="condition"><p class="condition-title">open</p><p class="condition-text">10:00~19:30</p></div>
    <div class="condition"><p class="condition-title">holiday</p><p class="condition-text">火曜日</p></div>
    <div class="condition"><p class="condition-title">adress</p><p class="condition-text">京都府京都市復興寺通り３−３−１</p></div>
    <div class="condition"><p class="condition-title">transportation</p><p class="condition-text">〇〇駅から徒歩５/△△から車で１５分</p></div>
    <div class="condition"><p class="condition-title">parking</p><p class="condition-text">２台</p></div>
    <div class="condition"><p class="condition-title">seats</p><p class="condition-text">２２席（カウンター８席）</p></div>
    <div class="condition"><p class="condition-title">facility</p><p class="condition-text">wi-fi/喫煙席あり</p></div>
    <div class="condition"><p class="condition-title">payment</p><p class="condition-text">カード、電子マネー</p></div>
  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.079207228003!2d135.4955922651776!3d34.70318209059311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde3f06d708e205a3!2z5qKF55Sw6aeF!5e0!3m2!1sja!2sjp!4v1589726858966!5m2!1sja!2sjp" width="1440" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe>
  
</div>
@endsection 
