@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css')}}">
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
<div class="attendance">
  <div class="attendance__inner">
    <div class="export-form">
      {{ $contacts->links('vendor.pagination.custom') }}
    </div>

    <table class="attendance__table">
      <tr class="attendance__row">
        <th class="attendance__label">名前</th>
        <th class="attendance__label">勤務開始</th>
        <th class="attendance__label">勤務終了</th>
        <th class="attendance__label">休憩時間</th>
        <th class="attendance__label">勤務時間</th>
      </tr>
      @foreach($contacts as $contact)
      <tr class="attendance__row">
        <td class="attendance__data">{{$dakoku->name}}</td>
        <td class="attendance__data">{{$dakoku->name}}</td>
        <td class="attendance__data">{{$dakoku->name}}</td>
        <td class="attendance__data">{{$dakoku->name}}</td>
        <td class="attendance__data">{{$dakoku->name}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection