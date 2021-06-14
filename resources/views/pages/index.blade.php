@extends('layouts.app')

@section('content')
  <h1 class="text-xl font-semibold text-gray-800">welcome to pages controller index view</h1>

  <div>
    {{ URL('') }}
  </div>

  <div class="flex">
    <img src="{{ URL('images/nature1.jpeg') }}" alt="" style="height: 300px; width: 300px;">
    <img src="{{ URL('images/nature2.jpeg') }}" alt="" style="height: 300px; width: 300px;">
    <img src="{{ URL('images/nature3.jpeg') }}" alt="" style="height: 300px; width: 300px;">
  </div>

  <div class="flex">
    <img src="{{ URL('storage/nature1.jpeg') }}" alt="" style="height: 300px; width: 300px;">
    <img src="{{ URL('storage/nature2.jpeg') }}" alt="" style="height: 300px; width: 300px;">
    <img src="{{ URL('storage/nature3.jpeg') }}" alt="" style="height: 300px; width: 300px;"> </div>

@endsection
