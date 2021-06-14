@extends('layouts.app')

@section('content')
    <div class="text-gray-700">
        @if (session('message'))
            <div x-data="{ open: true, close() { this.open = false } }">
                <div  x-show="open" class="flex justify-between p-1 text-green-500 bg-green-100">
                    <p>
                        {{ session('message') }}
                    </p>
                    <button class="p-1 text-red-600" @click="close()">x</button>
                </div>
            </div>
        @endif
        <h1 class="text-5xl text-center bold">Cars</h1>

        <div class="flex justify-end my-2">
            <a class="px-3 py-1 text-sm bg-blue-500 text-blue-50" href="{{ route('cars.create') }}">Create Car</a>
        </div>

        <div class="w-5/6 m-auto divide-y-2 divide-gray-300 divide-solid">
            @forelse ($cars as $car)
            <div class="py-4">
                <div class="flex items-center space-x-2">
                    <span class="italic font-semibold uppercase text-cs">Founded: {{ $car->founded }}</span>
                    <a class="text-sm text-blue-500 hover:underline" href="{{ route('cars.edit', $car) }}">Edit</a>
                    <form action="{{ route('cars.destroy', $car) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="mx-1 text-sm text-red-500 hover:underline">Delete</button>
                    </form>
                </div>

                <a class="text-5xl hover:underline" href="{{ route('cars.show', $car) }}">{{ $car->name }}</a>

                <p class="py-6 text-lg text-gray-600">{{ $car->description }}</p>
            </div>
            @empty
                <p>No Cars found!</p>
            @endforelse
        </div>
    </div>
@endsection
