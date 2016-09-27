@extends('layouts.app')

@section('content')

    <div class="container">

        @include('alerts.header-message')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                
                    <div class="panel-heading">{{ $content_title }}</div>

                    <div class="panel-body">
                        @yield('main')
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@stop
