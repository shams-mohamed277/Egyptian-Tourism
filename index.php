<!-- For Link Pages -->
<?php
include('header.php');
include('nav.php');
include('data.php');
?>

<!-- The Interface(Front-end with Bootstrap) -->
<div style="height: 4px; background-color: #ffc107; width: 100%;"></div>
<header class="bg-dark " id="header" >
    
    <h1 class="text-warning text-center fw-bold display-4 py-5" id="title">DISCOVER EGYPT</h1>
</header>
<div class="my-4"></div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- carousel movements -->
          <?php foreach ($slides as $index => $slide): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
              <img src="./imges/<?= $slide ?>" class="img-fluid w-100" style="height: 500px; object-fit: cover;" alt="Slide <?= $index + 1 ?>">
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
<br><br><br>
<h1 class="text-dark text-center">Featured Cities </h1>
<br>
<div class="container">
  <div class="row justify-content-center ">
    <!-- Iterating contents between cards -->
    <?php foreach ($cities as $id => $city): ?>
      <div class="col-10 col-sm-6 col-md-3 mb-5 mx-auto text-center">
        <div class="card all h-100">
               <img src="./imges/<?= $city['img'] ?>" class=" card-img-top " alt="<?= $city['title'] ?>">
            <div class="card-body">
              <p class="card-text text-center fw-bold fs-5"><?= $city['title'] ?></p>
                <div class="d-flex justify-content-center">
                     <a href="cities.php?id=<?= $id ?>" class="btn btn-outline-primary w-100">Learn more</a>
                </div>
            </div>
     
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div style="height: 4px; background-color: #ffc107; width: 100%;"></div>
<?php
include('footer.php');
?>