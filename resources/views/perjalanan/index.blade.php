@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- profile --}}
            <div class="col-md-4">
                @include('perjalanan.profile.main')
            </div>


            {{-- data perjalanan --}}
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Data Perjalanan</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                        <th>Tanggal Perjalanan</th>
                                        <th>Jam</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                        <th><a href="/diri/create" class="btn btn-success">Tambah</a></th>
                                    </thead>

                                    @foreach ($table as $no => $data)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->jam }}</td>
                                            <td>{{ $data->lokasi }}</td>
                                            <td>{{ $data->suhu_tubuh }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#delete">
                                                    Hapus
                                                </button>
                                                @include('perjalanan.modal.delete')
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
