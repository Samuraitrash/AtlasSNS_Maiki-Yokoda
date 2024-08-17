@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>
<div class="container">
  {!! Form::open(['url' => '/top']) !!}
  {{ Form::token() }}

  <div class="form">
    {{  Form::input('text', 'post', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容'])  }}

  <button type="submit" class="btn btn-success pull-right"><img src="images/post.png" alt="送信"></button>
  {!! Form::close() !!}
</div>
<div>
  @foreach($list as $list)
  <tr>
    <td>{{  $list->user_id  }}</td>
    <td>{{  $list->post  }}</td>
    <td>{{  $list->create_at  }}</td>
  </tr>
  @endforeach
</div>
@endsection
