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
        <h1>Data Buku</h1>
        <!-- Tambah Data Buku -->
        <a href="index.php" class="btn btn-primary mb-3">Tambah Data Buku</a>

        <?php
        include_once('koneksi.php');

        $sql = "SELECT * FROM buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                </tr>
            </thead>
            <tbody>';

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['id_buku'] . "</td>
                    <td>" . $row['judul'] . "</td>
                    <td>" . $row['pengarang'] . "</td>
                    <td>" . $row['tahun_terbit'] . "</td>
                    <td>" . $row['isbn'] . "</td>
                    <td> 
                        <a href='update_form.php?id_buku=" . $row['id_buku'] . "' class='btn btn-primary'>Edit</a>
                        <button onclick='confirmDelete(" . $row['id_buku'] . ")' class='btn btn-danger'>Delete</button>
                    </td>
                </tr>";
            }

            echo '</tbody>
            </table>';
        } else {
            echo "Tidak ada data buku.";
        }

        $conn->close();
        ?>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
        function confirmDelete(id) {
            var confirmed = confirm("Apakah Anda yakin untuk menghapus data?");
            if (confirmed) {
                window.location.href = "delete_buku.php?id_buku=" + id;
            }
        }
    </script>

</body>

</html>