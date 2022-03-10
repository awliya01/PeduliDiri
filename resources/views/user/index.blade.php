@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1> Data User</h1>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telpon</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th><a href="/user/create">Tambah Data User</a></th>
                        </thead>

                        @foreach ($user as $item)
                            <tbody>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <a href="/user/delete/{{ $item->id }}">Hapus</a>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
