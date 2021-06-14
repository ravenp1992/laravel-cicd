<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" media="screen" title="no title" charset="utf-8">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>App.blade</title>
  </head>
  <body>
    <div class="max-w-md min-h-screen p-5 mx-auto lg:max-w-7xl bg-gray-50">
      <header>
          {{-- <div x-data> --}}
          {{--     <button @click="console.log('alpinejs is working')">Click</button> --}}
          {{-- </div> --}}
          {{-- <div x-effect="console.log('Count is '+count)"></div> --}}

          {{-- <div x-data="{ open: false, toggle() { this.open = ! this.open } }"> --}}
          {{--   <button @click="toggle()">Toggle Content</button> --}}

          {{--   <div x-show="open"> --}}
          {{--       Content... --}}
          {{--   </div> --}}
          {{-- </div> --}}
          @include('layouts.header')
      </header>

      <main class="my-8">
          @yield('content')
      </main>

      <footer>
          @include('layouts.footer')
      </footer>
    </div>
  </body>
</html>
