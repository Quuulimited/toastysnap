@extends('uikit.ui')
@section('content')
    <div class="content">
        <h1>{{auth()->user()?->name ?? 'My account'}}</h1>
        <h2>Your toasts</h2>
        <div id="meStage"></div>

    </div>
@endsection