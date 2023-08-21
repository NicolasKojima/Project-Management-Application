@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" align-text^>
                <p>{{ __('You are logged in!') }}</p>

                <!-- projects link -->
                <a href="/projects" class="btn btn-primary my-2">Home</a>

                <!-- Logout form -->
                <form id="logout-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
