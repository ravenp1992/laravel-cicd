@extends('layouts.app')

@section('content')
  <h1 class="text-xl font-semibold text-gray-700 hover:underline">All Posts</h1>

  <div class="mt-8 grid grid-cols-4 gap-4">
    @forelse ($posts as $post)
      <div class="flex flex-col p-2 border-gray-100 shadow">
        <a class="py-1 text-xl text-center text-gray-700 capitalize hover:underline" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <p class="text-sm tracking-wider text-gray-600">{{ $post->description }}</p>
      </div>
    @empty
      <p class="text-sm text-gray-500">No Post found!</p>
    @endforelse
  </div>
@endsection
