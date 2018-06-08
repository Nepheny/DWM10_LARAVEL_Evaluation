@extends('template')
@section('content')
    <h1>Ajouter des employés</h1>
    <div class="employee-form-content">
        <div>
            <form method="POST" action="/employee/update" class="employee-form">
                @csrf          
                <input type="hidden" name="id" value="{{ $employee->id }}"/>
                <div class="employee-form-input">
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" value="{{ $employee->name }}"/>
                </div>
                <div class="employee-form-input">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" value="{{ $employee->email }}"/>
                </div>
                <div class="employee-form-input">
                    <label for="seniority">Arrivée dans la société :</label>
                    <input type="date" name="seniority" id="seniority" value="{{ $employee->seniority }}"/>
                </div>
                <div class="employee-form-input">
                    <label for="workplace">Lieu :</label>
                    <select name="workplace">
                        @foreach ($workplaces as $workplace)
                        @if ($employee->workplace_id == $workplace->id)
                        <option value="{{ $workplace->id }}" selected>{{ $workplace->workplace }}</option>
                        @else
                            <option value="{{ $workplace->id }}">{{ $workplace->workplace }}</option>
                        @endif
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