<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #dee9ff;
        }

        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form .form-icon {
            text-align: center;
            background-color: #5891ff;
            border-radius: 50%;
            font-size: 40px;
            color: white;
            width: 100px;
            height: 100px;
            margin: auto;
            margin-bottom: 50px;
            line-height: 100px;
        }

        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .social-media {
            max-width: 600px;
            background-color: #fff;
            margin: auto;
            padding: 35px 0;
            text-align: center;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            color: #9fadca;
            border-top: 1px solid #dee9ff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form .social-icons {
            margin-top: 30px;
            margin-bottom: 16px;
        }

        .registration-form .social-icons a {
            font-size: 23px;
            margin: 0 3px;
            color: #5691ff;
            border: 1px solid;
            border-radius: 50%;
            width: 45px;
            display: inline-block;
            height: 45px;
            text-align: center;
            background-color: #fff;
            line-height: 45px;
        }

        .registration-form .social-icons a:hover {
            text-decoration: none;
            opacity: 0.6;
        }

        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

    </style>
</head>

<body>
    {{-- <form action="/user/store" method="post">
        @csrf
        <table>
            <label for="nik">NIK</label>
            : <input type="text" name="nik" id="nik">
            <br>
            <label for="nama">Nama</label>
            : <input type="text" name="nama" id="nama">
            <br>
            <label for="email">Email</label>
            : <input type="text" name="email" id="email">
            <br>
            <label for="telp">Telpon</label>
            : <input type="text" name="telp" id="telp">
            <br>
            <label for="username">Username</label>
            : <input type="radio" name="admin" id="admin">
            <label for="admin">admin</label>
            <input type="radio" name="admin" id="admin">
            <label for="user">user</label>
            <br>
            <label for="password">Password</label>
            : <input type="password" name="password" id="password">
            <br>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password">
            <br>
            <button type="submit">Simpan</button>
            <a href="/user">Kembali</a>
        </table>
    </form> --}}

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Easiest Way to Add Input Masks to Your Forms</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="registration-form">
            <form action="/user/store" method="post">
                @csrf
                <div class="mb-5">
                    <h1>Tambah Data User</h1>
                </div>
                <div class="form-group">
                    {{-- <label for="role">Role</label> --}}
                    {{-- <input type="text" class="form-control item" name="role" id="role" placeholder="role"> --}}
                    {{-- <select name="role" id="role" class="form-control item" requireds>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select> --}}
                    <input type="radio" name="role" id="admin" value="admin" required>&nbsp;<label
                        for="admin">admin</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="role" id="user" value="user" required>&nbsp;<label for="user">user</label>

                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control item" name="nik" id="nik" placeholder="nik">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control item" name="nama" id="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control item" name="email" id="email" placeholder="email@gmail.com">
                </div>

                <div class="form-group">
                    <label for="telp">Telpon</label>
                    <input type="text" class="form-control item" name="telp" id="telp" placeholder="telpon">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control item" name="username" id="username"
                        placeholder="contoh->joko">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control item" name="password" id="password"
                        placeholder="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control item" name="confirm_password" id="confirm_password"
                        placeholder="confirm_password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account"> Simpan </button>
                </div>
                <div class="form-group">
                    <a href="/user" class="btn btn-block  create-account">Batal</a>
                </div>
            </form>
            {{-- <div class="social-media">
                <h5>Sign up with social media</h5>
                <div class="social-icons">
                    <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                    <a href="#"><i class="icon-social-google" title="Google"></i></a>
                    <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                </div> --}}
        </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
        </script>
        <script src="assets/js/script.js"></script>
    </body>

    </html>
    <script>
        $(document).ready(function() {
            $('#birth-date').mask('00/00/0000');
            $('#phone-number').mask('0000-0000');
        })
    </script>

</body>

</html>
