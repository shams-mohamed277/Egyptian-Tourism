<?php
include('header.php');
include('nav.php');
include('data.php');

// Use Superglobal Get To define the variables

$id = $_GET['id'] ?? null;

if (!isset($cities[$id])) {
  echo "<div class='container py-5'><h2 class='text-danger text-center'>City not found.</h2></div>";
  include('footer.php');
  exit;
}

// Dynamic card's page
$city = $cities[$id];
?>
<div style="height: 4px; background-color: #ffc107; width: 100%;"></div>
<section class="py-5 bg-dark text-center">
  <h1 class="fw-bold text-warning display-4 mb-3">TRAVEL IN EGYPT</h1>
</section>
<div class="container py-5">
   
<br>
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="./imges/<?= $city['img'] ?>" class="img-fluid rounded shadow" alt="<?= $city['title'] ?>">
    </div>
    <div class="col-md-6">
      <h2 class="text-dark fw-bold display-5"><?= $city['title'] ?></h2>
      <p><?= $city['desc'] ?></p>
      <a href="index.php" class="btn btn-warning w-25 mt-3">Back to Home</a>
    </div>
  </div>
</div>
<br>
<div style="height: 4px; background-color: #ffc107; width: 100%;"></div>
<?php
include('footer.php');
?>
