<?php include('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="kursus">Nama Konten</label>
                    <input type="text" class="form-control" id="kursus" name="name_content">
                </div>
                <div class="form-group">
                    <label for="video_link">Link video</label>
                    <input type="text" class="form-control" id="video_link" name="video_link">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Konten</button>
            </form>
        </div>
    </div>
</div>

<?php
include('koneksi.php');
if (isset($_POST['tambah'])) {
    $name_content = $_POST['name_content'];
    $video_link   = $_POST['video_link'];
    $type         = $_POST['type'];

    $sql = mysqli_query($koneksi, "INSERT INTO content (name_content,video_link,type) VALUES ('$name','$video_link','$type')") or die(mysqli_error($sql));

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