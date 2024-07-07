@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('link')
<form action="/" method="post">
  @csrf
  <input class="header__link" type="submit" value="ホーム">
</form>
<form action="/attendance" method="post">
  @csrf
  <input class="header__link" type="submit" value="日付一覧">
</form>
<form action="/login" method="post">
  @csrf
  <input class="header__link" type="submit" value="ログアウト">
</form>
@endsection

@section('content')
<div class="dakoku-form">
  <h2 class="dakoku-form__heading">～さんお疲れ様です！</h2>
  <div class="login-form__inner">
    <form class="dakoku-form__form" action="/" method="post">
      @csrf
      <div class="dakoku-form__group">
        <input class="dakoku-form__btn" type="submit" value="勤務開始">
        <input class="dakoku-form__btn" type="submit" value="勤務終了">
        <input class="dakoku-form__btn" type="submit" value="休憩開始">
        <input class="dakoku-form__btn" type="submit" value="休憩終了">
      </div>
    </form>
  </div>
</div>
@endsection('content')