@extends('layouts.auth')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">Mutasi
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
                                                <a href="{{ route('master_mobil.edit', $item->id) }}"
                                                    class="btn btn-info btn-sm">Edit</a>
                                                <form action="{{ route('master_mobil.destroy', $item->id) }}"
                                                    method="POST" onclick="return confirm('Yakin ingin hapus?')">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
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
