@extends('layouts.app')

@section('content')
    <div class="max-w-md p-4 m-auto bg-white border">
        <h1 class="my-2 text-xl text-center text-gray-800">Create Car</h1>

        {{-- @if ($errors->any()) --}}
        {{--     <div class="p-4 bg-red-200"> --}}
        {{--         <ul> --}}
        {{--             @foreach ($errors->all() as $error) --}}
        {{--                 <li>{{ $error }}</li> --}}
        {{--             @endforeach --}}
        {{--         </ul> --}}
        {{--     </div> --}}
        {{-- @endif --}}

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mt-2">
                <label class="py-1 text-sm">Name</label>
                <input class="p-1 border outline-none @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="p-1 my-1 text-sm bg-red-500 text-red-50">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mt-2">
                <label class="py-1 text-sm">Founded</label>
                <input class="p-1 border outline-none @error('founded') is-invalid @enderror" type="text" name="founded" value="{{ old('founded') }}">
                @error('founded')
                    <p class="p-1 my-1 text-sm bg-red-500 text-red-50">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mt-2">
                <label class="py-1 text-sm">Description</label>
                <textarea class="py-1 border outline-none @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <p class="p-1 my-1 text-sm bg-red-500 text-red-50">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <button class="w-full p-1 bg-green-500 text-green-50 hover:bg-green-400" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
