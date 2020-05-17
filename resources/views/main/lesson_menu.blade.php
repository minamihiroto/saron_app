@extends('layouts.main')
@section('css','style.css')
@section('title','Lessons')
@section('content')

<div class="menu">
  <section class="drink-box">
  <h1>Menu → You can take out</h1>
      <p><span class="mgr-430">Espresso</span>450 yen</p>
      <P><span class="mgr-421">Macchiato</span>480 yen</P>
      <p><span class="mgr-335">Americano (hot/iced)</span>450 yen</p>
      <p><span class="mgr-410">Cappuccino</span>500 yen</p>
      <p><span class="mgr-345">Cafe latte (hot/iced)</span>520 yen</p>    
      <p><span class="mgr-370">Mocha (hot/iced)</span>600 yen</p>
      <p><span class="mgr-459">Blend</span>+100 yen</p>
      <P><span class="mgr-295">Tall size (expect Espresso)</span>+100 yen</P>
      <p><span class="mgr-280">Short size (expect Espresso)</span>-100 yen</p>
  </section>

  <section class="food-box">   
    <h1>Side food</h1>
    <p><span class="mgr-500">Italian waffle</span> 280 yen</p>
    <p><span class="mgr-500">Apple souffle</span>350 yen</p>
    <p><span class="mgr-438">Coconut pound cake</span>350 yen</p>
    <p><span class="mgr-480">Original granola</span>600 yen</p>
    <p><span class="mgr-464">8 Original cookies</span>200 yen each</p>
    <p><span class="mgr-478">3 Original donut</span>200 yen each</p>
  </section>

  <section class="tea-box"> 
    <h1>Japanease tea</h1>
    <div class="tea-text">
      <a>当店では京都宇治で栽培される”さみどり”と呼ばれる品種の茶葉を直送で送ってもらっています。”さみどり”は宇治でしか栽培されておらず、最も高級品だとされています。その”さみどり”を皆様に賞味して頂けるように、抹茶ベースで提供します。この京都の地で日本の豊さを味わってみては？</a>
    </div>
      <p><span class="mgr-350">Green tea mocha (hot/iced)</span>650 yen</p>
      <p><span class="mgr-355">Green tea frappuccino</span>650 yen</p>
      <p><span class="mgr-380">Green tea (Organic)</span>450 yen</p>
  </section>
</div>
@endsection
