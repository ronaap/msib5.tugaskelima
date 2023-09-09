<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- my css -->
    <style>
        body {
            padding-top: 70px;
        }

        .ml-auto {
            color: #ffff;
            font-weight: bold;
        }
    </style>

    <title>Data Buku</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Rona Aprilia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto">latihanMsib</div>

        </div>
    </nav>
    <!-- Akhir Navbar -->

    <div class="container mt-4">
        <h1>Form Data Buku</h1>

        <!-- form awal -->
        <form id="dataForm" action="simpan.php" method="post" onsubmit="return validateForm()">

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>

            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang">
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
            </div>

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="number" class="form-control" id="isbn" name="isbn">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
        function validateForm() {
            var judul = document.getElementById("judul").value;
            var pengarang = document.getElementById("pengarang").value;
            var tahun_terbit = document.getElementById("tahun_terbit").value;
            var isbn = document.getElementById("isbn").value;

            if (judul === "" || pengarang === "" || tahun_terbit === "" || isbn === "") {
                alert("Semua field harus diisi.");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>