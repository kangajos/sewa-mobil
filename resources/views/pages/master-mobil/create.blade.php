@extends('layouts.auth')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form action="{{ route('master_mobil.store') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">Data Baru</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Merk Mobil</label>
                                    <input type="text" name="merk" class="form-control" placeholder="merk.." required>
                                </div>
                                <div class="form-group">
                                    <label for="">Type Mobil</label>
                                    <input type="text" name="type" class="form-control" placeholder="type.." required>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Mobil</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Rp.." required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
