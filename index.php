<?php include('header.php'); ?>



<div class="container">

  <div class="row">
    <?php
    include('koneksi.php');

    $no = 1;
    $select = mysqli_query($koneksi, "SELECT * FROM author INNER JOIN course ON author.id = course.id");

    while ($row = mysqli_fetch_assoc($select)) :
    ?>
      <div class="col card-mobile">
        <div class="card">
          <img src="img/<?= $row['thumbnail']; ?>" class="card-img-top" alt="course">
          <div class="card-body">
            <h5 class="card-title"><?= $row['name_course']; ?></h5>
            <small>Author : <?= $row['name_author']; ?></small>
            <p class="card-text"><?= $row['description']; ?></p>
            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-outline-primary form-control">Detail</a>
          </div>
        </div>

      </div>
    <?php endwhile; ?>
  </div>
</div>








<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>