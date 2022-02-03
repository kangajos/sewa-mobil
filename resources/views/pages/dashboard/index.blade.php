@extends('layouts.auth')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <p>Selamat Datang {{ session('name') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
