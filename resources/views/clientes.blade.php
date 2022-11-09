@extends('main')

@section('title', 'Clientes')
@section('scripts')

@endsection
@section('content')
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('abacate')
isto é uma abacate
@endsection