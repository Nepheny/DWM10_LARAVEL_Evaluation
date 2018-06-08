@extends('template')
@section('content')
<h1>Liste d'employés</h1>
<div class="table-content">
    <table cellspacing="0" cellpadding="10px" class="base-table">
        <th>Nom</th>
        <th>Email</th>
        <th>Ancienneté</th>
        <th>Lieu de travail</th>
        <th>Supprimer</th>
        <th>Modifier</th>
        @foreach ($employees as $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->seniority }}</td>
                <td>{{ $value->workplace->workplace}}</td>

                <td>
                    <form action="/employee/delete" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $value['id'] }}"/>
                        <input type="submit" name="delete" value="X" class="form-button">
                    </form>
                </td>
                <td>
                    <form action="/employee/update" method="GET">
                        @csrf
                        <input type="hidden" name="id" value="{{ $value['id'] }}"/>
                        <input type="submit" name="update" value="MAJ" class="form-button">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection