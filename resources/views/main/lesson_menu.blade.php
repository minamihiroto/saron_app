@extends('layouts.main')
@section('css','style.css')
@section('css2','nav.css')
@section('title','Lessons')
@section('content')

<div class="menu">
  <section class="drink-box box">
  <h1>Menu → You can take out</h1>
      <div class="products"><p class="product">Espresso</p><p class="price">450 yen</p></div>
      <div class="products"><p class="product">Macchiato</p><p class="price">480 yen</P></div>
      <div class="products"><p class="product">Americano (hot/iced)</p><p class="price">450 yen</p></div>
      <div class="products"><p class="product">Cappuccino</p><p class="price">500 yen</p></div>
      <div class="products"><p class="product">Cafe latte (hot/iced)</p><p class="price">520 yen</p></div> 
      <div class="products"><p class="product">Mocha (hot/iced)</p><p class="price">600 yen</p></div>
      <div class="products"><p class="product">Blend</p><p class="price">+100 yen</p></div>
      <div class="products"><p class="product">Tall size (expect Espresso)</p><p class="price">+100 yen</P></div>
      <div class="products"><p class="product">Short size (expect Espresso)</p><p class="price">-100 yen</p></div>
  </section>

  <section class="food-box box">   
    <h1>Side food</h1>
    <div class="products"><p class="product">Italian waffle</p><p class="price">280 yen</p></div>
    <div class="products"><p class="product">Apple souffle</p><p class="price">350 yen</p></div>
    <div class="products"><p class="product">Coconut pound cake</p><p class="price">350 yen</p></div>
    <div class="products"><p class="product">Original granola</p><p class="price">600 yen</p></div>
    <div class="products"><p class="product">8 Original cookies</p><p class="price">200 yen each</p></div>
    <div class="products"><p class="product">3 Original donut</p><p class="price">200 yen each</p></div>
  </section>

  <section class="tea-box box"> 
    <h1>Japanease tea</h1>
    <div class="tea-text">
      <a>当店では京都宇治で栽培される”さみどり”と呼ばれる品種の茶葉を直送で送ってもらっています。”さみどり”は宇治でしか栽培されておらず、最も高級品だとされています。その”さみどり”を皆様に賞味して頂けるように、抹茶ベースで提供します。この京都の地で日本の豊さを味わってみては？</a>
    </div>
      <div class="products"><p class="product">Green tea mocha (hot/iced)</p><p class="price">650 yen</p></div>
      <div class="products"><p class="product">Green tea frappuccino</p><p class="price">650 yen</p></div>
      <div class="products"><p class="product">Green tea (Organic)</p><p class="price">450 yen</p></div>
  </section>
</div>
@endsection
