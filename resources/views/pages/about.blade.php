@extends('layouts.app')

@section('content')
  <h1>Pages About view</h1>

  @if (5 > 10)
    5 is lower than 10
  @elseif (5 > 10)
    5 is indeed lower than 10
  @else
    All conditions are wrong
  @endif

  <p>
  @unless ($name)
    {{ $name }}
  @endunless
  </p>

  <p>
  @unless (empty($name))
    name isn't empty
  @endunless
  </p>

  <p>
  @isset ($name)
  name has been set
  @endisset
  </p>

  <p>
  @empty ($name)
    name is empty
  @endempty
  </p>

  <p>
  @switch ($option)
    @case(1)
      <h4>{{ $option }}</h4>
      @break
    @case(2)
      <h4>{{ $option }}</h4>
      @break
    @default
      <h4>Option not found</h4>
  @endswitch
  </p>
@endsection
