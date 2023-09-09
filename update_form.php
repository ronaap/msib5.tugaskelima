<?php
include_once 'koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku WHERE id_buku = $id_buku";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Data Buku</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Form Data Buku</h1>

        <!-- form awal -->
        <form id="dataForm" action="update_buku.php" method="post">
            <div class="form-group">
                <label for="id_buku">Id Buku:</label>
                <input type="number" class="form-control" id="id_buku" name="id_buku" value="<?php echo $row['id_buku']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>
            </div>

            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $row['pengarang']; ?>" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>" required>
            </div>

            <div class="form-group">
                <label for="isbn">INBN:</label>
                <input type="number" class="form-control" id="isbn" name="isbn" value="<?php echo $row['isbn']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>