@extends('layouts.app')
    
@section('title')
    <title>Dashboard - gotta.watch</title>
@stop

@section('head')
    <link rel="stylesheet" href="{{ elixir('css/home.css') }}">
@stop

@section('content')
        <div class="container">
            <div class="panel panel-default" id="left-panel">
                <div class="panel-heading text-center">Watchlist <span class="glyphicon glyphicon-film"></span></div>
                <div class="panel-body">
                    <!-- show list -->
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                </div>
            </div>
        
            <!-- search box -->
            <div class="panel panel-default text-center" id="right-panel">
                <div class="panel-heading">Search shows</div>
                <div class="panel-body">
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                    asdbr <br>
                </div>
                <!-- search results -->
                
            </div>
        </div>
@stop

@section('js')
    <script src="{{ elixir('js/js.js') }}"></script>
@stop