<?php include('header.php'); ?>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM author INNER JOIN content  INNER JOIN course WHERE course.id=$id AND author.id=$id AND content.id=$id");

$row = mysqli_fetch_assoc($sql);
?>
<div class="container">
  <div class="row">
    <div class="col">
      <img src="img/<?= $row['thumbnail']; ?>" class="card-img-top detail-img" alt="course">
      <div class="card-body detail">
        <h5 class="card-title"></h5>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama Kursus</th>
              <td><?= $row['name_course']; ?></td>
            </tr>
            <tr>
              <th>Author</th>
              <td><?= $row['name_author']; ?></td>
            </tr>
            <tr>
              <th>Durasi</th>
              <td><?= $row['duration']; ?></td>
            </tr>
            <tr>
              <th>Tipe Kursus</th>
              <td><?= $row['type']; ?></td>
            </tr>
            <tr>
              <th>Link Vidio</th>
              <td><a href="<?= $row['video_link']; ?>"><?= $row['video_link']; ?></a></td>
            </tr>
            <tr>
              <th>Nama Konten</th>
              <td><?= $row['name_content']; ?></td>
            </tr>
            <tr>
              <th>Deskripsi</th>
              <td><?= $row['description']; ?></td>
            </tr>

          </thead>
          <tbody>

        </table>
      </div>
    </div>
  </div>
</div>