<?php
// Proses formulir jika metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama = htmlspecialchars($_POST["nama"]);
    $nik = htmlspecialchars($_POST["nik"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $tempat = htmlspecialchars($_POST["tempat"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $pekerjaan = htmlspecialchars($_POST["pekerjaan"]);
    $jkel = htmlspecialchars($_POST["jkel"]);
    $alamat = htmlspecialchars($_POST["alamat"]);

    // Menampilkan hasil input
    $result = "
        <p>Nama: $nama</p>
        <p>NIK: $nik</p>
        <p>Email: $email</p>
        <p>Password: *****</p>
        <p>Tempat Lahir: $tempat</p>
        <p>Tanggal Lahir: $tanggal</p>
        <p>Pekerjaan: $pekerjaan</p>
        <p>Jenis Kelamin: $jkel</p>
        <p>Alamat: $alamat</p>
    ";

    echo $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata RW</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Biodata RW</h2>
        <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" class="form-control" id="nik" name="nik" required maxlength="16">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required maxlength="20">
            </div>

            <div class="form-group">
                <label for="tempat">Tempat lahir:</label>
                <input type="text" class="form-control" id="tempat" name="tempat" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjan:</label>
                <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="PNS">PNS</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="jkel1" name="jkel" value="Laki-Laki">
                    <label class="form-check-label" for="jkel1">Laki-Laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="jkel2" name="jkel" value="Perempuan">
                    <label class="form-check-label" for="jkel2">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Rumah:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>

        <div id="result"></div>
    </div>

    <!-- Bootstrap JS, jQuery, Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>