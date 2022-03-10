<div class="card">
    <div class="card-header">
        <h4>Profile</h4>
    </div>

    <img class="card-img-top"
        @if (Auth::user()->foto > 0) src="{{ asset('foto/' . Auth::user()->foto) }}"  style="height: 200px;" @else
        src="{{ asset('foto/default.png') }}" @endif
        alt="Card image cap">

    <div class="card-body">
        <h5 class="card-title">{{ Auth::user()->nama }}</h5>
        <div class="row">
            <div class="col-md-4">
                <label for="nik">NIK</label>
            </div>
            <div class="col-md-8">
                <label>: {{ Auth::user()->nik }}</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="email">Email</label>
            </div>
            <div class="col-md-8">
                <label>: {{ Auth::user()->email }}</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="telp">Telpon</label>
            </div>
            <div class="col-md-8">
                <label>: {{ Auth::user()->telp }}</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="username">Username</label>
            </div>
            <div class="col-md-8">
                <label>: {{ Auth::user()->username }}</label>
            </div>
        </div>

        @if (Request::url() == route('perjalanan.data'))
            <div class="row">
                <div class="col-md-12">
                    <a href="/user/edit/{{ Auth::user()->id }}" class="btn btn-block btn-primary ">Edit Profile</a>
                </div>
            </div>
        @endif

    </div>
</div>
