<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    {!! cooker_resource('app.css') !!}
</head>
<body class="{{auth()->guest() ? 'logged-out' : 'logged-in'}}">
    <main>
        <img src="/images/toast.svg"  alt="" class="bg">

        @yield('content')
    </main>
    {!! cooker_resource('app.js') !!}
</body>
</html>