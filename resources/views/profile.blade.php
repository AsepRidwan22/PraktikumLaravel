@extends('adminlte::page')

@section('titel', 'Dashboard')

@section('content_header')
    <h1>profile</h1>
@stop

@section('content')
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Password</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="password">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
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
