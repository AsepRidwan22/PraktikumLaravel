@extends('adminlte::page')

@section('titel', 'Pengelolaan Buku')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justifly-conternt-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ _('Pengelolaan Buku') }}</div>
                    <div class="card-body">
                        <table id="table-data" class="table table-borderer">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>JUDUL</th>
                                    <th>PENULIS</th>
                                    <th>TAHUN</th>
                                    <th>PENERBIT</th>
                                    <th>COVER</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach (books as book)
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $book->judul }}</td>
                                    <td>{{ $book->penulis }}</td>
                                    <td>{{ $book->tahun }}</td>
                                    <td>{{ $book->penerbit }}</td>
                                    <td>
                                        @if ($book->cover !== null)
                                            <img src="{{ asset('storage/cover_buku/'.$book->cover) }}" alt="" srcset="">
                                        @else

                                        @endif
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
