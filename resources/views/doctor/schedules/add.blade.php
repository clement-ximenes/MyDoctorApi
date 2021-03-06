@extends('layouts.doctor')

@section('title')
<h2>Doctor</h2>
@endsection

@section('content')
    <div class="container-fluid">
                <h5 class="card-title">Ajouter un créneau</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('doctor.schedule.add') }}">
                @csrf
                    <div class="mb-3">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="start" class="form-label">Début</label>
                        <input type="time" id="start" name="start" required>                    
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">Fin</label>
                        <input type="time" id="end" name="end" required>                    
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="submit">Créer</button>
                    </div>
                </form>
        </div>
@endsection