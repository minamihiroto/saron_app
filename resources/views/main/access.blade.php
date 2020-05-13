@extends('layouts.main')
@section('title','Access')
@section('content')
  <section class="reservation">
    <h1>reservation</h1>
    {{-- Airリザーブ --}}
    {{-- <iframe type="text/html" frameborder="0" width="80%" height="1250px" src="//airrsv.net/andocoffee/calendar/embed/" ></iframe> --}}
  </section>
  <section class="contact">
    <h1>contact</h1>
    <form action="/main/access">
      <input type="text">
      <input type="text">
      <textarea cols="30" rows="10"></textarea>
      <input type="submit">
    </form>
  </section>
  <section class="map">
    <h1>map</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.079207228003!2d135.4955922651776!3d34.70318209059311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde3f06d708e205a3!2z5qKF55Sw6aeF!5e0!3m2!1sja!2sjp!4v1589288792541!5m2!1sja!2sjp" width="1300" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>
@endsection 
