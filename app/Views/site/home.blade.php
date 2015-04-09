@extends('site.layout')

@section('content')
<br>
<div class="row">
  <div class="col-md-8">
    <h1>Site Home</h1>
    @if ( !empty( $status ))
      <div class="alert alert-success">{{ $status }}</div>
    @endif
    <p>Hello</p>
  </div>
</div>
@stop