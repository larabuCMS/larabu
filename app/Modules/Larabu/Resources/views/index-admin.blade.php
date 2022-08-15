@extends('larabu::layouts.master-admin')

@section('content')
    <h1>Hello World - admin page</h1>

    <p>
        Admin page
    </p>
    <p>
        This view is loaded from module: {!! config('larabu.name') !!}

    </p>
@endsection
