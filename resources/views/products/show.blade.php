<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Show.blade</title>
  </head>
  <body>
    @isset($phone)
      {{ $phone }}
    @endisset

    @unless($phone)
      <p>What?</p>
    @endunless
  </body>
</html>
