@extends('layouts.app')

@section('content')
  <div class="flex flex-col max-w-sm p-2 border-gray-100 shadow">
    <h2 class="py-1 text-xl text-center text-gray-700 cursor-pointer hover:underline">{{ $post-> title }}</h2>
    <p class="text-sm tracking-wider text-gray-600">{{ $post->description }}</p>
  </div>
@endsection
