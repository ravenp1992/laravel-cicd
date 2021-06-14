<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Index.blade</title>
  </head>
  <body>
    <h1>Products</h1>
    {{-- {{ $title }} --}}

    {{-- @foreach ($data as $key => $value) --}}
    {{--
    <p>{{ $key }} - {{ $value }}</p>
    --}}
    {{-- @endforeach --}}

    @foreach ($phones as $key => $value)
      <div>{{ $key }} - {{ $value }}</div>
    @endforeach
  </body>
</html>
