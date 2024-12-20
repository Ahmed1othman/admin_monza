@extends('admin::layouts.master')

@section('content')
    <div class="layout-px-spacing">

        @if(auth()->user()->type == "admin")
            @include('admin::home.parts.admin')
         
        @elseif(auth()->user()->type == "user")
            @include('admin::home.parts.user')
        @endif

    </div>
@endsection
