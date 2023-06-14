<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    {!! cooker_resource('app.css') !!}
</head>
<body>
    <main>
        @yield('content')
    </main>
    {!! cooker_resource('app.js') !!}
</body>
</html>