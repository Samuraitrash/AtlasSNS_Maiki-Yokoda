@extends('layouts.login')

@section('content')

<div class="search-form">
  <form acton="/search" method="post">
    @csrf
    <input type="search" name="search" placeholder="ユーザー名" value="@if(isset($search)){{ $search }} @endif">
    <button type="submit" value="検索"><img src="{{ asset('./images/search.png') }}"></button>
  </form>

</div>

@endsection
