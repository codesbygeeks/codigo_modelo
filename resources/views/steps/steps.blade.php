@extends('layouts.template.template')

@section('title', 'Vertical steps')

@section('css')
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
@endsection

@section('js-head')
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.cookie-1.3.1.js"></script>
    <script src="js/jquery.steps.min.js"></script>
@endsection

@section('content')

    <header>
        <h1>Vertical steps Demo</h1>
    </header>

    <div id="wizard">

        @include('steps.first')

        @include('steps.second')

        @include('steps.third')

        @include('steps.forth')

    </div>

@endsection

@section('js-body')
    <script>
        $(function ()
        {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical"
            });
        });
    </script>
@endsection
