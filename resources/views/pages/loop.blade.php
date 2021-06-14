@extends('layouts.app')

@section ('content')
  @for ($i = 0; $i < 5; $i++)
    <span>{{ $i }}</span>
  @endfor

  <p>
  @foreach ($data as $value)
    <span>{{ $value }}</span>
  @endforeach
  </p>
@endsection
