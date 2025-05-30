@extends('base')
@section('content')
    <div>
        @include('layouts.sidebar')
    </div>

    <div>
        @include('layouts.header')
        <div>
            <div>
                @yield('main-content')
            </div>
        </div>
    </div>
@endsection
