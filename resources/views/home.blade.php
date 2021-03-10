@extends('adminlte::page')

@section('titel', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">

    </div>
    <strong> Copyright & copy; {{ date('Y') }} <a href="http://ft.unsur.ac.id" target="_blank">Fakultas Teknik, Universitas Suryakancana</a></strong> All rights reserved.
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('Hi!'); </script>
@stop
