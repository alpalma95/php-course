<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Site | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  @include('partials._header')
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @yield('main')
    </div>
  </main>
</div>
  
</body>
</html>