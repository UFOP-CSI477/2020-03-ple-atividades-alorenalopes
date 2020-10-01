@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Equipamentos</th>
            </tr>
        </thead>
        <tbody>

            @foreach($dados as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->nome }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection