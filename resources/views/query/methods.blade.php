@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h1 class="page-header">
                    {{ $title }}
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Genero</th>
                            <th>Biografia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('query.partials.list-users')
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@stop