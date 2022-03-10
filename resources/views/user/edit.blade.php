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
                        <h1>Edit Data User</h1>
                    </div>

                    <div class="card-body">
                        <form action="/user/update/{{ $edit->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                        name="nik" value="{{ $edit->nik }}" required autocomplete="nik" autofocus>

                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ $edit->nama }}" required autocomplete="nama" autofocus>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $edit->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telp"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telpon') }}</label>

                                <div class="col-md-6">
                                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror"
                                        name="telp" value="{{ $edit->telp }}" required autocomplete="telp" autofocus>

                                    @error('telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" value="{{ $edit->foto }}" autocomplete="foto" autofocus>

                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{-- <div class="col-md-8"> --}}
                                    <a href="/diri" class="btn btn-secondary" style="width:200px">Kembali</a>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-md-6 text-right">

                                    {{-- <div class="col-md-8 text-right"> --}}
                                    <button type="submit" class="btn btn-primary" style="width:200px">Simpan</button>
                                    {{-- </div> --}}
                                </div>

                            </div>

                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
