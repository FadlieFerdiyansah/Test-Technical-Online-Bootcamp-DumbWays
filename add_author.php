<?php include('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="author">Nama Author</label>
                    <input type="text" class="form-control" id="author" name="name_author">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Author</button>
            </form>
        </div>
    </div>
</div>

<?php
include('koneksi.php');
if (isset($_POST['tambah'])) {

    $name_author         = $_POST['name_author'];

    $sql = mysqli_query($koneksi, "INSERT INTO author (name_author) VALUES ('$name_author')") or die(mysqli_error($sql));

    if ($sql) {
        echo '
            <script>
                alert("Data Berhasil Ditambah");
            </script>
            ';
    } else {
        echo '
            <script>
                alert("Data Gagal Ditambah");
            </script>
            ';
    }
}

?>