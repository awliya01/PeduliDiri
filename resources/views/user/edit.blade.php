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
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Provinsi') }}</label>

                                <div class="col-md-6">
                                    <select name="selectProvinsi" id="selectProvinsi" class="form-control">

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="selectKabupaten"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Kabupaten/Kota') }}</label>

                                <div class="col-md-6">
                                    <select name="selectKabupaten" id="selectKabupaten">

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="selectKecamatan"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Kecamatan') }}</label>

                                <div class="col-md-6">
                                    <select name="selectKecamatan" id="selectKecamatan">

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="selectKelurahan"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Kelurahan') }}</label>

                                <div class="col-md-6">
                                    <select name="selectKelurahan" id="selectKelurahan">

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="alamat" id="alamat" cols="30"
                                        rows="10"></textarea>
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
    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKabupaten = document.getElementById('selectKabupaten');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');

        document.addEventListener('DOMContentLoaded', function() {
            fetchProvinsi();
            selectKabupaten.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            getValueToAlamat();
        });
        const config = {
            method: 'GET'
        }
        // fetch provinsi get data
        async function fetchProvinsi() {
            const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
            await fetch(URL, config)
                .then(response => response.json())
                .then(provinsi => console.log(provinsi))
                .then(provinsi => {
                    if (provinsi != null || undefined) {
                        provinsi.map(data => {
                            // console.log(data);
                            let opt = document.createElement('option');
                            // console.log(opt);
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                            // console.log(selectProvinsi)
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectProvinsi.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }
        // fetch kabupaten/kota get data
        async function fetchKabupaten(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kabupaten => {
                    if (kabupaten !== null || undefined) {
                        kabupaten.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKabupaten.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKabupaten.appendChild(opt);
                    }
                })
        }
        // fetch kecamatan get data
        async function fetchKecamatan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKecamatan.appendChild(opt);
                    }
                })
        }

        async function fetchKelurahan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data Tidak Tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                })
        }
        selectProvinsi.addEventListener('change', () => {
            fetchKabupaten(selectProvinsi.value);
            selectKabupaten.style.display = "block";
            selectKabupaten.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKabupaten.addEventListener('change', () => {
            fetchKecamatan(selectKabupaten.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value =
                    `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);

            });
        }
    </script>
@endsection
