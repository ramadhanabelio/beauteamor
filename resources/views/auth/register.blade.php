<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauteamor</title>
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- My CSS --}}
    {{-- <link rel="stylesheet" type="text/css" href="css/login.css"> --}}
</head>

<body>
    <!-- Form Registrasi -->
    <div class="container">
        <h3 class="text-center mt-3 mb-5">HALAMAN REGISTRASI</h3>
        <div class="card p-5 mb-5">
            <form method="POST" action="simpan_register.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="user">Username</label>
                        <input type="text" class="form-control" id="user" name="username"
                            placeholder="Masukan Username" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="password"
                            placeholder="Masukan Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama_lengkap"
                        placeholder="Masukan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_laki"
                            value="Laki-Laki" required>
                        <label class="form-check-label" for="jk_laki">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_perempuan"
                            value="Perempuan" required>
                        <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl" name="tanggal_lahir" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rumah">Alamat</label>
                        <input type="text" class="form-control" id="rumah" name="alamat"
                            placeholder="Masukan Alamat" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telp">No. Telephone</label>
                        <input type="text" class="form-control" id="telp" name="hp"
                            placeholder="No. Telephone" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sts">Status Registrasi</label>
                        <select id="sts" class="form-control" name="status" required>
                            <option selected disabled>Pilih...</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
    <!-- Akhir Form Registrasi -->

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
