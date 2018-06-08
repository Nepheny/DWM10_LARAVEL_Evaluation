@extends('template')
@section('content')
<h1>Ajouter des employés</h1>
<div class="employee-form-content">
    <div>
        <form method="POST" action="/employee/new" class="employee-form">
            @csrf          
            <input type="hidden" name="id"/>
            <div class="employee-form-input">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name"/>
            </div>
            <div class="employee-form-input">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email"/>
            </div>
            <div class="employee-form-input">
                <label for="seniority">Arrivée dans la société :</label>
                <input type="date" name="seniority" id="seniority"/>
            </div>
            <div class="employee-form-input">
                <label for="workplace">Lieu :</label>
                <select name="workplace">
                    @foreach ($workplaces as $workplace)
                    <option value="{{ $workplace->id }}">{{ $workplace->workplace }}</option>
                    @endforeach
                </select>
            </div>
            <div class="employee-form-submit">
                <input type="submit" name="" value="Ajouter"/>
            </div>
        </form>
    </div>
</div>
@endsection