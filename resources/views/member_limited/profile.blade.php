@extends('layouts.member')
@section('css','login-nav.css')
@section('css2','style.css')
@section('title','Profile')

<section class="profile">
  <h1>profile</h1>
  <div><p class="personal">name</p><p class="profile-name">{{$user->name}}</p></div>
  <div><p class="personal">mail</p><p class="profile-mail">{{$user->email}}</p></div>
  <form method="POST" action="/logout" class="logout" >
    {{ csrf_field() }}
    <a href="javascript:void(0)" onclick="this.parentNode.submit()">logout</a>
  </form>
</section>
