@extends('layouts.admin')

@section('title')
<h2>Admins</h2>
@endsection

@section('content')
    <div class="container-fluid">
                <h5 class="card-title">Supprimer un administrateur</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.deleteAdmin', $admin->id) }}">
                @csrf
                @method('DELETE')
                    <div class="mb-3">
                        <h3>{{ $admin->lastName }}</h3>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </div>
                </form>
        </div>
@endsection