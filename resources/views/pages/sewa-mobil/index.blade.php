@extends('layouts.auth')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">List Mobil
                            <a href="{{ route('master_mobil.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masterMobil as $item)
                                        <tr>
                                            <td>
                                                {{ $item->merk }}
                                            </td>
                                            <td>
                                                {{ $item->type }}
                                            </td>
                                            <td>
                                                Rp{{ number_format($item->harga, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                <form action="{{ route('sewa_mobil.store', $item->id) }}"
                                                    method="POST" onclick="return confirm('Yakin ingin sewa ini?')">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-success">Sewa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if ($masterMobil->links())
                            <div class="card-footer d-flex justify-content-center">{!! $masterMobil->links() !!}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
