<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! cooker_resource('app.css') !!}
</head>
<body class="{{auth()->guest() ? 'logged-out' : 'logged-in'}}">
    <main>
        <img src="/images/toast.svg"  alt="" class="bg">
        @if(auth()->check())
            @include('uikit.menu')
        @endif
        @yield('content')
        @if(auth()->check())
            @include('uikit.footer')
        @endif
    </main>
    {!! cooker_resource('app.js') !!}
</body>
</html>