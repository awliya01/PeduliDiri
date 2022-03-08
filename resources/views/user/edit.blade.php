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
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                    name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
