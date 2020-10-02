@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->name}} </td>
                    <td>{{ $r->email}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection