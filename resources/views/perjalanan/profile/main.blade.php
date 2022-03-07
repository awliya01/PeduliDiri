<div class="card">
    <img class="card-img-top" src="{{ asset('foto/878006.jpg') }}" alt="Card image cap">
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

        <div class="row">
            <div class="col-md-12">
                <a href="" class="btn btn-block btn-primary ">Edit</a>
            </div>
        </div>


    </div>
</div>
