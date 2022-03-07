<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/user/store" method="post">
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
    </form>
</body>

</html>
