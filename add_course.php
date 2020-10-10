<?php include('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="kursus">Nama Kursus</label>
                    <input type="text" class="form-control" id="kursus" name="name_course">
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="text" class="form-control" id="thumbnail" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="duration">Durasi</label>
                    <input type="text" class="form-control" id="duration" name="duration">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" rows="3" id="description" name="description"></textarea>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include('koneksi.php');
if (isset($_POST['tambah'])) {
    $nama             = $_POST['name_course'];
    $thumbnail        = $_POST['thumbnail'];
    $duration         = $_POST['duration'];
    $deskripsi        = $_POST['description'];

    $sql = mysqli_query($koneksi, "INSERT INTO course (name_course,thumbnail,duration,description) VALUES ('$nama','$thumbnail','$duration','$deskripsi')") or die(mysqli_error($sql));

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