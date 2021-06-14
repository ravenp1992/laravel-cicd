@extends('layouts.app')

@section('content')
    <div class="p-2 bg-white">
        <h1 class="text-4xl text-gray-800">Car Details</h1>

        <div class="mt-4">
            <div class="flex items-end">
                <h2 class="text-2xl text-gray-800">{{ $car->name }}</h2>
                <h3 class="text-sm italic text-gray-500">{{ $car->founded }}</h3>
            </div>
            <p>{{ $car->description }}</p>
        </div>
    </div>
@endsection
